<?php
// created: 2015-06-13 19:14:21
$viewdefs['Rel_Relaciones']['base']['view']['subpanel-for-accounts-rel_relaciones_accounts_1'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_PANEL_1',
      'fields' => 
      array (
        0 => 
        array (
          'label' => 'LBL_NAME',
          'enabled' => true,
          'default' => true,
          'name' => 'name',
          'link' => true,
        ),
        1 => 
        array (
          'name' => 'relaciones_activas',
          'label' => 'LBL_RELACIONES_ACTIVAS',
          'enabled' => true,
          'default' => true,
        ),
        2 => 
        array (
          'name' => 'relacion_c',
          'label' => 'LBL_RELACION',
          'enabled' => true,
          'id' => 'ACCOUNT_ID1_C',
          'link' => true,
          'sortable' => false,
          'default' => true,
        ),
        3 => 
        array (
          'label' => 'LBL_DATE_MODIFIED',
          'enabled' => true,
          'default' => true,
          'name' => 'date_modified',
        ),
      ),
    ),
  ),
  'orderBy' => 
  array (
    'field' => 'date_modified',
    'direction' => 'desc',
  ),
  'type' => 'subpanel-list',
);