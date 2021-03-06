<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
global $app_strings;

$dashletMeta['Tel_TelefonosDashlet'] = array('module'		=> 'Tel_Telefonos',
										  'title'       => translate('LBL_HOMEPAGE_TITLE', 'Tel_Telefonos'), 
                                          'description' => 'A customizable view into Tel_Telefonos',
                                          'icon'        => 'icon_Tel_Telefonos_32.gif',
                                          'category'    => 'Module Views');