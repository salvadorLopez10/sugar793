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
({initialize:function(options){this._super('initialize',[options]);this._initializeCollectionFilterDef(options);},_initializeCollectionFilterDef:function(options){if(_.isUndefined(options.def.context.tag)){return;}
var filterDef={filter:[{tag:{$in:[{id:false,name:options.def.context.tag}]},active_rev:{$equals:1}}]};var chain=['sidebar','main-pane','list','recordlist'];var recordList=_.reduce(chain,function(component,name){if(!_.isUndefined(component)){return component.getComponent(name);}},this);if(!_.isUndefined(recordList)){recordList.collection.filterDef=filterDef;}}})