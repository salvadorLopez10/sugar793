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
({extendsFrom:'EnumField',plugins:['EllipsisInline','Tooltip'],tooltipTemplate:'',tpTooltipMap:{},cssClassSelector:'',updateDefaultTooltip:false,tooltipDir:'right',initialize:function(options){if(app.lang.direction==='rtl'){this.tooltipDir='left';}
var collectionParams={limit:100,params:{}};this._super('initialize',[options]);if(this.def.use_generic_timeperiods){collectionParams.params.use_generic_timeperiods=true;}
this.tpCollection=app.data.createBeanCollection('TimePeriods');this.tpCollection.once('reset',this.formatTooltips,this);this.tpCollection.on('sync',this.render,this);this.tpCollection.fetch(collectionParams);this.tooltipTemplate=app.template.getField('timeperiod','tooltip',this.module);var config=app.metadata.getModule('Forecasts','config');if(!config||config.is_setup===0){this.def.options='generic_timeperiod_options';}},bindDataChange:function(){this._super("bindDataChange");if(this.model){this.model.on('change:'+this.name,function(){this.initializeAllPluginTooltips();},this);}},formatTooltips:function(data){var usersDatePrefs=app.user.getPreference('datepref');data.each(function(model){this.tpTooltipMap[model.id]={start:app.date.format(app.date.parse(model.get('start_date')),usersDatePrefs),end:app.date.format(app.date.parse(model.get('end_date')),usersDatePrefs)}},this);this._destroyTplCollection();if(this.updateDefaultTooltip){this.updateDefaultTooltip=false;var tooltipText=app.lang.get('LBL_DROPDOWN_TOOLTIP','TimePeriods',this.tpTooltipMap[this.value[0]]);this.$('[rel="tooltip"]').attr('data-original-title',tooltipText);}},_render:function(){this._super("_render");if(this.tplName=='noaccess'){return this;}
var $el=this.$(this.fieldTag);$el.on('select2-selected',_.bind(this.onSelectClear,this));$el.on('select2-open',_.bind(this.onSelectOpen,this));$el.on('select2-close',_.bind(this.onSelectClear,this));this.initializeAllPluginTooltips();return this;},onSelectOpen:function(){var $el=$('div.'+this.cssClassSelector);this.removePluginTooltips();this.addPluginTooltips($el);},onSelectClear:function(){var $el=$('div.'+this.cssClassSelector);this.removePluginTooltips($el);this.addPluginTooltips();},getSelect2Options:function(optionsKeys){var options=this._super("getSelect2Options",[optionsKeys]);options.formatResult=_.bind(this.formatOption,this);options.formatSelection=_.bind(this.formatOption,this);if(_.isEmpty(options.dropdownCssClass)){options.dropdownCssClass='select2-timeperiod-dropdown-'+this.cid;}
this.cssClassSelector=options.dropdownCssClass;return options;},formatOption:function(object){this.updateDefaultTooltip=_.isUndefined(this.tpTooltipMap[object.id]);return this.tooltipTemplate({tooltip:this.tpTooltipMap[object.id],value:object.text,tooltipDir:this.tooltipDir});},_destroyTplCollection:function(){if(this.tpCollection){this.tpCollection.off(null,null,this);this.tplCollection=null;}},_dispose:function(){this._destroyTplCollection();this._super('_dispose');}})