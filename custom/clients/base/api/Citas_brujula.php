<?php
/**
 * Created by Levementum.
 * User: jgarcia@levementum.com
 * Date: 9/13/2016
 * Time: 1:31 PM
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
class Citas_brujula extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'POST_Citas_brujula' => array(
                'reqType' => 'POST',
                'path' => array('Citas_brujula'),
                'pathVars' => array(''),
                'method' => 'getCitas_brujula',
                'shortHelp' => 'Obtiene las citas de un promotor',
            ),

            'POST_Citas_brujula_detail' => array(
                'reqType' => 'POST',
                'path' => array('Citas_brujula_detail'),
                'pathVars' => array(''),
                'method' => 'getCitas_brujula_detail',
                'shortHelp' => 'Obtiene las citas de un registro',
            )
        );
    }

    public function getCitas_brujula($api, $args){

        global $db;
        $promotor = $args['data']['promotor'];
        $fecha = $args['data']['fecha'];

         $query = <<<SQL
SELECT id FROM uni_brujula WHERE fecha_reporte = '{$fecha}' AND assigned_user_id = '{$promotor}' AND deleted = 0
SQL;
         $queryResult = $db->query($query);
        if ($db->getRowCount($queryResult) > 0) {
            return $response = "Existente";
        }

         $query = <<<SQL
SELECT m.id, m.parent_type, m.parent_id, m.duration_minutes, m.duration_hours, m.status, mc.referenciada_c, mc.user_id_c, mc.objetivo_c, mc.resultado_c, a.name AS cliente, CONCAT(u.first_name, " ", u.last_name) AS acompanante 
FROM meetings m
INNER JOIN meetings_cstm mc ON mc.id_c = m.id AND m.deleted = 0
INNER JOIN accounts a ON a.id = m.parent_id AND a.deleted = 0 AND m.parent_type = 'Accounts'
LEFT JOIN users u ON u.id = mc.user_id_c AND u.deleted = 0
WHERE EXTRACT(DAY FROM DATE_ADD(date_start,INTERVAL -6 HOUR)) = EXTRACT(DAY FROM '{$fecha}')
AND EXTRACT(MONTH FROM DATE_ADD(date_start,INTERVAL -6 HOUR)) = EXTRACT(MONTH FROM '{$fecha}')
AND EXTRACT(YEAR FROM  DATE_ADD(date_start,INTERVAL -6 HOUR)) = EXTRACT(YEAR FROM '{$fecha}')
AND m.assigned_user_id = '{$promotor}' AND m.status != 'Not Held'
SQL;

         $queryResult = $db->query($query);
         while($row = $db->fetchByAssoc($queryResult))
         {
            $response[] = $row;
         }

         return $response;
    }

    public function getCitas_brujula_detail($api, $args){

        $brujula_id = $args['data']['brujula_id'];
         global $db;
         $query = <<<SQL
SELECT c.*, a.name AS account_name, CONCAT(u.first_name, " ", u.last_name) AS acompanante FROM uni_citas c
INNER JOIN uni_citas_uni_brujula_c cu ON cu.uni_citas_uni_brujulauni_citas_idb = c.id AND cu.deleted = 0
INNER JOIN accounts a ON a.id = c.account_id1_c AND a.deleted = 0
LEFT JOIN users u ON u.id = c.user_id1_c AND u.deleted = 0
WHERE cu.uni_citas_uni_brujulauni_brujula_ida = '{$brujula_id}' AND c.deleted = 0
SQL;

         $queryResult = $db->query($query);
         while($row = $db->fetchByAssoc($queryResult))
         {
             $response[] = $row;
         }

        return $response;
    }
}