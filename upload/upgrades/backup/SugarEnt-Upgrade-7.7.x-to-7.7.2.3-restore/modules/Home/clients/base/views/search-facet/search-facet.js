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
({events:{'click [data-facet-criteria]':'itemClicked'},initialize:function(options){this._super('initialize',[options]);this.facetId=this.meta.facet_id;this.isSingleItem=this.meta.ui_type==='single';this.facetItems=[];if(this.context.get('facets')&&this.context.get('facets')[this.facetId]){this.parseFacetsData();}
this.bindFacetsEvents();},bindFacetsEvents:function(){this.context.on('facets:change',this.parseFacetsData,this);},parseFacetsData:function(){var currentFacet=this.context.get('facets')[this.facetId];var selectedFacets=this.context.get('selectedFacets');if(_.isUndefined(currentFacet)){this.render();return;}
if(this.isSingleItem&&currentFacet.results.count===0){this.$el.addClass('disabled');this.$el.data('action','disabled');}else{this.$el.data('action','enabled');this.$el.removeClass('disabled');}
if(this.clickedFacet){this.clickedFacet=false;return;}
if(_.isUndefined(currentFacet)){app.logger.warn('The facet type : '+this.facetId+'is not returned by the server.'+' Therefore, the facet dashlet will have no data.');return;}
var results=currentFacet.results;this.facetItems=[];if(this.isSingleItem){this.facetItems=[{key:this.facetId,label:app.lang.get(this.meta.label,'Filters'),count:results.count,selected:selectedFacets[this.facetId]}];this.render();return;}
var labelFunction=this._getDefaultLabel;_.each(results,function(val,key){var selected=_.contains(selectedFacets[this.facetId],key);this.facetItems.push({key:key,label:labelFunction(key),count:val,selected:selected});},this);if(_.isEmpty(this.facetItems)){this.layout.context.trigger('dashboard:collapse:fire',true);}else{this.layout.context.trigger('dashboard:collapse:fire',false);this.facetItems=_.sortBy(this.facetItems,'count').reverse();}
this.render();},itemClicked:function(event){var currentTarget=this.$(event.currentTarget);if(this.$el.data('action')==='disabled'){return;}
if(!this.clickedFacet&&!this.collection.dataFetched){return;}
var facetCriteriaId=currentTarget.data('facet-criteria');currentTarget.toggleClass('selected');this.clickedFacet=true;this.context.trigger('facet:apply',this.facetId,facetCriteriaId,this.isSingleItem);},_getDefaultLabel:function(key){return app.lang.getModuleName(key,{plural:true});}})