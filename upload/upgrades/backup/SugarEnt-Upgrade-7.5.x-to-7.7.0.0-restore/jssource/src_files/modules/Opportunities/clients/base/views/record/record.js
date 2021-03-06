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
({
    extendsFrom: 'RecordView',

    /**
     * Holds a reference to the alert this view triggers
     */
    alert: undefined,


    /**
     * {@inheritdoc}
     * @param options
     */
    initialize: function(options) {
        this.plugins = _.union(this.plugins, ['LinkedModel', 'HistoricalSummary']);
        this.once('init', function() {
            var rlis = this.model.getRelatedCollection('revenuelineitems');
            rlis.once('reset', function(collection) {
                // check if the RLI collection is empty
                // and make sure there isn't another RLI warning on the page
                if (collection.length === 0 && $('#createRLI').length === 0) {
                    this.showRLIWarningMessage(this.model.module);
                }
            }, this);
            rlis.fetch({ relate: true });
        }, this);
        this._super('initialize', [options]);
    },

    /**
     * @inheritdoc
     */
    cancelClicked: function () {
        /**
         * todo: this is a sad way to work around some problems with sugarlogic and revertAttributes
         * but it makes things work now. Probability listens for Sales Stage to change and then by
         * SugarLogic, it updates probability when sales_stage changes. When the user clicks cancel,
         * it goes to revertAttributes() which sets the model back how it was, but when you try to
         * navigate away, it picks up those new changes as unsaved changes to your model, and tries to
         * falsely warn the user. This sets the model back to those changed attributes (causing them to
         * show up in this.model.changed) then calls the parent cancelClicked function which does the
         * exact same thing, but that time, since the model was already set, it doesn't see anything in
         * this.model.changed, so it doesn't warn the user.
         */
        var changedAttributes = this.model.changedAttributes(this.model.getSyncedAttributes());
        this.model.set(changedAttributes);
        this._super('cancelClicked');
    },

    /**
     * Display the warning message about missing RLIs
     * @param string module     The module that we are currently on.
     */
    showRLIWarningMessage: function(module) {
        // add a callback to close the alert if users navigate from the page
        app.routing.before('route', this.dismissAlert, undefined, this);

        var message = app.lang.get('TPL_RLI_CREATE', 'Opportunities')
            + '  <a href="javascript:void(0);" id="createRLI">'
            + app.lang.get('TPL_RLI_CREATE_LINK_TEXT', 'Opportunities') + '</a>';

        this.alert = app.alert.show('opp-rli-create', {
            level: 'warning',
            autoClose: false,
            title: app.lang.get('LBL_ALERT_TITLE_WARNING') + ':',
            messages: message,
            onLinkClick: _.bind(function() {
                this.openRLICreate();
            }, this),
            onClose: _.bind(function() {
                app.routing.offBefore('route', this.dismissAlert, this);
            }, this)
        });
    },

    /**
     * Handle dismissing the RLI create alert
     */
    dismissAlert: function() {
        // close RLI warning alert
        app.alert.dismiss('opp-rli-create');
        // remove before route event listener
        app.routing.offBefore('route', this.dismissAlert, this);
    },

    /**
     * Open a new Drawer with the RLI Create Form
     */
    openRLICreate: function() {
        // close RLI warning alert
        this.dismissAlert();

        var model = this.createLinkModel(this.createdModel || this.model, 'revenuelineitems');

        app.drawer.open({
            layout: 'create-actions',
            context: {
                create: true,
                module: model.module,
                model: model
            }
        }, _.bind(this.rliCreateClose, this));
    },

    /**
     * Callback for when the create drawer closes
     * @param model
     */
    rliCreateClose: function(model) {
        if (!model) {
            return;
        }

        var ctx = this.listContext || this.context;

        ctx.resetLoadFlag();
        ctx.set('skipFetch', false);
        ctx.loadData();

        // find the child collection for the RLI subpanel
        // if we find one and it has the loadData method, call that method to
        // force the subpanel to load the data.
        var rli_ctx = _.find(ctx.children, function(child) {
            return (child.get('module') == 'RevenueLineItems');
        }, this);
        if (!_.isUndefined(rli_ctx) && _.isFunction(rli_ctx.loadData)) {
            rli_ctx.loadData();
        }
    }
})
