<?php
$viewdefs['Meetings'] = 
array (
  'mobile' => 
  array (
    'view' => 
    array (
      'detail' => 
      array (
        'templateMeta' => 
        array (
          'maxColumns' => '1',
          'widths' => 
          array (
            0 => 
            array (
              'label' => '10',
              'field' => '30',
            ),
          ),
          'useTabs' => false,
        ),
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_PANEL_DEFAULT',
            'columns' => '1',
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'displayParams' => 
                array (
                  'required' => true,
                  'wireless_edit_only' => true,
                ),
              ),
              1 => 'date_start',
              2 => 'status',
              3 => 
              array (
                'name' => 'duration',
                'type' => 'fieldset',
                'orientation' => 'horizontal',
                'related_fields' => 
                array (
                  0 => 'duration_hours',
                  1 => 'duration_minutes',
                ),
                'label' => 'LBL_DURATION',
                'fields' => 
                array (
                  0 => 
                  array (
                    'name' => 'duration_hours',
                  ),
                  1 => 
                  array (
                    'type' => 'label',
                    'default' => 'LBL_HOURS_ABBREV',
                    'css_class' => 'label_duration_hours hide',
                  ),
                  2 => 
                  array (
                    'name' => 'duration_minutes',
                  ),
                  3 => 
                  array (
                    'type' => 'label',
                    'default' => 'LBL_MINSS_ABBREV',
                    'css_class' => 'label_duration_minutes hide',
                  ),
                ),
              ),
              4 => 'description',
              5 => 'parent_name',
              6 => 
              array (
                'name' => 'check_in_address_c',
                'label' => 'LBL_CHECK_IN_ADDRESS',
              ),
              7 => 
              array (
                'name' => 'check_in_time_c',
                'label' => 'LBL_CHECK_IN_TIME',
              ),
              8 => 
              array (
                'name' => 'check_in_latitude_c',
                'label' => 'LBL_CHECK_IN_LATITUDE',
              ),
              9 => 
              array (
                'name' => 'check_in_longitude_c',
                'label' => 'LBL_CHECK_IN_LONGITUDE',
              ),
              10 => 'assigned_user_name',
              11 => 'team_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
