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

// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  'built_in_version' => '7.5.2.1',
  'acceptable_sugar_versions' => 
  array (
    0 => '',
  ),
  'acceptable_sugar_flavors' => 
  array (
    0 => 'ENT',
    1 => 'ULT',
  ),
  'readme' => '',
  'key' => 'UNI',
  'author' => 'UNI',
  'description' => 'Modulo de Carga de Condiciones Iniciales',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'condiciones_iniciales',
  'published_date' => '2016-04-15 23:36:37',
  'type' => 'module',
  'version' => 1460763398,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'condiciones_iniciales',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'UNI_condiciones_iniciales',
      'class' => 'UNI_condiciones_iniciales',
      'path' => 'modules/UNI_condiciones_iniciales/UNI_condiciones_iniciales.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
  ),
  'relationships' => 
  array (
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/UNI_condiciones_iniciales',
      'to' => 'modules/UNI_condiciones_iniciales',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/es_ES.lang.php',
      'to_module' => 'application',
      'language' => 'es_ES',
    ),
  ),
);