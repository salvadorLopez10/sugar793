/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/**
 * @class View.Views.Portal.FooterActionsView
 * @alias SUGAR.App.view.views.PortalFooterActionsView
 * @extends View.View.Base.FooterActionsView
 */
({
    /**
     * Support page differs between different clients.
     * @override
     */
    support: function() {
        var serverInfo = app.metadata.getServerInfo();
        var url = 'http://www.sugarcrm.com/crm/product_doc.php?edition=' + serverInfo.flavor + '&version=' +
        serverInfo.version + '&module=Portal';

        window.open(url, '_blank');
    }

})
