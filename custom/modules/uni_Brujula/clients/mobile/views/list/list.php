<?php
$module_name = 'uni_Brujula';
$viewdefs[$module_name] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'label' => 'LBL_NAME',
                'default' => true,
                'enabled' => true,
                'link' => true,
              ),
              1 => 
              array (
                'name' => 'fecha_reporte',
                'label' => 'LBL_FECHA_REPORTE',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'width' => '9',
                'default' => false,
                'enabled' => true,
                'link' => true,
              ),
              3 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_TEAM',
                'width' => '9',
                'default' => false,
                'enabled' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
