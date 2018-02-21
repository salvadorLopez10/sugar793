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
({initialize:function(options){this._super('initialize',[options]);this.meta=_.extend({},app.metadata.getView(null,'headerpane'),this.meta);this._title=this.meta.title;this.context.on('headerpane:title',function(title){this._title=title;if(!this.disposed)this.render();},this);app.shortcuts.register('Headerpane:Cancel',['esc','ctrl+alt+l'],function(){var $cancelButton=this.$('a[name=cancel_button]'),$closeButton=this.$('a[name=close]');if($cancelButton.is(':visible')&&!$cancelButton.hasClass('disabled')){$cancelButton.click();}else if($closeButton.is(':visible')&&!$closeButton.hasClass('disabled')){$closeButton.click();}},this,true);app.shortcuts.register('Headerpane:Save',['ctrl+s','ctrl+alt+a'],function(){var $saveButton=this.$('a[name=save_button]');if($saveButton.is(':visible')&&!$saveButton.hasClass('disabled')){$saveButton.click();}},this,true);$(window).on('resize.headerpane.'+this.cid,_.bind(this.adjustHeaderpane,this));this.layout.on('headerpane:adjust_fields',this.adjustTitle,this);},adjustTitle:function(){var $titleCell=this.$el.find('[data-name=title]');if($titleCell){var $ellipsisDiv=$titleCell.find('.ellipsis_inline');var width=$titleCell.css('max-width');$ellipsisDiv.css({'max-width':width});}},_renderHtml:function(){this.title=!_.isUndefined(this._title)?this._formatTitle(this._title):this.title;this.meta.fields=_.map(this.meta.fields,function(field){if(field.name==='title'){field['formatted_value']=this.title||this._formatTitle(field['default_value']);}
return field;},this);this._super('_renderHtml');},_formatTitle:function(title){if(!title){return'';}
return app.lang.get(title,this.module);},adjustHeaderpane:function(){this.setContainerWidth();this.adjustHeaderpaneFields();},adjustHeaderpaneFields:function(){var $ellipsisCell,ellipsisCellWidth,$recordCells;if(this.disposed){return;}
$recordCells=this.$('.headerpane h1').children('.record-cell, .btn-toolbar');if(($recordCells.length>0)&&(this.getContainerWidth()>0)){$ellipsisCell=$(this._getCellToEllipsify($recordCells));if($ellipsisCell.length>0){if($ellipsisCell.hasClass('edit')){$ellipsisCell.css({'width':'100%'});}else{ellipsisCellWidth=this._calculateEllipsifiedCellWidth($recordCells,$ellipsisCell);this._setMaxWidthForEllipsifiedCell($ellipsisCell,ellipsisCellWidth);}}}
if(this.layout){this.layout.trigger('headerpane:adjust_fields');}},getContainerWidth:function(){return this._containerWidth;},setContainerWidth:function(){this._containerWidth=this._getParentLayoutWidth(this.layout);},_getParentLayoutWidth:function(layout){if(!layout){return 0;}else if(_.isFunction(layout.getPaneWidth)){return layout.getPaneWidth(this);}
return this._getParentLayoutWidth(layout.layout);},_getCellToEllipsify:function($cells){var fieldTypesToEllipsify=['fullname','name','text','base','enum','url','dashboardtitle','label'];return _.find($cells,function(cell){return(_.indexOf(fieldTypesToEllipsify,$(cell).data('type'))!==-1);});},_calculateEllipsifiedCellWidth:function($cells,$ellipsisCell){var width=this.getContainerWidth();_.each($cells,function(cell){var $cell=$(cell);if($cell.is($ellipsisCell)){width-=(parseInt($ellipsisCell.css('padding-left'),10)+
parseInt($ellipsisCell.css('padding-right'),10));}else if($cell.is(':visible')){$cell.css({'width':'auto'});width-=$cell.outerWidth();}
$cell.css({'width':''});});return width;},_setMaxWidthForEllipsifiedCell:function($ellipsisCell,width){var ellipsifiedCell,fieldType=$ellipsisCell.data('type');if(fieldType==='fullname'||fieldType==='dashboardtitle'){ellipsifiedCell=this.getField($ellipsisCell.data('name'));width-=ellipsifiedCell.getCellPadding();ellipsifiedCell.setMaxWidth(width);}else{$ellipsisCell.css({'max-width':width});}},_renderFields:function(){this._super('_renderFields');this.adjustHeaderpane();},unbind:function(){this._super('unbind');$(window).off('resize.headerpane.'+this.cid);this.layout.off('headerpane:adjust_fields',this.adjustTitle);}})