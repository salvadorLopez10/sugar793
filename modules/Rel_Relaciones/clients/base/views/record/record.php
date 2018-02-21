<?php
// created: 2018-01-10 16:23:37
$viewdefs['Rel_Relaciones']['base']['view']['record'] = array (
  'panels' => 
  array (
    0 => 
    array (
      'name' => 'panel_header',
      'label' => 'LBL_RECORD_HEADER',
      'header' => true,
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'picture',
          'type' => 'avatar',
          'width' => 42,
          'height' => 42,
          'dismiss_label' => true,
          'readonly' => true,
        ),
        1 => 'name',
        2 => 
        array (
          'name' => 'favorite',
          'label' => 'LBL_FAVORITE',
          'type' => 'favorite',
          'readonly' => true,
          'dismiss_label' => true,
        ),
        3 => 
        array (
          'name' => 'follow',
          'label' => 'LBL_FOLLOW',
          'type' => 'follow',
          'readonly' => true,
          'dismiss_label' => true,
        ),
      ),
    ),
    1 => 
    array (
      'name' => 'panel_body',
      'label' => 'LBL_RECORD_BODY',
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 'assigned_user_name',
        1 => 'team_name',
        2 => 
        array (
          'name' => 'rel_relaciones_accounts_name',
        ),
        3 => 
        array (
          'name' => 'rel_relaciones_accounts_1_name',
        ),
        4 => 
        array (
          'name' => 'relaciones_activas',
          'studio' => 'visible',
          'label' => 'LBL_RELACIONES_ACTIVAS',
        ),
        5 => 
        array (
          'name' => 'relaciones_inactivas',
          'studio' => 'visible',
          'label' => 'LBL_RELACIONES_INACTIVAS',
        ),
        6 => 
        array (
          'name' => 'participacion',
          'label' => 'LBL_PARTICIPACION',
        ),
        7 => 
        array (
          'name' => 'consumomensual',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_CONSUMOMENSUAL',
        ),
        8 => 
        array (
          'name' => 'facturacionmensual',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_FACTURACIONMENSUAL',
        ),
        9 => 
        array (
          'name' => 'inactivo',
          'label' => 'LBL_INACTIVO',
        ),
        10 => 
        array (
          'name' => 'limitedecredito',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_LIMITEDECREDITO',
        ),
        11 => 
        array (
          'name' => 'linea',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_LINEA',
        ),
        12 => 
        array (
          'name' => 'miembrodecomite',
          'label' => 'LBL_MIEMBRODECOMITE',
        ),
        13 => 
        array (
          'name' => 'montodeparticipacion',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_MONTODEPARTICIPACION',
        ),
        14 => 
        array (
          'name' => 'opinion',
          'studio' => 'visible',
          'label' => 'LBL_OPINION',
        ),
        15 => 
        array (
          'name' => 'parentesco',
          'studio' => 'visible',
          'label' => 'LBL_PARENTESCO',
        ),
        16 => 
        array (
          'name' => 'plazocredito',
          'label' => 'LBL_PLAZOCREDITO',
        ),
        17 => 
        array (
          'name' => 'plazoendias',
          'label' => 'LBL_PLAZOENDIAS',
        ),
        18 => 
        array (
          'name' => 'probabilidadincremento',
          'label' => 'LBL_PROBABILIDADINCREMENTO',
        ),
        19 => 
        array (
          'name' => 'producto',
          'label' => 'LBL_PRODUCTO',
        ),
        20 => 
        array (
          'name' => 'puesto',
          'label' => 'LBL_PUESTO',
        ),
        21 => 
        array (
          'name' => 'puestodescription',
          'studio' => 'visible',
          'label' => 'LBL_PUESTODESCRIPTION',
        ),
        22 => 
        array (
          'name' => 'saldo',
          'related_fields' => 
          array (
            0 => 'currency_id',
            1 => 'base_rate',
          ),
          'label' => 'LBL_SALDO',
        ),
        23 => 
        array (
          'name' => 'currency_id',
          'studio' => 'visible',
          'label' => 'LBL_CURRENCY_ID',
        ),
        24 => 
        array (
          'name' => 'tipodecontacto',
          'studio' => 'visible',
          'label' => 'LBL_TIPODECONTACTO',
        ),
        25 => 
        array (
          'name' => 'verificaciondereferencia',
          'studio' => 'visible',
          'label' => 'LBL_VERIFICACIONDEREFERENCIA',
        ),
        26 => 
        array (
          'name' => 'tiempodeconocerloano',
          'label' => 'LBL_TIEMPODECONOCERLOANO',
        ),
        27 => 
        array (
          'name' => 'tiempodeconocerlomeses',
          'label' => 'LBL_TIEMPODECONOCERLOMESES',
        ),
        28 => 
        array (
          'name' => 'tag',
          'span' => 12,
        ),
      ),
    ),
    2 => 
    array (
      'name' => 'panel_hidden',
      'label' => 'LBL_SHOW_MORE',
      'hide' => true,
      'columns' => 2,
      'labelsOnTop' => true,
      'placeholders' => true,
      'newTab' => false,
      'panelDefault' => 'expanded',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'description',
          'span' => 12,
        ),
        1 => 
        array (
          'name' => 'date_modified_by',
          'readonly' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_MODIFIED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'modified_by_name',
            ),
          ),
        ),
        2 => 
        array (
          'name' => 'date_entered_by',
          'readonly' => true,
          'type' => 'fieldset',
          'label' => 'LBL_DATE_ENTERED',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
            ),
            1 => 
            array (
              'type' => 'label',
              'default_value' => 'LBL_BY',
            ),
            2 => 
            array (
              'name' => 'created_by_name',
            ),
          ),
        ),
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'useTabs' => false,
  ),
);