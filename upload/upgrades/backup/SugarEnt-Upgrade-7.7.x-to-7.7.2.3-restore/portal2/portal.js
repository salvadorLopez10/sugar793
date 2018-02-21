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
(function(app){app.events.on("app:init",function(){var routes;routes=[{name:"dashboard",route:"",callback:function(){app.controller.loadView({layout:"dashboard"});}},{name:"logout",route:"logout/?clear=:clear"},{name:"logout",route:"logout"},{name:"signup",route:"signup",callback:function(){app.controller.loadView({module:"Signup",layout:"signup",create:true});}},{name:"search",route:"search/:query",callback:function(query){try{var decodedQuery=decodeURIComponent(query);app.controller.loadView({mixed:true,module:"Search",layout:"search",query:decodedQuery,skipFetch:true});}catch(err){app.logger.error("Search term not a valid URI component.  Will not route search/"+query);}}},{name:"create",route:":module/create",callback:function(module){app.controller.loadView({module:module,layout:"records"});app.drawer.open({layout:'create',context:{create:true}},_.bind(function(context,model){var module=context.get("module")||model.module,route=app.router.buildRoute(module);app.router.navigate(route,{trigger:true});},this));}},{name:"profile",route:"profile",callback:function(){app.controller.loadView({layout:"record",module:"Contacts",modelId:app.user.get("id")});}},{name:"listHome",route:"Home",callback:function(){app.controller.loadView({layout:"dashboard"});}},{name:"list",route:":module"},{name:"record",route:":module/:id"}];app.routing.setRoutes(routes);});var oHandleRenderError=app.error.handleRenderError;app.error.handleRenderError=function(component,method,additionalInfo){function handlePortalRenderDenied(c){var title,message;title=app.lang.get('ERR_NO_VIEW_ACCESS_TITLE');message=app.utils.formatString(app.lang.get('ERR_NO_VIEW_ACCESS_MSG'),[c.module]);app.logger.warn(title+":\n"+message);}
if(method==='view_render_denied'){handlePortalRenderDenied(component);}else{oHandleRenderError(component,method,additionalInfo);}};var oRoutingBefore=app.routing.beforeRoute;app.routing.beforeRoute=function(route,args){var dm,nonModuleRoutes;nonModuleRoutes=["search","error","profile","profileedit","logout"];app.logger.debug("Loading route. "+(route?route:'No route or undefined!'));if(!oRoutingBefore.call(this,route,args))return false;function alertUser(msg){msg=msg||"LBL_PORTAL_MIN_MODULES";app.alert.show("no-sidecar-access",{level:"error",title:app.lang.get("LBL_PORTAL_ERROR"),messages:[app.lang.get(msg)]});}
if(route==='index'){dm=typeof(app.config)!==undefined&&app.config.defaultModule?app.config.defaultModule:null;if(dm&&app.metadata.getModule(dm)&&app.acl.hasAccess('read',dm)){app.router.list(dm);}else if(app.acl.hasAccess('read','Home')){app.router.index();}else{alertUser();return false;}}else if(!_.include(nonModuleRoutes,route)&&args[0]&&!app.metadata.getModule(args[0])||!app.acl.hasAccess('read',args[0])){app.logger.error("Module not loaded or user does not have access. ",route);alertUser("LBL_PORTAL_ROUTE_ERROR");return false;}
return true;};app.Controller=app.Controller.extend({loadView:function(params){var self=this,callbackAppNotAvailable,options;if(params.layout==='login'){app.Controller.__super__.loadView.call(this,params);}
if(app.config&&app.config.appStatus=='offline'){if(params.layout!=='login'){options={module:"Login",layout:"login",create:true};app.Controller.__super__.loadView.call(self,options);}
callbackAppNotAvailable=function(data){app.alert.show('appOffline',{level:"error",title:app.lang.get('LBL_PORTAL_ERROR'),messages:app.lang.get('LBL_PORTAL_OFFLINE'),autoclose:false});};if(app.api.isAuthenticated()){app.logout({success:callbackAppNotAvailable,error:callbackAppNotAvailable},{clear:true});}else{callbackAppNotAvailable();}
return;}
if(params.layout!=='login'){app.Controller.__super__.loadView.call(this,params);}}});var __superBeanSave__=app.Bean.prototype.save;app.Bean.prototype.save=function(attributes,options){var defaultParams={portal_flag:1,portal_viewable:1};var moduleFields=app.metadata.getModule(this.module).fields||{};for(var field in defaultParams){if(moduleFields[field]){this.set(field,defaultParams[field],{silent:true});}}
__superBeanSave__.call(this,attributes,options);};app.events.on('app:sync:complete',function(){app.date.lang(app.user.getPreference('language'));});})(SUGAR.App);