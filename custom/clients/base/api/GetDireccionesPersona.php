<?php
/**
 * Created by Salvador Lopez.
 * email: salvador.lopez@tactos.com.mx
 * Date: 07/06/18
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetDireccionesPersona extends SugarApi
{

    /**
     * Registro de todas las rutas para consumir los servicios del API
     *
     */
    public function registerApiRest()
    {
        return array(
            //GET
            'retrieve' => array(
                //request type
                'reqType' => 'GET',
                'noLoginRequired' => true,
                //endpoint path
                'path' => array('PersonasDirecciones', '?', '?'),
                //endpoint variables
                'pathVars' => array('module', 'id', 'filtro'),
                //method to call
                'method' => 'getRelatedAddressByType',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Método GET para obtener direcciones de una persona filtradas por indicador',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),

            //POST
            'post_address' => array(
                //request type
                'reqType' => 'POST',

                'noLoginRequired' => true,
                //endpoint path
                'path' => array('PersonasDirecciones', '?'),
                //endpoint variables
                'pathVars' => array('module', 'id'),
                //method to call
                'method' => 'postGetRelatedAddressByType',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Método POST para obtener direcciones de una persona filtradas por indicador',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),
        );

    }

    /**
     * Obtiene direcciones relacionadas a una persona
     *
     * Método que obtiene registros de direcciones relacionadas a una persona filtradas por indicador
     *
     * @param array $api
     * @param array $args Array con los par�metros enviados para su procesamiento
     * @return array Direcciones relacionadas
     * @throws SugarApiExceptionInvalidParameter
     */
    public function getRelatedAddressByType($api, $args)
    {
        //Obtiene id de persona
        $id = $args['id'];
        $tipos = $args['filtro'];
        $arr_ids = explode(",", $tipos);

        $records_in = array('records' => array());

        $query = "SELECT d.*
FROM accounts a INNER JOIN accounts_dire_direccion_1_c ad ON a.id = ad.accounts_dire_direccion_1accounts_ida
  INNER JOIN dire_direccion d
    ON d.id = ad.accounts_dire_direccion_1dire_direccion_idb AND a.id = '{$id}' AND
       indicador IN ({$tipos}) AND d.deleted=0 AND ad.deleted=0";


        $result = $GLOBALS['db']->query($query);

        $pos = 0;

        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $array_tipo = array();

            //Estableciendo tipo de dirección como arreglo
            $id_direccion = $row['id'];
            $tipodireccion = $row['tipodedireccion'];
            unset($row['tipodedireccion']);
            //Limpiando valor de tipodedireccin
            $tipo_clean = str_replace('^', '', $tipodireccion);
            //$tipo_dir_arr=explode('^',$tipodireccion);
            //$array_tipo=array_filter($tipo_dir_arr);
            array_push($array_tipo, $tipo_clean);
            $records_in['records'][] = $row;

            $records_in['records'][$pos]['tipodedireccion'] = $array_tipo;

            //Obteniendo información de Estado
            $queryEstado = "SELECT e.id as id,e.name as name FROM dire_estado e
  INNER JOIN dire_direccion_dire_estado_c de on e.id=de.dire_direccion_dire_estadodire_estado_ida
AND de.dire_direccion_dire_estadodire_direccion_idb='{$id_direccion}' and e.deleted=0 and de.deleted=0";

            $resultEstado = $GLOBALS['db']->query($queryEstado);

            while ($rowEstado = $GLOBALS['db']->fetchByAssoc($resultEstado)) {
                $arrayEstado = array("name" => $rowEstado['name'], "id" => $rowEstado['id']);

                $records_in['records'][$pos]['dire_direccion_dire_estado_name'] = $rowEstado['name'];
                $records_in['records'][$pos]['dire_direccion_dire_estado'] = $arrayEstado;
            }

            //Obteniendo información de Código Postal
            $queryCP = "SELECT cp.id as id,cp.name as name FROM dire_codigopostal cp
  INNER JOIN dire_direccion_dire_codigopostal_c dc on cp.id=dc.dire_direccion_dire_codigopostaldire_codigopostal_ida
AND dc.dire_direccion_dire_codigopostaldire_direccion_idb='{$id_direccion}' and cp.deleted=0 and dc.deleted=0;";

            $resultCP = $GLOBALS['db']->query($queryCP);

            while ($rowCP = $GLOBALS['db']->fetchByAssoc($resultCP)) {
                $arrayCP = array("name" => $rowCP['name'], "id" => $rowCP['id']);

                $records_in['records'][$pos]['dire_direccion_dire_codigopostal_name'] = $rowCP['name'];
                $records_in['records'][$pos]['dire_direccion_dire_codigopostal'] = $arrayCP;
            }

            //Obteniendo información de Colonia
            $queryColonia = "SELECT c.id as id,c.name as name FROM dire_colonia c
  INNER JOIN dire_direccion_dire_colonia_c dc on c.id=dc.dire_direccion_dire_coloniadire_colonia_ida
AND dc.dire_direccion_dire_coloniadire_direccion_idb='{$id_direccion}' and c.deleted=0 and dc.deleted=0;";

            $resultColonia = $GLOBALS['db']->query($queryColonia);

            while ($rowColonia = $GLOBALS['db']->fetchByAssoc($resultColonia)) {
                $arrayColonia = array("name" => $rowColonia['name'], "id" => $rowColonia['id']);

                $records_in['records'][$pos]['dire_direccion_dire_colonia_name'] = $rowColonia['name'];
                $records_in['records'][$pos]['dire_direccion_dire_colonia'] = $arrayColonia;
            }

            //Obteniendo información de Ciudad
            $queryCiudad = "SELECT c.id as id,c.name as name FROM dire_ciudad c
  INNER JOIN dire_direccion_dire_ciudad_c dc on c.id=dc.dire_direccion_dire_ciudaddire_ciudad_ida
AND dc.dire_direccion_dire_ciudaddire_direccion_idb='{$id_direccion}' and c.deleted=0 and dc.deleted=0;";

            $resultCiudad = $GLOBALS['db']->query($queryCiudad);

            while ($rowCiudad = $GLOBALS['db']->fetchByAssoc($resultCiudad)) {
                $arrayCiudad = array("name" => $rowCiudad['name'], "id" => $rowCiudad['id']);

                $records_in['records'][$pos]['dire_direccion_dire_ciudad_name'] = $rowCiudad['name'];
                $records_in['records'][$pos]['dire_direccion_dire_ciudad'] = $arrayCiudad;
            }

            //Obteniendo información de Pais
            $queryPais = "SELECT p.id as id,p.name as name FROM dire_pais p
  INNER JOIN dire_direccion_dire_pais_c dp on p.id=dp.dire_direccion_dire_paisdire_pais_ida
AND dp.dire_direccion_dire_paisdire_direccion_idb='{$id_direccion}' and p.deleted=0 and dp.deleted=0;";

            $resultPais = $GLOBALS['db']->query($queryPais);

            while ($rowPais = $GLOBALS['db']->fetchByAssoc($resultPais)) {
                $arrayPais = array("name" => $rowPais['name'], "id" => $rowPais['id']);

                $records_in['records'][$pos]['dire_direccion_dire_pais_name'] = $rowPais['name'];
                $records_in['records'][$pos]['dire_direccion_dire_pais'] = $arrayPais;
            }

            //Obteniendo información de Municipio
            $queryMunicipio = "SELECT m.id as id,m.name as name FROM dire_municipio m
  INNER JOIN dire_direccion_dire_municipio_c dm on m.id=dm.dire_direccion_dire_municipiodire_municipio_ida
AND dm.dire_direccion_dire_municipiodire_direccion_idb='{$id_direccion}' and m.deleted=0 and dm.deleted=0;";

            $resultMunicipio = $GLOBALS['db']->query($queryMunicipio);

            while ($rowMunicipio = $GLOBALS['db']->fetchByAssoc($resultMunicipio)) {
                $arrayMunicipio = array("name" => $rowMunicipio['name'], "id" => $rowMunicipio['id']);

                $records_in['records'][$pos]['dire_direccion_dire_municipio_name'] = $rowMunicipio['name'];
                $records_in['records'][$pos]['dire_direccion_dire_municipio'] = $arrayMunicipio;
            }

            $pos++;

        }


        //Regresa resultado
        return $records_in;
    }

    public function postGetRelatedAddressByType($api, $args)
    {
        global $app_list_strings;

        $list_indicadores = $app_list_strings['dir_indicador_unique_list'];
        $list_indicadores_map = $app_list_strings['dir_indicador_map_list'];

        $indicadores_request = $args['data']['indicador'];

        $str_concat = "";

        //Recorrer indicadores y regresar identificador

        if (count($indicadores_request > 0)) {

            $indicadores_map = array();
            $indicadores_map_return = array();

            foreach ($indicadores_request as $valor) {
                $id_indicador = GetDireccionesPersona::getIndicador($valor, $list_indicadores);
                array_push($indicadores_map, $id_indicador);

            }

            $cantidad_ids = count($indicadores_map);

            if ($cantidad_ids > 0) {
                $i = 0;
                foreach ($indicadores_map as $val) {

                    $id_indicador_map = GetDireccionesPersona::getIndicadorMap($val, $list_indicadores_map);

                    array_push($indicadores_map_return, $id_indicador_map);
                    $str_concat .= $id_indicador_map;
                    //Si el ciclo aún no llega al último elemento, concatenar una coma (,)
                    if ($i !== $cantidad_ids - 1) {
                        $str_concat .= ",";

                    }

                    $i++;
                }

                //Convertir cadena de identificadores encontrados en arreglo
                $array_temp = explode(",", $str_concat);

                $array__final = array_unique($array_temp);

                asort($array__final);

                $str_final = implode(",", $array__final);

            }


        }

        //Obtiene id de persona
        $id = $args['id'];

        $records_in = array('records' => array());

        $query = "SELECT d.*
FROM accounts a INNER JOIN accounts_dire_direccion_1_c ad ON a.id = ad.accounts_dire_direccion_1accounts_ida
  INNER JOIN dire_direccion d
    ON d.id = ad.accounts_dire_direccion_1dire_direccion_idb AND a.id = '{$id}' AND
       indicador IN ({$str_final}) AND d.deleted=0 AND ad.deleted=0";


        $result = $GLOBALS['db']->query($query);

        $pos = 0;

        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $array_tipo = array();

            //Estableciendo tipo de dirección como arreglo
            $id_direccion = $row['id'];
            $tipodireccion = $row['tipodedireccion'];
            unset($row['tipodedireccion']);
            //Limpiando valor de tipodedireccin
            $tipo_clean = str_replace('^', '', $tipodireccion);
            //$tipo_dir_arr=explode('^',$tipodireccion);
            //$array_tipo=array_filter($tipo_dir_arr);
            array_push($array_tipo, $tipo_clean);
            $records_in['records'][] = $row;

            $records_in['records'][$pos]['tipodedireccion'] = $array_tipo;

            //Obteniendo información de Estado
            $newRecordsEstado=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_estado','dire_direccion_dire_estado_c',$records_in,'dire_direccion_dire_estado_name','dire_direccion_dire_estado','dire_direccion_dire_estadodire_estado_ida','dire_direccion_dire_estadodire_direccion_idb');

            $records_in=$newRecordsEstado;


            //Obteniendo información de Código Postal
            $newRecordsCP=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_codigopostal','dire_direccion_dire_codigopostal_c',$records_in,'dire_direccion_dire_codigopostal_name','dire_direccion_dire_codigopostal','dire_direccion_dire_codigopostaldire_codigopostal_ida','dire_direccion_dire_codigopostaldire_direccion_idb');

            $records_in=$newRecordsCP;


            //Obteniendo información de Colonia
            $newRecordsColonia=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_colonia','dire_direccion_dire_colonia_c',$records_in,'dire_direccion_dire_colonia_name','dire_direccion_dire_colonia','dire_direccion_dire_coloniadire_colonia_ida','dire_direccion_dire_coloniadire_direccion_idb');

            $records_in=$newRecordsColonia;


            //Obteniendo información de Ciudad
            $newRecordsCiudad=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_ciudad','dire_direccion_dire_ciudad_c',$records_in,'dire_direccion_dire_ciudad_name','dire_direccion_dire_ciudad','dire_direccion_dire_ciudaddire_ciudad_ida','dire_direccion_dire_ciudaddire_direccion_idb');

            $records_in=$newRecordsCiudad;


            //Obteniendo información de Pais
            $newRecordsPais=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_pais','dire_direccion_dire_pais_c',$records_in,'dire_direccion_dire_pais_name','dire_direccion_dire_pais','dire_direccion_dire_paisdire_pais_ida','dire_direccion_dire_paisdire_direccion_idb');

            $records_in=$newRecordsPais;


            //Obteniendo información de Municipio
            $newRecordsMunicipio=GetDireccionesPersona::getRelatedInfoAddress($id_direccion,
                $pos,'dire_municipio','dire_direccion_dire_municipio_c',$records_in,'dire_direccion_dire_municipio_name','dire_direccion_dire_municipio','dire_direccion_dire_municipiodire_municipio_ida','dire_direccion_dire_municipiodire_direccion_idb');

            $records_in=$newRecordsMunicipio;


            $pos++;

        }


        //Regresa resultado
        return $records_in;

        /////////////////////
    }

    public function getIndicador($valor, $list_indicadores)
    {

        $clave = array_search(strtolower($valor), array_map('strtolower', $list_indicadores));

        return $clave;

    }

    public function getIndicadorMap($valor, $list_indicadores_map)
    {

        $array_return = array();

        foreach ($list_indicadores_map as $key => $value) {
            //Cada etiqueta del arreglo map, convertirla en un arreglo
            $arr_buscar = explode(",", $value);
            $valor_encontrado = array_search($valor, $arr_buscar);
            if ($valor_encontrado !== false) {
                array_push($array_return, $key);
            }

        }

        //Uniendo elementos de array en un string
        $key_encontrados = implode(",", $array_return);

        return $key_encontrados;

    }

    public function getRelatedInfoAddress($id_direccion, $pos, $table_unique, $table_dire_unique, $records_in, $str_name_related, $str_array_related,$field_related,$fiel_related_dire)
    {

        $query = "SELECT e.id as id,e.name as name FROM {$table_unique} e
  INNER JOIN {$table_dire_unique} de on e.id=de.{$field_related}
AND de.{$fiel_related_dire}='{$id_direccion}' and e.deleted=0 and de.deleted=0";

        $result = $GLOBALS['db']->query($query);

        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {
            $array_ = array("name" => $row['name'], "id" => $row['id']);

            $records_in['records'][$pos][$str_name_related] = $row['name'];
            $records_in['records'][$pos][$str_array_related] = $array_;
        }

        return $records_in;

    }

}

?>

