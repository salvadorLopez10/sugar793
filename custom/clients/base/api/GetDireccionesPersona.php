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
                $arrayEstado=array("name"=>$rowEstado['name'],"id"=>$rowEstado['id']);

                $records_in['records'][$pos]['dire_direccion_dire_estado_name'] = $rowEstado['name'];
                $records_in['records'][$pos]['dire_direccion_dire_estado'] = $arrayEstado;
            }

            //Obteniendo información de Código Postal
            $queryCP = "SELECT cp.id as id,cp.name as name FROM dire_codigopostal cp
  INNER JOIN dire_direccion_dire_codigopostal_c dc on cp.id=dc.dire_direccion_dire_codigopostaldire_codigopostal_ida
AND dc.dire_direccion_dire_codigopostaldire_direccion_idb='{$id_direccion}' and cp.deleted=0 and dc.deleted=0;";

            $resultCP = $GLOBALS['db']->query($queryCP);

            while ($rowCP = $GLOBALS['db']->fetchByAssoc($resultCP)) {
                $arrayCP=array("name"=>$rowCP['name'],"id"=>$rowCP['id']);

                $records_in['records'][$pos]['dire_direccion_dire_codigopostal_name'] = $rowCP['name'];
                $records_in['records'][$pos]['dire_direccion_dire_codigopostal'] = $arrayCP;
            }

            //Obteniendo información de Colonia
            $queryColonia = "SELECT c.id as id,c.name as name FROM dire_colonia c
  INNER JOIN dire_direccion_dire_colonia_c dc on c.id=dc.dire_direccion_dire_coloniadire_colonia_ida
AND dc.dire_direccion_dire_coloniadire_direccion_idb='{$id_direccion}' and c.deleted=0 and dc.deleted=0;";

            $resultColonia = $GLOBALS['db']->query($queryColonia);

            while ($rowColonia = $GLOBALS['db']->fetchByAssoc($resultColonia)) {
                $arrayColonia=array("name"=>$rowColonia['name'],"id"=>$rowColonia['id']);

                $records_in['records'][$pos]['dire_direccion_dire_colonia_name'] = $rowColonia['name'];
                $records_in['records'][$pos]['dire_direccion_dire_colonia'] = $arrayColonia;
            }

            //Obteniendo información de Ciudad
            $queryCiudad = "SELECT c.id as id,c.name as name FROM dire_ciudad c
  INNER JOIN dire_direccion_dire_ciudad_c dc on c.id=dc.dire_direccion_dire_ciudaddire_ciudad_ida
AND dc.dire_direccion_dire_ciudaddire_direccion_idb='{$id_direccion}' and c.deleted=0 and dc.deleted=0;";

            $resultCiudad = $GLOBALS['db']->query($queryCiudad);

            while ($rowCiudad = $GLOBALS['db']->fetchByAssoc($resultCiudad)) {
                $arrayCiudad=array("name"=>$rowCiudad['name'],"id"=>$rowCiudad['id']);

                $records_in['records'][$pos]['dire_direccion_dire_ciudad_name'] = $rowCiudad['name'];
                $records_in['records'][$pos]['dire_direccion_dire_ciudad'] = $arrayCiudad;
            }

            //Obteniendo información de Pais
            $queryPais = "SELECT p.id as id,p.name as name FROM dire_pais p
  INNER JOIN dire_direccion_dire_pais_c dp on p.id=dp.dire_direccion_dire_paisdire_pais_ida
AND dp.dire_direccion_dire_paisdire_direccion_idb='{$id_direccion}' and p.deleted=0 and dp.deleted=0;";

            $resultPais = $GLOBALS['db']->query($queryPais);

            while ($rowPais = $GLOBALS['db']->fetchByAssoc($resultPais)) {
                $arrayPais=array("name"=>$rowPais['name'],"id"=>$rowPais['id']);

                $records_in['records'][$pos]['dire_direccion_dire_pais_name'] = $rowPais['name'];
                $records_in['records'][$pos]['dire_direccion_dire_pais'] = $arrayPais;
            }

            //Obteniendo información de Municipio
            $queryMunicipio = "SELECT m.id as id,m.name as name FROM dire_municipio m
  INNER JOIN dire_direccion_dire_municipio_c dm on m.id=dm.dire_direccion_dire_municipiodire_municipio_ida
AND dm.dire_direccion_dire_municipiodire_direccion_idb='{$id_direccion}' and m.deleted=0 and dm.deleted=0;";

            $resultMunicipio = $GLOBALS['db']->query($queryMunicipio);

            while ($rowMunicipio = $GLOBALS['db']->fetchByAssoc($resultMunicipio)) {
                $arrayMunicipio=array("name"=>$rowMunicipio['name'],"id"=>$rowMunicipio['id']);

                $records_in['records'][$pos]['dire_direccion_dire_municipio_name'] = $rowMunicipio['name'];
                $records_in['records'][$pos]['dire_direccion_dire_municipio'] = $arrayMunicipio;
            }

            $pos++;

        }


        //Regresa resultado
        return $records_in;
    }

}

?>

