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
({extendsFrom:'BadgeSelectField',initialize:function(options){this._super('initialize',[options]);this.type='badge-select';},_render:function(){this._super('_render');this.styleLabel(this.model.get(this.name));},styleLabel:function(status){var $label;if(this.action!=='edit'){$label=this.$('.label');switch(status){case'ACTIVE':$label.addClass('label-success');break;case'INACTIVE':$label.addClass('label-important');break;default:break;}}}})