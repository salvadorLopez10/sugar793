<?php
// created: 2018-01-10 18:31:46
$viewdefs['Opportunities']['base']['view']['list'] = array (
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
          'name' => 'name',
          'link' => true,
          'label' => 'LBL_LIST_OPPORTUNITY_NAME',
          'enabled' => true,
          'default' => true,
          'related_fields' => 
          array (
            0 => 'total_revenue_line_items',
            1 => 'closed_revenue_line_items',
            2 => 'included_revenue_line_items',
          ),
        ),
        1 => 
        array (
          'name' => 'account_name',
          'link' => true,
          'label' => 'LBL_LIST_ACCOUNT_NAME',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
        ),
        2 => 
        array (
          'name' => 'estatus_c',
          'label' => 'LBL_ESTATUS',
          'enabled' => true,
          'readonly' => true,
          'width' => '10%',
          'default' => true,
        ),
        3 => 
        array (
          'name' => 'monto_c',
          'label' => 'LBL_MONTO',
          'enabled' => true,
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'currency_format' => true,
          'width' => '10%',
          'default' => true,
        ),
        4 => 
        array (
          'name' => 'tipo_producto_c',
          'label' => 'LBL_TIPO_PRODUCTO',
          'enabled' => true,
          'readonly' => true,
          'width' => '10%',
          'default' => true,
        ),
        5 => 
        array (
          'name' => 'assigned_user_name',
          'label' => 'LBL_LIST_ASSIGNED_USER',
          'id' => 'ASSIGNED_USER_ID',
          'enabled' => true,
          'default' => true,
          'sortable' => true,
        ),
        6 => 
        array (
          'name' => 'date_entered',
          'label' => 'LBL_DATE_ENTERED',
          'enabled' => true,
          'default' => true,
          'readonly' => true,
        ),
        7 => 
        array (
          'name' => 'team_name',
          'type' => 'teamset',
          'label' => 'LBL_LIST_TEAM',
          'enabled' => true,
          'default' => false,
        ),
        8 => 
        array (
          'name' => 'sales_stage',
          'label' => 'LBL_LIST_SALES_STAGE',
          'enabled' => true,
          'default' => true,
        ),
        9 => 
        array (
          'name' => 'probability',
          'label' => 'LBL_PROBABILITY',
          'enabled' => true,
          'default' => true,
        ),
      ),
    ),
  ),
);