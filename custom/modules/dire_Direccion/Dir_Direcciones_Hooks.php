<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 6/15/2015
 * Time: 12:22 PM
 */
require_once("custom/Levementum/UnifinAPI.php");
class Dir_Direcciones_Hooks{

    public function insertarDireccionenUNICS($bean=null,$event=null,$args=null)
    {
        try
        {
            global $db, $current_user;
            $cliente = false;

        $query = <<<SQL
SELECT idcliente_c, sincronizado_unics_c FROM accounts_cstm
WHERE id_c = '{$bean->accounts_dire_direccion_1accounts_ida}'
SQL;

            $queryResult = $db->query($query);
            while ($row = $db->fetchByAssoc($queryResult)) {
                if (!empty($row['idcliente_c']) && $row['idcliente_c'] > 0 && $row['idcliente_c'] != '' && $row['sincronizado_unics_c'] == '1') {
                    $cliente = true;
                }
            }

            if($cliente == true) {
                $callApi = new UnifinAPI();
                //only for new records
                //if ($_SESSION['estado'] == 'insertando') {
				if ($bean->sincronizado_unics_c == '0') {
                    $direccion = $callApi->insertaDireccion($bean);
                    $_SESSION['estado'] = '';
                } else {
                    $direccion = $callApi->actualizaDireccion($bean);
                    $_SESSION['estado'] = '';
                }
            }
        }catch (Exception $e){
            error_log(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> : Error: ".$e->getMessage());
            $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> : Error ".$e->getMessage());
        }
    }

    public function detectaEstado ($bean = null, $event = null, $args = null){
        global $current_user;
        if (empty($bean->fetched_row['id'])) {
            $_SESSION['estado'] = 'insertando';
        }else{
            $_SESSION['estado'] = 'actualizando';
        }
        $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> : ESTADO: $_SESSION[estado] ");
    }

    public function textToUppperCase($bean = null, $event = null, $args = null){
        foreach($bean as $field=>$value){
            if($bean->field_defs[$field]['type'] == 'varchar'){
                $value = mb_strtoupper($value,"UTF-8");
                $bean->$field = $value;
            }
            if($bean->field_defs[$field]['name'] == 'name'){
                $value = mb_strtoupper($value, "UTF-8");
                $bean->$field = $value;
            }
        }
    }

    public function setSequencia($bean = null, $event = null, $args = null){

        global $db;
        $query = <<<SQL
SELECT IF(MAX(secuencia) is null, 0, MAX(secuencia)) secuencia FROM dire_direccion
LEFT JOIN accounts_dire_direccion_1_c ON accounts_dire_direccion_1_c.accounts_dire_direccion_1dire_direccion_idb = dire_direccion.id
WHERE accounts_dire_direccion_1_c.accounts_dire_direccion_1accounts_ida = '{$bean->accounts_dire_direccion_1accounts_ida}'
SQL;
        $queryResult = $db->getOne($query);
        if($bean->accounts_dire_direccion_1accounts_ida != null && empty($bean->secuencia)){
            $bean->secuencia = 0;
            $total = $queryResult + 1;
            $bean->secuencia = $total;
        }

    }
}