<?php
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
$viewdefs['KBDocuments']['base']['view']['list'] = array(
    'panels' => array(
        array(
            'name'   => 'panel_header',
            'label'  => 'LBL_PANEL_1',
            'fields' => array(
                array(
                    'label'   => 'LBL_LIST_NAME',
                    'enabled' => true,
                    'default' => true,
                    'link'    => true,
                    'name'    => 'name',
                ),
                array(
                    'label'   => 'LBL_STATUS',
                    'enabled' => true,
                    'default' => true,
                    'name'    => 'status',
                ),
                array(
                    'name'              => 'assigned_user_name',
                    'target_record_key' => 'assigned_user_id',
                    'target_module'     => 'Employees',
                    'label'             => 'LBL_ASSIGNED_TO_NAME',
                    'enabled'           => true,
                    'default'           => true,
                    'sortable'          => false,
                ),
            ),
        ),
    ),
);
