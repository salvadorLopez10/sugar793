<?php
 // created: 2018-02-02 08:29:43
$dictionary['Account']['fields']['idcliente_c']['duplicate_merge_dom_value']=0;
$dictionary['Account']['fields']['idcliente_c']['labelValue']='ID Cliente';
$dictionary['Account']['fields']['idcliente_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['idcliente_c']['calculated']='true';
$dictionary['Account']['fields']['idcliente_c']['formula']='$idcliente_c';
$dictionary['Account']['fields']['idcliente_c']['enforced']='true';
$dictionary['Account']['fields']['idcliente_c']['dependency']='or(equal($tipo_registro_c,"Cliente"),equal($tipo_registro_c,"Proveedor"),equal($tipo_registro_c,"Persona"),equal($estatus_c,"Interesado"))';

 ?>