<?php
$viewdefs['Accounts'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
          0 => 
          array (
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => 
            array (
              0 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:edit_button:click',
                'name' => 'edit_button',
                'label' => 'LBL_EDIT_BUTTON_LABEL',
                'acl_action' => 'edit',
              ),
              1 => 
              array (
                'type' => 'shareaction',
                'name' => 'share',
                'label' => 'LBL_RECORD_SHARE_BUTTON',
                'acl_action' => 'view',
              ),
              2 => 
              array (
                'type' => 'divider',
              ),
              3 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:historical_summary_button:click',
                'name' => 'historical_summary_button',
                'label' => 'LBL_HISTORICAL_SUMMARY',
                'acl_action' => 'view',
              ),
              4 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:audit_button:click',
                'name' => 'audit_button',
                'label' => 'LNK_VIEW_CHANGE_LOG',
                'acl_action' => 'view',
              ),
              5 => 
              array (
                'type' => 'divider',
              ),
              6 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:cotizador_button:click',
                'name' => 'cotizador',
                'label' => 'Cotizador',
                'acl_action' => 'view',
              ),
              7 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:Historial_cotizaciones_button:click',
                'name' => 'HistorialCotizaciones',
                'label' => 'Historial de Cotizaciones',
                'acl_action' => 'view',
              ),
              8 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:expediente_button:click',
                'name' => 'expediente',
                'label' => 'Expediente',
                'acl_action' => 'view',
              ),
              9 => 
              array (
                'type' => 'rowaction',
                'event' => 'button:negociacion:click',
                'name' => 'negociacion',
                'label' => 'Generar Disposicion',
                'acl_action' => 'view',
              ),
            ),
          ),
          3 => 
          array (
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
          ),
        ),
        'panels' => 
        array (
          0 => 
          array (
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'picture',
                'type' => 'avatar',
                'size' => 'large',
                'dismiss_label' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
              ),
              2 => 
              array (
                'name' => 'favorite',
                'label' => 'LBL_FAVORITE',
                'type' => 'favorite',
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
            'newTab' => true,
            'panelDefault' => 'expanded',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tipo_registro_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPO_REGISTRO',
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
                'name' => 'tct_detalle_origen_ddw_c',
                'label' => 'LBL_TCT_DETALLE_ORIGEN_DDW',
              ),
              7 => 
              array (
                'name' => 'tct_origen_busqueda_txf_c',
                'label' => 'LBL_TCT_ORIGEN_BUSQUEDA_TXF',
              ),
              8 => 
              array (
                'name' => 'tct_origen_base_ddw_c',
                'label' => 'LBL_TCT_ORIGEN_BASE_DDW',
              ),
              9 => 
              array (
                'name' => 'tct_origen_ag_tel_rel_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_ORIGEN_AG_TEL_REL',
                  'initial_filter' => 'filterAgentesTelefonicosTemplate',
                  'initial_filter_label' => 'LBL_FILTER_USER_BY_PUESTO',

                  'filter_populate' =>
                      array (
                          'puestousuario_c' => array('27'),
                      ),

              ),
              10 => 
              array (
                'name' => 'metodo_prospeccion_c',
                'studio' => 'visible',
                'label' => 'LBL_METODO_PROSPECCION',
              ),
              11 => 
              array (
              ),
              12 => 
              array (
                'name' => 'evento_marketing_c',
                'label' => 'LBL_EVENTO_MARKETING',
              ),
              13 => 
              array (
                'name' => 'canal_marketing_c',
                'studio' => 'visible',
                'label' => 'LBL_CANAL_MARKETING',
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
                'name' => 'referido_cliente_prov_c',
                'studio' => 'visible',
                'label' => 'LBL_REFERIDO_CLIENTE_PROV',
              ),
              17 => 
              array (
              ),
              18 => 
              array (
                'name' => 'referenciado_agencia_c',
                'label' => 'LBL_REFERENCIADO_AGENCIA',
              ),
              19 => 
              array (
              ),
              20 => 
              array (
                'name' => 'estatus_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTATUS',
              ),
              21 => 
              array (
                'name' => 'estatus_persona_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTATUS_PERSONA',
              ),
              22 => 
              array (
                'name' => 'esproveedor_c',
                'label' => 'LBL_ESPROVEEDOR',
              ),
              23 => 
              array (
                'name' => 'alta_proveedor_c',
                'label' => 'LBL_ALTA_PROVEEDOR_C',
              ),
              24 => 
              array (
                'name' => 'cedente_factor_c',
                'label' => 'LBL_CEDENTE_FACTOR',
              ),
              25 => 
              array (
                'name' => 'deudor_factor_c',
                'label' => 'LBL_DEUDOR_FACTOR',
              ),
              26 => 
              array (
                'name' => 'tipo_proveedor_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPO_PROVEEDOR',
              ),
              27 => 
              array (
                'name' => 'iva_c',
                'label' => 'LBL_IVA',
              ),
              28 => 
              array (
                'name' => 'es_referenciador_c',
                'label' => 'LBL_ES_REFERENCIADOR_C',
              ),
              29 => 
              array (
                'name' => 'estatus_referenciador_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTATUS_REFERENCIADOR_C',
              ),
              30 => 
              array (
                'name' => 'tipodemotivo_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPODEMOTIVO',
              ),
              31 => 
              array (
                'name' => 'motivo_c',
                'studio' => 'visible',
                'label' => 'LBL_MOTIVO',
              ),
              32 => 
              array (
                'name' => 'seguimiento_futuro_c',
                'label' => 'LBL_SEGUIMIENTO_FUTURO',
              ),
              33 => 
              array (
                'name' => 'tiposeguimiento_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPOSEGUIMIENTO',
              ),
              34 => 
              array (
                'name' => 'descripciondetarea_c',
                'label' => 'LBL_DESCRIPCIONDETAREA',
                'span' => 12,
              ),
              35 => 
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
              36 => 
              array (
                'name' => 'tipodepersona_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPODEPERSONA',
              ),
              37 => 
              array (
                'name' => 'tipo_relacion_c',
                'studio' => 'visible',
                'label' => 'LBL_TIPO_RELACION',
              ),
              38 => 
              array (
                'name' => 'primernombre_c',
                'label' => 'LBL_PRIMERNOMBRE',
                'span' => 12,
              ),
              39 => 
              array (
                'name' => 'apellidopaterno_c',
                'label' => 'LBL_APELLIDOPATERNO',
              ),
              40 => 
              array (
                'name' => 'apellidomaterno_c',
                'label' => 'LBL_APELLIDOMATERNO',
              ),
              41 => 
              array (
                'name' => 'razonsocial_c',
                'label' => 'LBL_RAZONSOCIAL',
              ),
              42 => 
              array (
                'name' => 'fechaconstitutiva_c',
                'label' => 'LBL_FECHACONSTITUTIVA',
              ),
              43 => 
              array (
                'name' => 'fechadenacimiento_c',
                'label' => 'LBL_FECHADENACIMIENTO',
              ),
              44 => 
              array (
              ),
              45 => 
              array (
                'name' => 'rfc_c',
                'label' => 'LBL_RFC',
              ),
              46 => 
              array (
                'type' => 'button',
                'name' => 'generar_rfc_c',
                'label' => 'LBL_GENERAR_RFC',
              ),
              47 => 
              array (
                'name' => 'pais_nacimiento_c',
                'studio' => 'visible',
                'label' => 'LBL_PAIS_NACIMIENTO',
              ),
              48 => 
              array (
                'name' => 'estado_nacimiento_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTADO_NACIMIENTO',
              ),
              49 => 
              array (
                'name' => 'genero_c',
                'studio' => 'visible',
                'label' => 'LBL_GENERO',
              ),
              50 => 
              array (
                'name' => 'ifepasaporte_c',
                'label' => 'LBL_IFEPASAPORTE',
              ),
              51 => 
              array (
                'name' => 'curp_c',
                'label' => 'LBL_CURP',
              ),
              52 => 
              array (
                'type' => 'button',
                'name' => 'generar_curp_c',
                'label' => 'LBL_GENERAR_CURP',
              ),
              53 => 
              array (
                'name' => 'sectoreconomico_c',
                'label' => 'LBL_SECTORECONOMICO',
              ),
              54 => 
              array (
              ),
              55 => 
              array (
                'name' => 'subsectoreconomico_c',
                'studio' => 'visible',
                'label' => 'LBL_SUBSECTORECONOMICO',
              ),
              56 => 
              array (
                'name' => 'actividadeconomica_c',
                'studio' => 'visible',
                'label' => 'LBL_ACTIVIDADECONOMICA',
              ),
              57 => 
              array (
                'name' => 'nacionalidad_c',
                'studio' => 'visible',
                'label' => 'LBL_NACIONALIDAD',
              ),
              58 => 
              array (
                'name' => 'zonageografica_c',
                'studio' => 'visible',
                'label' => 'LBL_ZONAGEOGRAFICA',
              ),
              59 => 
              array (
                'name' => 'estadocivil_c',
                'studio' => 'visible',
                'label' => 'LBL_ESTADOCIVIL',
              ),
              60 => 
              array (
                'name' => 'regimenpatrimonial_c',
                'studio' => 'visible',
                'label' => 'LBL_REGIMENPATRIMONIAL',
              ),
              61 => 
              array (
                'name' => 'profesion_c',
                'studio' => 'visible',
                'label' => 'LBL_PROFESION',
                'span' => 12,
              ),
              62 => 
              array (
                'name' => 'parent_name',
              ),
              63 => 
              array (
              ),
              64 => 
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
              65 => 
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
              66 => 
              array (
                'name' => 'email',
                'span' => 12,
              ),
              67 => 
              array (
                'name' => 'account_telefonos',
                'studio' => 'visible',
                'label' => 'ACCOUNT_TELEFONOS',
                'span' => 12,
              ),
              68 => 
              array (
                'name' => 'account_direcciones',
                'studio' => 'visible',
                'label' => 'ACCOUNT_DIRECCIONES',
                'span' => 12,
              ),
            ),
          ),
          2 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL1',
            'label' => 'LBL_RECORDVIEW_PANEL1',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'ctpldpoliticamenteexpuesto_c',
                'label' => 'LBL_CTPLDPOLITICAMENTEEXPUESTO',
              ),
              1 => 
              array (
                'name' => 'ctpldrelacionadoarticulo_c',
                'label' => 'LBL_CTPLDRELACIONADOARTICULO',
              ),
              2 => 
              array (
                'name' => 'ctpldnoseriefiel_c',
                'label' => 'LBL_CTPLDNOSERIEFIEL',
              ),
              3 => 
              array (
              ),
              4 => 
              array (
                'name' => 'ctpldidproveedorrecursosclie_c',
                'studio' => 'visible',
                'label' => 'LBL_CTPLDIDPROVEEDORRECURSOSCLIE',
              ),
              5 => 
              array (
                'name' => 'ctpldidproveedorrecursosson_c',
                'studio' => 'visible',
                'label' => 'LBL_CTPLDIDPROVEEDORRECURSOSSON',
              ),
              6 => 
              array (
                'name' => 'tct_propietario_real_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_PROPIETARIO_REAL',
              ),
              7 => 
              array (
                'name' => 'tct_proveedor_recursos_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_PROVEEDOR_RECURSOS',
              ),
              8 => 
              array (
                'name' => 'tct_cpld_pregunta_u1_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA_U1_DDW',
              ),
              9 => 
              array (
                'name' => 'tct_cpld_pregunta_u3_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA_U3_DDW',
              ),
              10 => 
              array (
                'name' => 'tct_cpld_pregunta_u2_txf_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA_U2_TXF',
              ),
              11 => 
              array (
                'name' => 'tct_cpld_pregunta_u4_txf_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA_U4_TXF',
              ),
              12 => 
              array (
                'name' => 'tct_pagoanticipado_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_PAGOANTICIPADO',
              ),
              13 => 
              array (
                'name' => 'tct_inst_monetario_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_INST_MONETARIO',
              ),
              14 => 
              array (
                'name' => 'imotro_c',
                'label' => 'LBL_IMOTRO',
              ),
              15 => 
              array (
                'name' => 'imotrodesc_c',
                'label' => 'LBL_IMOTRODESC',
              ),
              16 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'tct_cpld_pregunta6_mon_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA6_MON',
              ),
              17 => 
              array (
              ),
              18 => 
              array (
                'name' => 'tct_cpld_pregunta6_desp_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA6_DESP',
              ),
              19 => 
              array (
                'name' => 'tct_cpld_pregunta6_otra_txt_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA6_OTRA_TXT',
              ),
              20 => 
              array (
                'name' => 'tct_cpld_pregunta7_num_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA7_NUM',
              ),
              21 => 
              array (
              ),
              22 => 
              array (
                'name' => 'tct_cpld_pregunta8_desp_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA8_DESP',
              ),
              23 => 
              array (
                'name' => 'tct_cpld_pregunta8_esp_txt_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA8_ESP_TXT',
              ),
              24 => 
              array (
                'name' => 'tct_cpld_pregunta9_desp_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA9_DESP',
              ),
              25 => 
              array (
                'name' => 'tct_cpld_pregunta9_esp_txt_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA9_ESP_TXT',
              ),
              26 => 
              array (
                'name' => 'tct_cpld_pregunta10_desp_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_CPLD_PREGUNTA10_DESP',
              ),
              27 => 
              array (
                'name' => 'tct_cpld_pregunta10_otro_txt_c',
                'label' => 'LBL_TCT_CPLD_PREGUNTA10_OTRO_TXT',
              ),
              28 => 
              array (
                'name' => 'tct_fedeicomiso_chk_c',
                'label' => 'LBL_TCT_FEDEICOMISO_CHK',
              ),
              29 => 
              array (
              ),
            ),
          ),
          3 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL4',
            'label' => 'LBL_RECORDVIEW_PANEL4',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'ctpldfuncionespublicas_c',
                'label' => 'LBL_CTPLDFUNCIONESPUBLICAS',
              ),
              1 => 
              array (
                'name' => 'ctpldfuncionespublicascargo_c',
                'label' => 'LBL_CTPLDFUNCIONESPUBLICASCARGO',
              ),
              2 => 
              array (
                'name' => 'tct_dependencia_pf_c',
                'label' => 'LBL_TCT_DEPENDENCIA_PF',
              ),
              3 => 
              array (
                'name' => 'tct_periodo_pf1_c',
                'label' => 'LBL_TCT_PERIODO_PF1',
              ),
              4 => 
              array (
                'name' => 'tct_fecha_ini_pf_c',
                'label' => 'LBL_TCT_FECHA_INI_PF',
              ),
              5 => 
              array (
                'name' => 'tct_fecha_fin_pf_c',
                'label' => 'LBL_TCT_FECHA_FIN_PF',
              ),
            ),
          ),
          4 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL5',
            'label' => 'LBL_RECORDVIEW_PANEL5',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'ctpldconyuge_c',
                'label' => 'LBL_CTPLDCONYUGE',
              ),
              1 => 
              array (
                'name' => 'ctpldconyugecargo_c',
                'label' => 'LBL_CTPLDCONYUGECARGO',
              ),
              2 => 
              array (
                'name' => 'tct_nombre_pf_peps_c',
                'label' => 'LBL_TCT_NOMBRE_PF_PEPS',
              ),
              3 => 
              array (
                'name' => 'tct_cargo2_pf_c',
                'label' => 'LBL_TCT_CARGO2_PF',
              ),
              4 => 
              array (
                'name' => 'tct_dependencia2_pf_c',
                'label' => 'LBL_TCT_DEPENDENCIA2_PF',
              ),
              5 => 
              array (
                'name' => 'tct_periodo2_pf_c',
                'label' => 'LBL_TCT_PERIODO2_PF',
              ),
              6 => 
              array (
                'name' => 'tct_fecha_ini2_pf_c',
                'label' => 'LBL_TCT_FECHA_INI2_PF',
              ),
              7 => 
              array (
                'name' => 'tct_fecha_fin2_pf_c',
                'label' => 'LBL_TCT_FECHA_FIN2_PF',
              ),
            ),
          ),
          5 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL7',
            'label' => 'LBL_RECORDVIEW_PANEL7',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'ctpldaccionistasconyuge_c',
                'label' => 'LBL_CTPLDACCIONISTASCONYUGE',
              ),
              1 => 
              array (
                'name' => 'tct_socio2_pm_c',
                'label' => 'LBL_TCT_SOCIO2_PM',
              ),
              2 => 
              array (
                'name' => 'ctpldaccionistasconyugecargo_c',
                'label' => 'LBL_CTPLDACCIONISTASCONYUGECARGO',
              ),
              3 => 
              array (
                'name' => 'tct_nombre_pm_c',
                'label' => 'LBL_TCT_NOMBRE_PM',
              ),
              4 => 
              array (
                'name' => 'tct_cargo_pm_c',
                'label' => 'LBL_TCT_CARGO_PM',
              ),
              5 => 
              array (
                'name' => 'tct_dependencia2_pm_c',
                'label' => 'LBL_TCT_DEPENDENCIA2_PM_C',
              ),
              6 => 
              array (
                'name' => 'tct_periodo2_pm_c',
                'label' => 'LBL_TCT_PERIODO2_PM',
              ),
              7 => 
              array (
              ),
              8 => 
              array (
                'name' => 'tct_fecha_ini2_pm_c',
                'label' => 'LBL_TCT_FECHA_INI2_PM',
              ),
              9 => 
              array (
                'name' => 'tct_fecha_fin2_pm_c',
                'label' => 'LBL_TCT_FECHA_FIN2_PM',
              ),
            ),
          ),
          6 => 
          array (
            'newTab' => false,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL6',
            'label' => 'LBL_RECORDVIEW_PANEL6',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'ctpldaccionistas_c',
                'label' => 'LBL_CTPLDACCIONISTAS',
              ),
              1 => 
              array (
                'name' => 'tct_socio_pm_c',
                'label' => 'LBL_TCT_SOCIO_PM',
              ),
              2 => 
              array (
                'name' => 'ctpldaccionistascargo_c',
                'label' => 'LBL_CTPLDACCIONISTASCARGO',
              ),
              3 => 
              array (
                'name' => 'tct_dependencia_pm_c',
                'label' => 'LBL_TCT_DEPENDENCIA_PM',
              ),
              4 => 
              array (
                'name' => 'tct_periodo_pm_c',
                'label' => 'LBL_TCT_PERIODO_PM',
              ),
              5 => 
              array (
              ),
              6 => 
              array (
                'name' => 'tct_fecha_ini_pm_c',
                'label' => 'LBL_TCT_FECHA_INI_PM',
              ),
              7 => 
              array (
                'name' => 'tct_fecha_fin_pm_c',
                'label' => 'LBL_TCT_FECHA_FIN_PM',
              ),
            ),
          ),
          7 => 
          array (
            'newTab' => true,
            'panelDefault' => 'expanded',
            'name' => 'LBL_RECORDVIEW_PANEL2',
            'label' => 'LBL_RECORDVIEW_PANEL2',
            'columns' => 2,
            'labelsOnTop' => 1,
            'placeholders' => 1,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'tct_fedeicomiso_c1_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C1_TXF',
              ),
              1 => 
              array (
                'name' => 'tct_fedeicomiso_c2_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C2_TXF',
              ),
              2 => 
              array (
                'name' => 'tct_fedeicomiso_c3_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C3_TXF',
              ),
              3 => 
              array (
                'name' => 'tct_fedeicomiso_c4_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C4_TXF',
              ),
              4 => 
              array (
                'name' => 'tct_fedeicomiso_c5_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C5_TXF',
              ),
              5 => 
              array (
                'name' => 'tct_fedeicomiso_c6_dat_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C6_DAT',
              ),
              6 => 
              array (
                'name' => 'tct_fedeicomiso_c7_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C7_TXF',
              ),
              7 => 
              array (
                'name' => 'tct_fedeicomiso_c8_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C8_TXF',
              ),
              8 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'tct_fedeicomiso_c9_cur_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C9_CUR',
              ),
              9 => 
              array (
                'name' => 'tct_fedeicomiso_c10_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C10_DDW',
              ),
              10 => 
              array (
                'related_fields' => 
                array (
                  0 => 'currency_id',
                  1 => 'base_rate',
                ),
                'name' => 'tct_fedeicomiso_c12_cur_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C12_CUR',
              ),
              11 => 
              array (
                'name' => 'tct_fedeicomiso_c13_int_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C13_INT',
              ),
              12 => 
              array (
                'name' => 'tct_fedeicomiso_c14_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C14_DDW',
              ),
              13 => 
              array (
                'name' => 'tct_fedeicomiso_c14_2_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C14_2_TXF',
              ),
              14 => 
              array (
                'name' => 'tct_fedeicomiso_c15_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C15_DDW',
              ),
              15 => 
              array (
              ),
              16 => 
              array (
                'name' => 'tct_fedeicomiso_c16_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C16_DDW',
              ),
              17 => 
              array (
                'name' => 'tct_fedeicomiso_c16_2_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C16_2_TXF',
              ),
              18 => 
              array (
                'name' => 'tct_fedeicomiso_c17_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C17_DDW',
              ),
              19 => 
              array (
                'name' => 'tct_fedeicomiso_c17_2_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C17_2_TXF',
              ),
              20 => 
              array (
                'name' => 'tct_fedeicomiso_c18_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C18_DDW',
              ),
              21 => 
              array (
                'name' => 'tct_fedeicomiso_c18_2_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C18_2_TXF',
              ),
              22 => 
              array (
                'name' => 'tct_fedeicomiso_c19_txf_c',
                'label' => 'LBL_TCT_FEDEICOMISO_C19_TXF',
              ),
              23 => 
              array (
              ),
              24 => 
              array (
                'name' => 'tct_fedeicomiso_c20_msl_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C20_MSL',
              ),
              25 => 
              array (
                'name' => 'tct_fedeicomiso_c21_ddw_c',
                'studio' => 'visible',
                'label' => 'LBL_TCT_FEDEICOMISO_C21_DDW',
              ),
            ),
          ),
        ),
        'templateMeta' => 
        array (
          'useTabs' => true,
        ),
      ),
    ),
  ),
);
