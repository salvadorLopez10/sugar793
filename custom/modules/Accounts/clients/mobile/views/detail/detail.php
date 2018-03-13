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
          'maxColumns' => '2',
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
                            'studio' => 'visible',
                            'label' => 'LBL_TIPO_REGISTRO',
                            'readonly' => true,
                        ),
                    1 =>
                        array (
                            'name' => 'idcliente_c',
                            'label' => 'LBL_IDCLIENTE',
                            'readonly' => true,
                        ),
                    2 =>
                        array (
                            'name' => 'reus_c',
                            'label' => 'LBL_REUS',
                        ),
                    3 =>
                        array (
                            'name' => 'referencia_bancaria_c',
                            'label' => 'LBL_REFERENCIA_BANCARIA_C',
                        ),
                    4 =>
                        array (
                            'name' => 'origendelprospecto_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ORIGENDELPROSPECTO',
                        ),
                    5 =>
                        array (
                        ),
                    6 =>
                        array (
                            'name' => 'metodo_prospeccion_c',
                            'studio' => 'visible',
                            'label' => 'LBL_METODO_PROSPECCION',
                        ),
                    7 =>
                        array (
                        ),
                    8 =>
                        array (
                            'name' => 'evento_marketing_c',
                            'label' => 'LBL_EVENTO_MARKETING',
                        ),
                    9 =>
                        array (
                            'name' => 'canal_marketing_c',
                            'studio' => 'visible',
                            'label' => 'LBL_CANAL_MARKETING',
                        ),
                    10 =>
                        array (
                            'name' => 'referenciador_c',
                            'studio' => 'visible',
                            'label' => 'LBL_REFERENCIADOR',
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
                            'name' => 'referenciado_agencia_c',
                            'label' => 'LBL_REFERENCIADO_AGENCIA',
                        ),
                    15 =>
                        array (
                        ),
                    16 =>
                        array (
                            'name' => 'estatus_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ESTATUS',
                        ),
                    17 =>
                        array (
                            'name' => 'estatus_persona_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ESTATUS_PERSONA',
                        ),
                    18 =>
                        array (
                            'name' => 'esproveedor_c',
                            'label' => 'LBL_ESPROVEEDOR',
                        ),
                    19 =>
                        array (
                            'name' => 'alta_proveedor_c',
                            'label' => 'LBL_ALTA_PROVEEDOR_C',
                        ),
                    20 =>
                        array (
                            'name' => 'cedente_factor_c',
                            'label' => 'LBL_CEDENTE_FACTOR',
                        ),
                    21 =>
                        array (
                            'name' => 'deudor_factor_c',
                            'label' => 'LBL_DEUDOR_FACTOR',
                        ),
                    22 =>
                        array (
                            'name' => 'tipo_proveedor_c',
                            'studio' => 'visible',
                            'label' => 'LBL_TIPO_PROVEEDOR',
                        ),
                    23 =>
                        array (
                            'name' => 'iva_c',
                            'label' => 'LBL_IVA',
                        ),
                    24 =>
                        array (
                            'name' => 'es_referenciador_c',
                            'label' => 'LBL_ES_REFERENCIADOR_C',
                        ),
                    25 =>
                        array (
                            'name' => 'estatus_referenciador_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ESTATUS_REFERENCIADOR_C',
                        ),
                    26 =>
                        array (
                            'name' => 'tipodemotivo_c',
                            'studio' => 'visible',
                            'label' => 'LBL_TIPODEMOTIVO',
                        ),
                    27 =>
                        array (
                            'name' => 'motivo_c',
                            'studio' => 'visible',
                            'label' => 'LBL_MOTIVO',
                        ),
                    28 =>
                        array (
                            'name' => 'seguimiento_futuro_c',
                            'label' => 'LBL_SEGUIMIENTO_FUTURO',
                        ),
                    29 =>
                        array (
                            'name' => 'tiposeguimiento_c',
                            'studio' => 'visible',
                            'label' => 'LBL_TIPOSEGUIMIENTO',
                        ),
                    30 =>
                        array (
                            'name' => 'descripciondetarea_c',
                            'label' => 'LBL_DESCRIPCIONDETAREA',
                            'span' => 12,
                        ),
                    31 =>
                        array (
                            'name' => 'promotorleasing_c',
                            'studio' => 'visible',
                            'label' => 'LBL_PROMOTORLEASING',
                            'initial_filter' => 'filterPromotorTemplate',
                            'initial_filter_label' => 'LBL_FILTER_PROMOTOR_TEMPLATE',
                            'filter_populate' =>
                                array (
                                    'tipodeproducto_c' => '1',
                                ),
                            'span' => 12,
                        ),
                    32 =>
                        array (
                            'name' => 'tipodepersona_c',
                            'studio' => 'visible',
                            'label' => 'LBL_TIPODEPERSONA',
                        ),
                    33 =>
                        array (
                            'name' => 'tipo_relacion_c',
                            'studio' => 'visible',
                            'label' => 'LBL_TIPO_RELACION',
                        ),
                    34 =>
                        array (
                            'name' => 'primernombre_c',
                            'label' => 'LBL_PRIMERNOMBRE',
                            'span' => 12,
                        ),
                    35 =>
                        array (
                            'name' => 'apellidopaterno_c',
                            'label' => 'LBL_APELLIDOPATERNO',
                        ),
                    36 =>
                        array (
                            'name' => 'apellidomaterno_c',
                            'label' => 'LBL_APELLIDOMATERNO',
                        ),
                    37 =>
                        array (
                            'name' => 'razonsocial_c',
                            'label' => 'LBL_RAZONSOCIAL',
                        ),
                    38 =>
                        array (
                            'name' => 'fechaconstitutiva_c',
                            'label' => 'LBL_FECHACONSTITUTIVA',
                        ),
                    39 =>
                        array (
                            'name' => 'fechadenacimiento_c',
                            'label' => 'LBL_FECHADENACIMIENTO',
                        ),
                    40 =>
                        array (
                        ),
                    41 =>
                        array (
                            'name' => 'rfc_c',
                            'label' => 'LBL_RFC',
                        ),
                    42 =>
                        array (
                            'type' => 'button',
                            'name' => 'generar_rfc_c',
                            'label' => 'LBL_GENERAR_RFC',
                        ),
                    43 =>
                        array (
                            'name' => 'pais_nacimiento_c',
                            'studio' => 'visible',
                            'label' => 'LBL_PAIS_NACIMIENTO',
                        ),
                    44 =>
                        array (
                            'name' => 'estado_nacimiento_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ESTADO_NACIMIENTO',
                        ),
                    45 =>
                        array (
                            'name' => 'genero_c',
                            'studio' => 'visible',
                            'label' => 'LBL_GENERO',
                        ),
                    46 =>
                        array (
                            'name' => 'ifepasaporte_c',
                            'label' => 'LBL_IFEPASAPORTE',
                        ),
                    47 =>
                        array (
                            'name' => 'curp_c',
                            'label' => 'LBL_CURP',
                        ),
                    48 =>
                        array (
                            'type' => 'button',
                            'name' => 'generar_curp_c',
                            'label' => 'LBL_GENERAR_CURP',
                        ),

                    49 =>
                        array (
                            'name' => 'sectoreconomico_c',
                            'label' => 'LBL_SECTORECONOMICO',
                        ),
                    50 =>
                        array (
                        ),
                    51 =>
                        array (
                            'name' => 'subsectoreconomico_c',
                            'studio' => 'visible',
                            'label' => 'LBL_SUBSECTORECONOMICO',
                        ),

                    52 =>
                        array (
                            'name' => 'actividadeconomica_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ACTIVIDADECONOMICA',
                        ),
                    53 =>
                        array (
                            'name' => 'nacionalidad_c',
                            'studio' => 'visible',
                            'label' => 'LBL_NACIONALIDAD',
                        ),
                    54 =>
                        array (
                            'name' => 'zonageografica_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ZONAGEOGRAFICA',
                        ),
                    55 =>
                        array (
                            'name' => 'estadocivil_c',
                            'studio' => 'visible',
                            'label' => 'LBL_ESTADOCIVIL',
                        ),
                    56 =>
                        array (
                            'name' => 'regimenpatrimonial_c',
                            'studio' => 'visible',
                            'label' => 'LBL_REGIMENPATRIMONIAL',
                        ),
                    57 =>
                        array (
                            'name' => 'profesion_c',
                            'studio' => 'visible',
                            'label' => 'LBL_PROFESION',
                            'span' => 12,
                        ),
                    58 =>
                        array (
                            'name' => 'parent_name',
                        ),
                    59 =>
                        array (
                        ),
                    60 =>
                        array (
                            'name' => 'promotorfactoraje_c',
                            'studio' => 'visible',
                            'label' => 'LBL_PROMOTORFACTORAJE',
                            'initial_filter' => 'filterPromotorTemplate',
                            'initial_filter_label' => 'LBL_FILTER_PROMOTOR_TEMPLATE',
                            'filter_populate' =>
                                array (
                                    'tipodeproducto_c' => '4',
                                ),
                        ),
                    61 =>
                        array (
                            'name' => 'promotorcredit_c',
                            'studio' => 'visible',
                            'label' => 'LBL_PROMOTORCREDIT',
                            'initial_filter' => 'filterPromotorTemplate',
                            'initial_filter_label' => 'LBL_FILTER_PROMOTOR_TEMPLATE',
                            'filter_populate' =>
                                array (
                                    'tipodeproducto_c' => '3',
                                ),
                        ),
                    62 =>
                        array (
                            'name' => 'email',
                            'span' => 12,
                        ),

                    63 => 'phone_office',

                ),
          ),
        ),
      ),
    ),
  ),
);
