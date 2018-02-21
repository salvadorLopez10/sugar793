<?php
    /**
     * Created by CVV
     * User: carmen.velasco@unifin.com.mx
     * Date: 19/10/2016
     */

class Meetings_Hooks{

    //Genera una copia del meeting para el acompañante de la cita en Brujula
    function MeetingAcompaniante($bean = null, $event = null, $args = null)
    {
        global $current_user;
        //Se valida el comentario automatico del sistema para evitar un loop infinito.
        if(!empty($bean->user_id_c) && $bean->description != "Cita registrada automaticamente por CRM ya que ha sido asignado como acompaniante." ){
            global $db;
            $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> :Validando si no existen citas en el horario...");
            $query = <<<SQL
                SELECT id
                FROM meetings
                WHERE assigned_user_id = '{$bean->user_id_c}'
                AND parent_id = '{$bean->parent_id}'
                AND date_start = '{$bean->date_start}'
                AND deleted = 0
SQL;
            $queryResult = $db->query($query);
            $rowCount = $db->getRowCount($queryResult);

            $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> :El acompaniante tiene " . $rowCount . " citas agendadas en el horario indicado.");
            if($rowCount == 0){
                $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> :Meeting con Acompañante, duplicando cita...");
                $exclude = array(
                    'id',
                    'date_entered',
                    'date_modified',
                    'assigned_user_id',
                    'user_id_c'
                );

                $acompanianteMeet = BeanFactory::getBean('Meetings');
                foreach($bean->field_defs as $def){
                    if(!(isset($def['source']) && $def['source'] == 'non-db') && !empty($def['name']) && !in_array($def['name'], $exclude)){
                        $field = $def['name'];
                        $acompanianteMeet->{$field} = $bean->{$field};
                    }
                }
                $acompanianteMeet->assigned_user_id = $bean->user_id_c;
                $acompanianteMeet->user_id_c = $bean->assigned_user_id;
                $acompanianteMeet->description = "Cita registrada automaticamente por CRM ya que ha sido asignado como acompaniante.";

                $acompanianteMeet->save();

                $acompanianteMeet->set_relationship('meetings_users', array('meeting_id' => $acompanianteMeet->id, 'user_id' => $acompanianteMeet->assigned_user_id));
            }else{
                $GLOBALS['log']->fatal(__FILE__." - ".__CLASS__."->".__FUNCTION__." <".$current_user->user_name."> :El acompaniante ya tiene la cita registrada.");
            }


        }
    }

}