/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Fields.Base.FileField
 * @alias SUGAR.App.view.fields.BaseFileField
 * @extends View.Field
 */
({
    fieldTag: 'input[type=file]',
    supportedImageExtensions: {
        'image/jpeg': 'jpg',
        'image/png': 'png',
        'image/gif': 'gif'
    },
    events: {
        'click [data-action=download]': 'startDownload',
        'click [data-action=delete]': 'deleteFile'
    },
    fileUrl: '',
    plugins: ['File', 'FieldDuplicate', 'EllipsisInline'],

    /**
     * Handler for delete file control
     *
     * Calls api to remove attached file from the model and
     * clear value and shows input[type=file] to upload new file
     * @param {Event} e
     */
    deleteFile: function(e) {
        var self = this;

        if (this.model.isNew()) {
            this.model.unset(this.name);
            if (this.disposed) {
                return;
            }
            this.render();
            return;
        }

        app.alert.show('delete_file_confirmation', {
            level: 'confirmation',
            messages: app.lang.get('LBL_FILE_DELETE_CONFIRM', self.module),
            onConfirm: function() {
                var data = {
                        module: self.module,
                        id: self.model.id,
                        field: self.name
                    },
                    callbacks = {
                        success: function() {
                            self.model.set(self.name, '');
                            self.model.save({}, {
                                //Show alerts for this request
                                showAlerts: {
                                    'process': true,
                                    'success': {
                                        messages: app.lang.get('LBL_FILE_DELETED', self.module)
                                    }
                                },
                                fields: [self.name]
                            });
                            if (self.disposed) {
                                return;
                            }
                            // Because delete button is enabled in edit mode only and
                            // bindDataChange is overrided to prevent rendering field
                            // in edit mode call render method manually
                            self.render();
                        },
                        error: function(data) {
                            // refresh token if it has expired
                            app.error.handleHttpError(data, {});
                        }
                    };
                app.api.file('delete', data, null, callbacks, {htmlJsonFormat: false});
            }
        });
    },

    /**
     * {@inheritDoc}
     *
     * Override field templates for merge-duplicate view.
     */
    _loadTemplate: function() {
        this._super('_loadTemplate');
        if (this.view.name === 'merge-duplicates') {
            this.template = app.template.getField(this.type,
                'merge-duplicates-' + this.tplName,
                this.module, this.tplName
            ) || app.template.empty;
            this.tplName = 'list';
        }
    },

    /**
     * Handler to refresh field state.
     *
     * Called from {@link app.plugins._onFieldDuplicate}.
     */
    onFieldDuplicate: function() {
        if (this.disposed ||
            this.view.name !== 'merge-duplicates' ||
            this.options.viewName !== 'edit'
        ) {
            return;
        }
        this.render();
    },

    _render: function() {
        // This array will contain objects accessible in the view
        this.model = this.model || this.view.model;
        app.view.Field.prototype._render.call(this);
        return this;
    },
    format: function(value) {
        var attachments = [];
        // Not the same behavior either the value is a string or an array of files
        if (_.isArray(value)) {
            // If it's an array, we get the uri for each files in the response
            _.each(value, function(file) {
                var fileObj = {
                    name: file.name,
                    url: this.formatUri(file.uri)
                };
                attachments.push(fileObj);
            }, this);
        } else if (value) {
            // If it's a string, build the uri with the api library
            var urlOpts = {
                    module: this.module,
                    id: this.model.id,
                    field: this.name
                },
                fileObj = this._createFileObj(value, urlOpts);
            attachments.push(fileObj);
        }
        // Cannot be a hard check against "list" since subpanel-list needs this too
        return attachments;
    },
    /**
     * gets file object
     * @param {String} value file name
     * @param {Object} urlOpts url options
     * @returns {{name: *, mimeType: string, url: (String|*)}}
     * @private
     */
    _createFileObj: function (value, urlOpts) {
        var isImage = this._isImage(this.model.get('file_mime_type')),
            forceDownload = !isImage,
            mimeType = isImage ? 'image' : '',
            docType = this.model.get('doc_type');
        return {
            name: value,
            mimeType: mimeType,
            docType: docType,
            url: app.api.buildFileURL(urlOpts,
                {
                    htmlJsonFormat: false,
                    passOAuthToken: false,
                    cleanCache: true,
                    forceDownload: forceDownload
                })
        };
    },
    /**
     * This is overriden by portal in order to prepend site url
     * @param {String} uri
     * @returns {String} formatted uri
     */
    formatUri: function(uri) {
        return uri;
    },
    startDownload: function(e) {
        var uri = this.$(e.currentTarget).data('url');

        app.api.fileDownload(uri, {
            error: function(data) {
                // refresh token if it has expired
                app.error.handleHttpError(data, {});
            }
        }, {iframe: this.$el});
    },

    /**
     * {@inheritDoc}
     *
     * Overrides `change` event for file field.
     * We should call `render` method when change event is triggered if:
     * 1. it is not duplicate-merge view and field isn't in edit mode. If it is
     * in edit mode we cannot set a value of a type `file` input.
     * 2. it is duplicate-merge view and field is in edit mode. Because
     * for this view we display file field as label (not input[type=file])
     * in edit mode we should update view on change.
     */
    bindDataChange: function() {
        if (!this.model) {
            return;
        }
        this.model.on('change:' + this.name, function() {
            if (_.isUndefined(this.options.viewName) || this.options.viewName !== 'edit') {
                this.render();
            }
        }, this);
    },

    /**
     * {@inheritdoc}
     *
     * Because input file uses full local path to file as value,
     * value can contains directory names.
     * Unformat value to have file name only in it.
     */
    unformat: function (value) {
        return value.split('/').pop().split('\\').pop();
    },

    /**
     * Check if input mime type is an image or not.
     *
     * @param {String} mime type.
     * @return {Boolean} true if mime type is an image.
     * @private
     */
    _isImage: function(mimeType) {
        return !!this.supportedImageExtensions[mimeType];
    }
})
