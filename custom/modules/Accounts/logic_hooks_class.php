<?php
class Clase
{
  function Funcion($bean, $event, $arguments)
  {
    $bean->save();
    $i = 0;
    $gen = 0;
    global $app_list_strings;
    $id = $app_list_strings['tct_persona_generica_list']['relid'];
    $relaciones = $bean->get_linked_beans('rel_relaciones_accounts_1','Rel_Relaciones');
    foreach($relaciones as $relacion)
    {
      $i = $i + 1;
	    if($relacion->id == $id)
  	  {
        $gen = 1;
      }
    }
    if(($bean->tipo_registro_c == 'Proveedor' && $i == 0) || ($bean->tipo_registro_c == 'Cliente' && $bean->esproveedor_c == 1 && $i == 0))
    {
 	$bean->load_relationship('rel_relaciones_accounts_1');
	$bean->rel_relaciones_accounts_1->add($id);
    }
    if($gen == 1 && $i > 1)
    { 
	$bean->load_relationship('rel_relaciones_accounts_1');
	$bean->rel_relaciones_accounts_1->delete($bean->id, $id);
    }
  }
}
?>