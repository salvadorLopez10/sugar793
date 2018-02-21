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

require_once('include/MVC/View/SugarView.php');
require_once('include/MVC/Controller/SugarController.php');

class ViewClassic extends SugarView
{
 	/**
 	 * @see SugarView::SugarView()
 	 */
    public function __construct(
 	    $bean = null,
        $view_object_map = array()
        )
    {
 		parent::SugarView();
 		$this->type = $this->action;
 	}

 	/**
 	 * @see SugarView::display()
 	 */
    public function display()
    {
		if(($this->bean instanceof SugarBean) && isset($this->view_object_map['remap_action']) && !$this->bean->ACLAccess($this->view_object_map['remap_action']))
		{
		  ACLController::displayNoAccess(true);
		  return false;
		}
 		// Call SugarController::getActionFilename to handle case sensitive file names
 		$file = SugarController::getActionFilename($this->action);
 		$classic_file = SugarAutoLoader::existingCustomOne('modules/' . $this->module . '/'. $file . '.php');
 		if($classic_file) {
 		    $this->includeClassicFile($classic_file);
 		    return true;
 		}
		return false;
 	}
}
