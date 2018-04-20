<?php
$viewdefs['Calls'] = 
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
                1 =>
                    array (
                        'name' => 'related_person',
                        'type' => 'related_person',
                        'label' => 'Persona Relacionada nuevo tipo',
                        'related_fields' =>
                            array (
                                0 => 'tct_persona_relacionada_c',
                            ),
                    ),
              2 => 
              array (
                'span' => 12,
              ),
              3 => 'direction',
              4 => 'status',
              5 => 
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
              6 => 'description',
              7 => 'parent_name',
              8 => 'assigned_user_name',
            ),
          ),
        ),
      ),
    ),
  ),
);
