<?php
// created: 2015-06-23 20:29:53
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_codigopostal"] = array (
  'name' => 'dire_direccion_dire_codigopostal',
  'type' => 'link',
  'relationship' => 'dire_direccion_dire_codigopostal',
  'source' => 'non-db',
  'module' => 'dire_CodigoPostal',
  'bean_name' => false,
  'side' => 'right',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_CODIGOPOSTAL_FROM_DIRE_DIRECCION_TITLE',
  'id_name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
  'link-type' => 'one',
);
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_codigopostal_name"] = array (
  'name' => 'dire_direccion_dire_codigopostal_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_CODIGOPOSTAL_FROM_DIRE_CODIGOPOSTAL_TITLE',
  'save' => true,
  'id_name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
  'link' => 'dire_direccion_dire_codigopostal',
  'table' => 'dire_codigopostal',
  'module' => 'dire_CodigoPostal',
  'rname' => 'name',
);
$dictionary["dire_Direccion"]["fields"]["dire_direccion_dire_codigopostaldire_codigopostal_ida"] = array (
  'name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_DIRE_DIRECCION_DIRE_CODIGOPOSTAL_FROM_DIRE_DIRECCION_TITLE_ID',
  'id_name' => 'dire_direccion_dire_codigopostaldire_codigopostal_ida',
  'link' => 'dire_direccion_dire_codigopostal',
  'table' => 'dire_codigopostal',
  'module' => 'dire_CodigoPostal',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
