{*
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
*}
<script type="text/javascript" src="{sugar_getjspath file='modules/EAPM/EAPMEdit.js'}"></script>
<script type="text/javascript" src="cache/include/externalAPI.cache.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<input type="hidden" name="application_raw" id="application_raw" value="{$fields.application.value}">
<script type="text/javascript">
EAPMFormName = 'DetailView';
EAPMChange();
</script>