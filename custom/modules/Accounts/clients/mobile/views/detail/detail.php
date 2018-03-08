<?php
$viewdefs['Accounts'] =
    array (
        'mobile' =>
            array (
                'view' =>
                    array (
                        'detail' =>
                            array (
                                'templateMeta' =>
                                    array (
                                        'maxColumns' => '2∫',
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
                                                                'name' => 'tipo_registro_c',
                                                                'label' => 'LBL_TIPO_REGISTRO',
                                                            ),
                                                        1 =>
                                                            array (
                                                                'name' => 'reus_c',
                                                                'label' => 'LBL_REUS',
                                                            ),
                                                        2 =>
                                                            array (
                                                                'name' => 'referencia_bancaria_c',
                                                                'label' => 'LBL_REFERENCIA_BANCARIA_C',
                                                            ),
                                                        3 =>
                                                            array (
                                                                'name' => 'origendelprospecto_c',
                                                                'label' => 'LBL_ORIGENDELPROSPECTO',
                                                            ),
                                                        4 =>
                                                            array (
                                                                'name' => 'metodo_prospeccion_c',
                                                                'label' => 'LBL_METODO_PROSPECCION',
                                                            ),
                                                        5 =>
                                                            array (
                                                            ),
                                                        6 =>
                                                            array (
                                                                'name' => 'evento_marketing_c',
                                                                'label' => 'LBL_EVENTO_MARKETING',
                                                            ),
                                                        7 =>
                                                            array (
                                                            ),
                                                        8 =>
                                                            array (
                                                                'name' => 'canal_marketing_c',
                                                                'label' => 'LBL_CANAL_MARKETING',
                                                            ),
                                                        9 =>
                                                            array (
                                                            ),
                                                        10 =>
                                                            array (
                                                                'name' => 'referenciado_agencia_c',
                                                                'label' => 'LBL_REFERENCIADO_AGENCIA',
                                                            ),
                                                        11 =>
                                                            array (
                                                            ),
                                                        12 =>
                                                            array (
                                                                'name' => 'referido_cliente_prov_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_REFERIDO_CLIENTE_PROV',
                                                            ),
                                                        13 =>
                                                            array (
                                                            ),
                                                        14 =>
                                                            array (
                                                                'name' => 'referenciador_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_REFERENCIADOR',
                                                            ),
                                                        15 =>
                                                            array (
                                                            ),
                                                        16 =>
                                                            array (
                                                                'name' => 'estatus_c',
                                                                'label' => 'LBL_ESTATUS',
                                                            ),
                                                        17 =>
                                                            array (
                                                                'name' => 'promotorleasing_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PROMOTORLEASING',
                                                            ),
                                                        18 =>
                                                            array (
                                                                'name' => 'tipodepersona_c',
                                                                'label' => 'LBL_TIPODEPERSONA',
                                                            ),
                                                        19 =>
                                                            array (
                                                                'name' => 'primernombre_c',
                                                                'label' => 'LBL_PRIMERNOMBRE',
                                                            ),
                                                        20 =>
                                                            array (
                                                                'name' => 'apellidopaterno_c',
                                                                'label' => 'LBL_APELLIDOPATERNO',
                                                            ),
                                                        21 =>
                                                            array (
                                                                'name' => 'apellidomaterno_c',
                                                                'label' => 'LBL_APELLIDOMATERNO',
                                                            ),
                                                        22 =>
                                                            array (
                                                                'name' => 'fechadenacimiento_c',
                                                                'label' => 'LBL_FECHADENACIMIENTO',
                                                            ),
                                                        23 =>
                                                            array (
                                                                'name' => 'rfc_c',
                                                                'label' => 'LBL_RFC',
                                                            ),
                                                        24 =>
                                                            array (
                                                                'name' => 'generar_rfc_c',
                                                                'label' => 'LBL_GENERAR_RFC',
                                                            ),
                                                        25 =>
                                                            array (
                                                                'name' => 'sectoreconomico_c',
                                                                'label' => 'LBL_SECTORECONOMICO',
                                                            ),
                                                        26 =>
                                                            array (
                                                                'name' => 'nacionalidad_c',
                                                                'label' => 'LBL_NACIONALIDAD',
                                                            ),
                                                        27 =>
                                                            array (
                                                                'name' => 'parent_name',
                                                                'label' => 'LBL_MEMBER_OF',
                                                            ),
                                                        28 =>
                                                            array (
                                                                'name' => 'promotorfactoraje_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PROMOTORFACTORAJE',
                                                            ),
                                                        29 =>
                                                            array (
                                                                'name' => 'promotorcredit_c',
                                                                'studio' => 'visible',
                                                                'label' => 'LBL_PROMOTORCREDIT',
                                                            ),
                                                        30 =>
                                                            array (
                                                                'name' => 'account_telefonos',
                                                                'studio' => 'visible',
                                                                'label' => 'account_telefonos',
                                                            ),
                                                        31 =>
                                                            array (
                                                                'name' => 'account_direcciones',
                                                                'studio' => 'visible',
                                                                'label' => 'account_direcciones',
                                                            ),
                                                        32 =>
                                                            array (
                                                            ),
                                                        33 =>
                                                            array (
                                                            ),
                                                    ),
                                            ),
                                    ),
                            ),
                    ),
            ),
    );
