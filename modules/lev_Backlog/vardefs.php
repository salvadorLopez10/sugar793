<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$dictionary['lev_Backlog'] = array(
    'table' => 'lev_backlog',
    'audited' => true,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'fields' => array (
  'producto' => 
  array (
    'required' => false,
    'name' => 'producto',
    'vname' => 'LBL_PRODUCTO',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'producto_opera_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'account_id_c' => 
  array (
    'required' => false,
    'name' => 'account_id_c',
    'vname' => 'LBL_CLIENTE_ACCOUNT_ID',
    'type' => 'id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => false,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
  ),
  'cliente' => 
  array (
    'required' => true,
    'source' => 'non-db',
    'name' => 'cliente',
    'vname' => 'LBL_CLIENTE',
    'type' => 'relate',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '255',
    'size' => '20',
    'id_name' => 'account_id_c',
    'ext2' => 'Accounts',
    'module' => 'Accounts',
    'rname' => 'name',
    'quicksearch' => 'enabled',
    'studio' => 'visible',
  ),
  'monto_comprometido' => 
  array (
    'required' => true,
    'name' => 'monto_comprometido',
    'vname' => 'LBL_MONTO_COMPROMETIDO',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'currency_id' => 
  array (
    'required' => false,
    'name' => 'currency_id',
    'vname' => 'LBL_CURRENCY_ID',
    'type' => 'currency_id',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 36,
    'size' => '20',
    'dbType' => 'id',
    'studio' => 'visible',
    'function' => 'getCurrencies',
    'function_bean' => 'Currencies',
  ),
  'base_rate' => 
  array (
    'required' => false,
    'name' => 'base_rate',
    'vname' => 'LBL_CURRENCY_RATE',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => 1,
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'label' => 'LBL_CURRENCY_RATE',
    'studio' => false,
  ),
  'monto_real_logrado' => 
  array (
    'required' => false,
    'name' => 'monto_real_logrado',
    'vname' => 'LBL_MONTO_REAL_LOGRADO',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'etapa' => 
  array (
    'required' => false,
    'name' => 'etapa',
    'vname' => 'LBL_ETAPA',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Autorizada',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'etapa_backlog',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'mes' => 
  array (
    'required' => true,
    'name' => 'mes',
    'vname' => 'LBL_MES',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'mes_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'anio' => 
  array (
    'required' => true,
    'name' => 'anio',
    'vname' => 'LBL_ANIO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '2016',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'anio_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'description' => 
  array (
    'name' => 'description',
    'vname' => 'LBL_DESCRIPTION',
    'type' => 'text',
    'comment' => 'Full text of the note',
    'rows' => '6',
    'cols' => '80',
    'duplicate_on_record_copy' => 'always',
    'required' => false,
    'massupdate' => false,
    'no_default' => false,
    'comments' => 'Full text of the note',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
  ),
  'numero_de_backlog' => 
  array (
    'required' => false,
    'name' => 'numero_de_backlog',
    'vname' => 'LBL_NUMERO_DE_BACKLOG',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '100',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'numero_de_solicitud' => 
  array (
    'required' => false,
    'name' => 'numero_de_solicitud',
    'vname' => 'LBL_NUMERO_DE_SOLICITUD',
    'type' => 'int',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '100',
    'size' => '20',
    'enable_range_search' => false,
    'disable_num_format' => '',
    'min' => false,
    'max' => false,
  ),
  'estatus_de_la_operacion' => 
  array (
    'required' => false,
    'name' => 'estatus_de_la_operacion',
    'vname' => 'LBL_ESTATUS_DE_LA_OPERACION',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Comprometida',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'estatus_de_la_operacion_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'tipo_de_operacion' => 
  array (
    'required' => false,
    'name' => 'tipo_de_operacion',
    'vname' => 'LBL_TIPO_DE_OPERACION',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Carga General',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tipo_de_operacion_0',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'tipo' => 
  array (
    'required' => false,
    'name' => 'tipo',
    'vname' => 'LBL_TIPO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Cliente',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'tipo_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'renta_inicial_comprometida' => 
  array (
    'required' => true,
    'name' => 'renta_inicial_comprometida',
    'vname' => 'LBL_RENTA_INICIAL_COMPROMETIDA',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'renta_inicial_real' => 
  array (
    'required' => false,
    'name' => 'renta_inicial_real',
    'vname' => 'LBL_RENTA_INICIAL_REAL',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'region' => 
  array (
    'required' => false,
    'name' => 'region',
    'vname' => 'LBL_REGION',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Norte',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'region_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'monto_original' => 
  array (
    'required' => false,
    'name' => 'monto_original',
    'vname' => 'LBL_MONTO_ORIGINAL',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
  ),
  'monto_comprometido_cancelado' => 
  array (
    'required' => false,
    'name' => 'monto_comprometido_cancelado',
    'vname' => 'LBL_MONTO_COMPROMETIDO_CANCELADO',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
//    'dependency' => 'or(equal($estatus_de_la_operacion,"Cancelada"),equal($estatus_de_la_operacion,"Cancelada por cliente"))',
  ),
  'renta_inicialcomp_can' => 
  array (
    'required' => false,
    'name' => 'renta_inicialcomp_can',
    'vname' => 'LBL_RENTA_INICIALCOMP_CAN',
    'type' => 'currency',
    'massupdate' => false,
    'default' => 0,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 26,
    'size' => '20',
    'enable_range_search' => false,
    'precision' => 6,
    'related_fields' => 
    array (
      0 => 'currency_id',
      1 => 'base_rate',
    ),
//    'dependency' => 'or(equal($estatus_de_la_operacion,"Cancelada"),equal($estatus_de_la_operacion,"Cancelada por cliente"))',
  ),
  'motivo_de_cancelacion' => 
  array (
    'required' => false,
    'name' => 'motivo_de_cancelacion',
    'vname' => 'LBL_MOTIVO_DE_CANCELACION',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Mes posterior',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'motivo_de_cancelacion_list',
    'studio' => 'visible',
//    'dependency' => 'or(equal($estatus_de_la_operacion,"Cancelada"),equal($estatus_de_la_operacion,"Cancelada por cliente"))',
  ),
  'etapa_preliminar' => 
  array (
    'required' => false,
    'name' => 'etapa_preliminar',
    'vname' => 'LBL_ETAPA_PRELIMINAR',
    'type' => 'enum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'etapa_backlog',
    'studio' => 'visible',
//    'dependency' => false,
    'default' => 'Autorizada',
  ),
  'progreso' => 
  array (
    'required' => false,
    'name' => 'progreso',
    'vname' => 'LBL_PROGRESO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => '2',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'progreso_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'editar' => 
  array (
    'required' => false,
    'name' => 'editar',
    'vname' => 'LBL_EDITAR',
    'type' => 'bool',
    'massupdate' => false,
    'default' => '1',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => '255',
    'size' => '20',
  ),
  'name' => 
  array (
    'name' => 'name',
    'vname' => 'LBL_NAME',
    'type' => 'name',
    'link' => true,
    'dbType' => 'varchar',
    'len' => '255',
    'unified_search' => true,
    'full_text_search' => 
    array (
      'boost' => '3',
      'enabled' => true,
    ),
    'required' => false,
    'importable' => 'required',
    'duplicate_merge' => 'enabled',
    'merge_filter' => 'selected',
    'duplicate_on_record_copy' => 'always',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'duplicate_merge_dom_value' => '3',
    'audited' => false,
    'reportable' => true,
    'calculated' => false,
    'size' => '20',
  ),
  'equipo' => 
  array (
    'required' => false,
    'name' => 'equipo',
    'vname' => 'LBL_EQUIPO',
    'type' => 'enum',
    'massupdate' => true,
    'default' => 'Sinequipo',
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'len' => 100,
    'size' => '20',
    'options' => 'equipo_list',
    'studio' => 'visible',
//    'dependency' => false,
  ),
  'comentario' => 
  array (
    'required' => false,
    'name' => 'comentario',
    'vname' => 'LBL_COMENTARIO',
    'type' => 'text',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'size' => '20',
    'studio' => 'visible',
    'rows' => '4',
    'cols' => '20',
  ),
  'activo' => 
  array (
    'required' => false,
    'name' => 'activo',
    'vname' => 'LBL_ACTIVO',
    'type' => 'multienum',
    'massupdate' => true,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'calculated' => false,
    'size' => '20',
    'options' => 'idactivo_list',
    'studio' => 'visible',
//    'dependency' => '',
    'isMultiSelect' => true,
  ),
  'porciento_ri' => 
  array (
    'required' => false,
    'name' => 'porciento_ri',
    'vname' => 'LBL_PORCIENTO_RI',
    'type' => 'decimal',
    'massupdate' => false,
    'no_default' => false,
    'comments' => '',
    'help' => '',
    'importable' => 'true',
    'duplicate_merge' => 'enabled',
    'duplicate_merge_dom_value' => '1',
    'audited' => false,
    'reportable' => true,
    'unified_search' => false,
    'merge_filter' => 'disabled',
    'full_text_search' => 
    array (
      'boost' => '0',
      'enabled' => false,
    ),
    'calculated' => false,
    'len' => '6',
    'size' => '20',
    'enable_range_search' => false,
    'precision' => '2',
  ),
),
    'relationships' => array (
),
    'optimistic_locking' => true,
    'unified_search' => true,
);

if (!class_exists('VardefManager')){
    require_once 'include/SugarObjects/VardefManager.php';
}
VardefManager::createVardef('lev_Backlog','lev_Backlog', array('basic','team_security','assignable'));