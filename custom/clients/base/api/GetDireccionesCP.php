<?php
/**
 * Created by Salvador Lopez.
 * email: salvador.lopez@tactos.com.mx
 * Date: 26/06/18
 */

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class GetDireccionesCP extends SugarApi
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
                'path' => array('DireccionesCP', '?'),
                //endpoint variables
                'pathVars' => array('module', 'cp'),
                //method to call
                'method' => 'getAddressByCP',
                //short help string to be displayed in the help documentation
                'shortHelp' => 'Método GET para obtener información relacionada al Código Postal',
                //long help to be displayed in the help documentation
                'longHelp' => '',
            ),


        );

    }

    /**
     * Obtiene información relacionada al Código Postal
     *
     * Método que obtiene Pais, Estado, Municipio, Ciudad y Colonia filtrados por Código Posta
     *
     * @param array $api
     * @param array $args Array con los parámetros enviados para su procesamiento
     * @return array $arrPadre Array con Pais, Estados, Municipios, Ciudades y Colonias relacionadas al CP
     * @throws SugarApiExceptionInvalidParameter
     */
    public function getAddressByCP($api, $args)
    {

        $cp=$args['cp'];
        $query = "SELECT
  cp.id                                                   AS idCP,
  cp.name                                                 AS nameCP,
  cp_m.dire_codigopostal_dire_municipiodire_municipio_ida AS idMunicipio,
  m.name                                                  AS nameMunicipio,
  m_e.dire_municipio_dire_estadodire_estado_ida           AS idEstado,
  e.name                                                  AS nameEstado,
  e_p.dire_estado_dire_paisdire_pais_ida                  AS idPais,
  p.name                                                  AS namePais,
  --      c_e.dire_ciudad_dire_estadodire_ciudad_idb as idCiudad,
  --      c.name as nameCiudad,
  co.id                                                   AS idColonia,
  co.name                                                 AS nameColonia
FROM dire_codigopostal cp
  RIGHT JOIN dire_codigopostal_dire_municipio_c cp_m
    ON cp_m.dire_codigopostal_dire_municipiodire_codigopostal_idb = cp.id
  RIGHT JOIN dire_municipio m
    ON m.id = cp_m.dire_codigopostal_dire_municipiodire_municipio_ida
  RIGHT JOIN dire_municipio_dire_estado_c m_e
    ON m_e.dire_municipio_dire_estadodire_municipio_idb = m.id
  RIGHT JOIN dire_estado e
    ON e.id = m_e.dire_municipio_dire_estadodire_estado_ida
  RIGHT JOIN dire_estado_dire_pais_c e_p
    ON e_p.dire_estado_dire_paisdire_estado_idb = e.id
  RIGHT JOIN dire_pais p
    ON p.id = e_p.dire_estado_dire_paisdire_pais_ida
  -- right join dire_ciudad_dire_estado_c c_e
  -- 	on c_e.dire_ciudad_dire_estadodire_estado_ida = e.id
  -- right join dire_ciudad c
  -- 	on c.id = c_e.dire_ciudad_dire_estadodire_ciudad_idb
  RIGHT JOIN dire_colonia co
  -- on co.codigo_postal = cp.name
    ON co.id LIKE concat(cp_m.dire_codigopostal_dire_municipiodire_municipio_ida, cp.name, '%')
WHERE cp.name = '{$cp}'";

        $result = $GLOBALS['db']->query($query);

        $arrPadre= array('paises'=>array(),'municipios'=>array(),'estados'=>array(),'colonias'=>array());


        $pos=0;

        while ($row = $GLOBALS['db']->fetchByAssoc($result)) {

            $idPais=$row['idPais'];
            $namePais = $row['namePais'];

            $idMunicipio=$row['idMunicipio'];
            $nameMunicipio = $row['nameMunicipio'];

            $idEstado=$row['idEstado'];
            $nameEstado = $row['nameEstado'];

            $idColonia=$row['idColonia'];
            $nameColonia = $row['nameColonia'];

            $arrPais=array('idPais'=>$idPais,'namePais'=>$namePais);
            $arrMunicipio=array('idMunicipio'=>$idMunicipio,'nameMunicipio'=>$nameMunicipio);
            $arrEstado=array('idEstado'=>$idEstado,'nameEstado'=>$nameEstado);
            $arrColonia=array('idColonia'=>$idColonia,'nameColonia'=>$nameColonia);

            $arrPadre['paises'][$pos]=$arrPais;
            $arrPadre['municipios'][$pos]=$arrMunicipio;
            $arrPadre['estados'][$pos]=$arrEstado;
            $arrPadre['colonias'][$pos]=$arrColonia;

            $pos++;
        }

        $arrPaises=$arrPadre['paises'];
        $arrMunicipios=$arrPadre['municipios'];
        $arrEstados=$arrPadre['estados'];
        $arrColonias=$arrPadre['colonias'];

        $arrNewPaises=array_values(array_unique($arrPaises, SORT_REGULAR));
        $arrNewMunicipios=array_values(array_unique($arrMunicipios, SORT_REGULAR));
        $arrNewEstados=array_values(array_unique($arrEstados, SORT_REGULAR));
        $arrNewColonias=array_values(array_unique($arrColonias, SORT_REGULAR));

        $arrPadre['paises']=$arrNewPaises;
        $arrPadre['municipios']=$arrNewMunicipios;
        $arrPadre['estados']=$arrNewEstados;
        $arrPadre['colonias']=$arrNewColonias;


        return $arrPadre;

    }


}

?>

