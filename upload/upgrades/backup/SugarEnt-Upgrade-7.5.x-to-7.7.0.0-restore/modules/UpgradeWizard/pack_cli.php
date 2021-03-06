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

require_once __DIR__ . '/../../modules/HealthCheck/pack_sortinghat.php';

function packUpgradeWizardCli($phar, $params, $files = array())
{

    $defaults = array(
        'version' => '7.5.0.0',
        'build' => '998'
    );

    packSortingHat($phar, $params);

    $params = array_merge($defaults, $params);

    file_put_contents(__DIR__ . '/version.json', json_encode($params, true));

    $chdir = __DIR__ . "/../..";

    $files = array_merge(
        array(
            "modules/UpgradeWizard/SILENTUPGRADE.txt" => 'SILENTUPGRADE.txt',
            "modules/UpgradeWizard/UpgradeDriver.php" => 'UpgradeDriver.php',
            "modules/UpgradeWizard/CliUpgrader.php" => 'CliUpgrader.php',
            "modules/UpgradeWizard/version.json" => 'version.json',
            'modules/HealthCheck/HealthCheckClient.php' => 'HealthCheckClient.php',
            'include/SugarSystemInfo/SugarSystemInfo.php' => 'SugarSystemInfo.php',
            'include/SugarHeartbeat/SugarHeartbeatClient.php' => 'SugarHeartbeatClient.php',
            'modules/HealthCheck/HealthCheckHelper.php' => 'HealthCheckHelper.php',
        ),
        $files
    );

    foreach ($files as $file => $inArchive) {
        $phar->addFile($chdir . '/' . $file, $inArchive);
    }
}

if (empty($argv[0]) || basename($argv[0]) != basename(__FILE__)) {
    return;
}

$sapi_type = php_sapi_name();
if (substr($sapi_type, 0, 3) != 'cli') {
    die("This is command-line only script");
}

if (empty($argv[1])) {
    die("Use $argv[0] name (no zip or phar extension) [sugarVersion [buildNumber]]\n");
}

$pathinfo = pathinfo($argv[1]);

if (isset($pathinfo['extension']) && in_array($pathinfo['extension'], array('zip', 'phar'))) {
    $name = $pathinfo['dirname'] . DIRECTORY_SEPARATOR . $pathinfo['filename'];
} else {
    $name = $argv[1];
}

$params = array();
if (isset($argv[2])) {
    $params['version'] = $argv[2];
}
if (isset($argv[3])) {
    $params['build'] = $argv[3];
}

$phar = new Phar($name . '.phar');

packUpgradeWizardCli($phar, $params);

$stub = <<<'STUB'
<?php
Phar::mapPhar();
set_include_path('phar://' . __FILE__ . PATH_SEPARATOR . get_include_path());
require_once "CliUpgrader.php"; CliUpgrader::start(); __HALT_COMPILER();
STUB;
$phar->setStub($stub);

$zip = new ZipArchive();
$zip->open($name . '.zip', ZipArchive::CREATE);

packUpgradeWizardCli($zip, $params);

$zip->close();

exit(0);
