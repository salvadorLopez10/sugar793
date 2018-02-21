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

/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN pmse_BpmnLaneset
 */
class pmse_BpmnLaneset_sugar extends Basic {
	var $new_schema = true;
	var $module_dir = 'pmse_Project/pmse_BpmnLaneset';
	var $object_name = 'pmse_BpmnLaneset';
	var $table_name = 'pmse_bpmn_laneset';
	var $importable = false;
    var $id;
    var $name;
    var $date_entered;
    var $date_modified;
    var $modified_user_id;
    var $modified_by_name;
    var $created_by;
    var $created_by_name;
    var $description;
    var $deleted;
    var $created_by_link;
    var $modified_user_link;
    var $activities;
    var $assigned_user_id;
    var $assigned_user_name;
    var $assigned_user_link;
    var $lns_uid;
    var $prj_id;
    var $pro_id;
    var $lns_parent_lane;
    var $lns_is_horizontal;
    var $lns_state;

    /**
     * @deprecated Use __construct() instead
     */
    public function pmse_BpmnLaneset_sugar()
    {
        self::__construct();
    }

	public function __construct(){
		parent::__construct();
	}
}
