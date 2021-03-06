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

require_once("data/BeanFactory.php");
require_once('modules/ExpressionEngine/formulaHelper.php');

class ViewRollupWizard extends SugarView
{
    var $vars = array("tmodule", "selLink", 'type');

    public function __construct()
    {
        parent::__construct();
        foreach($this->vars as $var)
        {
            if (!isset($_REQUEST[$var]))
                sugar_die("Required paramter $var not set in Rollup Wizard");
            $this->$var = $_REQUEST[$var];
        }
        $mb = new ModuleBuilder();
        $this->package = empty($_REQUEST['package']) || $_REQUEST['package'] == 'studio' ? "" : $mb->getPackage($_REQUEST['package']);

    }

    function display() {
        $rfields = array();
        $rmodules = array();
        $links = FormulaHelper::getLinksForModule($this->tmodule, $this->package);

        //We need just a flat list of the modules for the module select dropdown
        foreach ($links as $lname => $link) {
            $rmodules[$lname] = $link['label'];
        }

        //Preload the related fields from the first relationship
        if (!empty($links)) {
            reset($links);
            $link = isset($links[$this->selLink]) ? $links[$this->selLink] : $links[key($links)];
            $rfields = FormulaHelper::getRelatableFieldsForLink($link, $this->package, array("number"));
        }

        $this->ss->assign("rmodules", $rmodules);
        $this->ss->assign("rfields", $rfields);
        $this->ss->assign("tmodule", $this->tmodule);
        $this->ss->assign("selLink", $this->selLink);

        $this->ss->assign("rollup_types", array(
            "Sum" => "Sum", "Ave" => "Average", "Min" => "Minimum", "Max" => "Maximum"
        ));
        $this->ss->assign("rollupType", $this->type);

        $this->ss->display('modules/ExpressionEngine/tpls/rollupWizard.tpl');
    }
}