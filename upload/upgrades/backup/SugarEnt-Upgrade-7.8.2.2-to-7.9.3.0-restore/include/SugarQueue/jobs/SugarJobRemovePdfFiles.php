<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

require_once 'modules/SchedulersJobs/SchedulersJob.php';

/**
 * Class to run a job which should remove temporary PDF files
 */
class SugarJobRemovePdfFiles extends SugarJobRemoveFiles
{
    /**
     * {@inheritDoc}
     */
    protected function getDirectory()
    {
        return sugar_cached('pdf');
    }

    /**
     * {@inheritDoc}
     */
    protected function getMaxLifetime()
    {
        global $sugar_config;

        if (isset($sugar_config['pdf_file_max_lifetime'])) {
            return $sugar_config['pdf_file_max_lifetime'];
        }

        return null;
    }
}
