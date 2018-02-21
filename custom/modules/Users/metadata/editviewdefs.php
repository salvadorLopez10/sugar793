<?php
// created: 2018-01-10 18:29:42
$viewdefs['Users']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'widths' => 
    array (
      0 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
      1 => 
      array (
        'label' => '10',
        'field' => '30',
      ),
    ),
    'form' => 
    array (
      'headerTpl' => 'modules/Users/tpls/EditViewHeader.tpl',
      'footerTpl' => 'modules/Users/tpls/EditViewFooter.tpl',
    ),
    'includes' => 
    array (
      0 => 
      array (
        'file' => 'custom/modules/Users/js/customValidation.js',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_USER_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_EDITVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
  ),
  'panels' => 
  array (
    'LBL_USER_INFORMATION' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'user_name',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
        1 => 
        array (
          'name' => 'status',
          'displayParams' => 
          array (
            'required' => true,
          ),
        ),
      ),
      1 => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'puestousuario_c',
          'studio' => 'visible',
          'label' => 'LBL_PUESTOUSUARIO',
        ),
        1 => 
        array (
          'name' => 'aut_caratulariesgo_c',
          'label' => 'LBL_AUT_CARATULARIESGO',
        ),
      ),
      3 => 
      array (
        0 => 'phone_work',
        1 => 
        array (
          'name' => 'ext_c',
          'label' => 'LBL_EXT',
        ),
      ),
      4 => 
      array (
        0 => 'phone_mobile',
        1 => 'picture',
      ),
      5 => 
      array (
        0 => 
        array (
          'name' => 'equipo_c',
          'studio' => 'visible',
          'label' => 'LBL_EQUIPO',
        ),
        1 => 
        array (
          'name' => 'equipos_c',
          'studio' => 'visible',
          'label' => 'LBL_EQUIPOS_C',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'region_c',
          'label' => 'LBL_REGION',
        ),
        1 => '',
      ),
      7 => 
      array (
        0 => 
        array (
          'name' => 'sucursal_c',
          'studio' => 'visible',
          'label' => 'LBL_SUCURSAL',
        ),
      ),
      8 => 
      array (
        0 => 
        array (
          'name' => 'productos_c',
          'studio' => 'visible',
          'label' => 'LBL_PRODUCTOS',
        ),
        1 => 
        array (
          'name' => 'UserType',
          'customCode' => '{if $IS_ADMIN}{$USER_TYPE_DROPDOWN}{else}{$USER_TYPE_READONLY}{/if}',
        ),
      ),
      9 => 
      array (
        0 => 
        array (
          'name' => 'tipodeproducto_c',
          'studio' => 'visible',
          'label' => 'LBL_TIPODEPRODUCTO',
        ),
      ),
      10 => 
      array (
        0 => 'reports_to_name',
      ),
    ),
    'lbl_editview_panel1' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'contraseniaactual_c',
          'label' => 'LBL_CONTRASENIAACTUAL_C',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'nuevacontrasenia_c',
          'label' => 'LBL_NUEVACONTRASENIA_C',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'confirmarnuevacontrasenia_c',
          'label' => 'LBL_CONFIRMARNUEVACONTRASENIA_C',
        ),
      ),
    ),
  ),
);