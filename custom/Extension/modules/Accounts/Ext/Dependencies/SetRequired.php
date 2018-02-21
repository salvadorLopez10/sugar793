<?php
    $dependencies['Accounts']['PrimerNombre_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired', //Action type
                            'params' => array(
                                    'target' => 'primernombre_c',
                                    'label' => 'primernombre_c_label',
                                    'value' => 'not(equal($tipodepersona_c,"Persona Moral"))', //Formula
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['ApellidoPaterno_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'apellidopaterno_c',
                                    'label' => 'apellidopaterno_c_label',
                                    'value' => 'not(equal($tipodepersona_c,"Persona Moral"))',
                            ),
                    ),
            ),
    );
	
    $dependencies['Accounts']['RazonSocial_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired', //Action type
                            'params' => array(
                                    'target' => 'razonsocial_c',
                                    'label' => 'razonsocial_c_label',
                                    'value' => 'equal($tipodepersona_c,"Persona Moral")', //Formula
                            ),
                    ),
            ),
    );
	
	$dependencies['Accounts']['RFC_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'rfc_c',
                                    'label' => 'rfc_c_label',
                                    'value' => 'and(not(equal($tipo_registro_c,"Persona"  )),not(equal($tipo_registro_c,"Prospecto")))',
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['Profesion_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'profesion_c',
                                    'label' => 'profesion_c_label',
                                    'value' => 'and(not(equal($tipodepersona_c,"Persona Moral")), 
									or(equal($estatus_c,"Interesado"),
									equal($tipo_registro_c,"Cliente"),
									equal($tipo_registro_c,"Proveedor")))',
                            ),
                    ),
            ),
    );

	$dependencies['Accounts']['IVA_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c', 'esproveedor_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'iva_c',
                                    'label' => 'iva_c_label',
                                    'value' => 'or(equal($tipo_registro_c,"Proveedor"), equal($esproveedor_c,true))',
                            ),
                    ),
            ),
    );
    
	$dependencies['Accounts']['estadocivil_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'estadocivil_c',
                                    'label' => 'estadocivil_c_label',
                                    'value' => 'and(not(equal($tipodepersona_c,"Persona Moral")), or(equal($tipo_registro_c,"Cliente"), equal($estatus_c,"Interesado")))',
                            ),
                    ),
            ),
    );   

    $dependencies['Accounts']['Genero_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'genero_c',
                                    'label' => 'genero_c_label',
                                    'value' => 'and(not(equal($tipodepersona_c,"Persona Moral")), or(equal($tipo_registro_c,"Cliente"), equal($estatus_c,"Interesado")))',
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['fechaNacimiento_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'fechadenacimiento_c',
                                    'label' => 'fechadenacimiento_c_label',
                                    'value' => 'and(not(equal($tipodepersona_c,"Persona Moral")),
                                    and(not(equal($tipo_registro_c,"Persona")),
                                        not(equal($tipo_registro_c,"Prospecto"))
                                        )
                                    )',
                            ),
                    ),
            ),
    );
	
	$dependencies['Accounts']['fechaconstitutiva_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'fechaconstitutiva_c',
                                    'label' => 'fechaconstitutiva_c_label',
                                    'value' => 'and(equal($tipodepersona_c,"Persona Moral"),
                                    and(not(equal($tipo_registro_c,"Persona")),
                                        not(equal($tipo_registro_c,"Prospecto"))
                                        )
                                    )',
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['Pais_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'pais_nacimiento_c',
                                    'label' => 'pais_nacimiento_c_label',
                                    'value' => 'or(equal($tipo_registro_c,"Cliente"),  equal($estatus_c,"Interesado"), equal($tipo_registro_c,"Proveedor"))',
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['EstadoNacimiento_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c', 'estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'estado_nacimiento_c',
                                    'label' => 'estado_nacimiento_c_label',
                                    'value' => 'or(equal($tipo_registro_c,"Cliente"),  equal($estatus_c,"Interesado"), equal($tipo_registro_c,"Proveedor"))',
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['SectorEconomico_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipodepersona_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'sectoreconomico_c',
                                    'label' => 'sectoreconomico_c_label',
                                    'value' => 'and(not(equal($tipodepersona_c,"Persona Fisica")),or(equal($tipo_registro_c,"Cliente"), equal($tipo_registro_c,"Proveedor")))',
                            ),
                    ),
            ),
    );


    $dependencies['Accounts']['TipoMotivo_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired', //Action type
                            'params' => array(
                                    'target' => 'tipodemotivo_c',
                                    'label' => 'tipodemotivo_c_label',
                                    'value' => 'equal($estatus_c,"No Interesado")', //Formula
                            ),
                    ),
            ),
    );

    $dependencies['Accounts']['origendelprospecto_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('estatus_c','tipo_registro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'origendelprospecto_c',
                                    'label' => 'origendelprospecto_c_label',
                                    'value' => 'or(equal($tipo_registro_c,"Prospecto"),equal($tipo_registro_c,"Cliente"))',
                            ),
                    ),
            ),
    );
    
    
    //* CVV Cuestionario de PLD 
    /*
    $dependencies['Accounts']['ctpldorigenrecursocliente_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipo_registro_c', 'estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldorigenrecursocliente_c',
                                    'label' => 'ctpldorigenrecursocliente_c_label',
                                    'value' => 'or(equal($tipo_registro_c,"Cliente"), equal($estatus_c,"Interesado"))',
                           ),
                    ),
            ),
    );
    */

    //Ajuste a personas morales
    $dependencies['Accounts']['ctpldidproveedorrecursosclie_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipo_registro_c', 'estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldidproveedorrecursosclie_c',
                                    'label' => 'ctpldidproveedorrecursosclie_c_label',
                                    'value' => 'or(and(not(equal($tipodepersona_c,"Persona Moral")),equal($tipo_registro_c,"Cliente")),and(not(equal($tipodepersona_c,"Persona Moral")),equal($estatus_c,"Interesado")))',
                                    //'value' => 'or(equal($tipo_registro_c,"Cliente"), equal($estatus_c,"Interesado"))',
                            ),
                    ),
            ),
    );
    
    $dependencies['Accounts']['ctpldidproveedorrecursosson_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('tipo_registro_c', 'estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldidproveedorrecursosson_c',
                                    'label' => 'ctpldidproveedorrecursosson_c_label',
                                    'value' => 'or(and(not(equal($tipodepersona_c,"Persona Moral")),equal($tipo_registro_c,"Cliente")),and(not(equal($tipodepersona_c,"Persona Moral")),equal($estatus_c,"Interesado")))',
                                    //'value' => 'or(equal($tipo_registro_c,"Cliente"), equal($estatus_c,"Interesado"))',
                            ),
                    ),
            ),
    );
    
	////Se convierten a requeridos cuando se selecciona el check de alguna pregunta:
	/*Desempena o ha desempenado funciones Publicas destacadas en Mexico o en el extranjero, 
	altos puestos ejecutivos en Empresas Estatales o funciones importantes en Partidos Politicos?*/
    /*
	$dependencies['Accounts']['ctpldfuncionespublicascargo_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('ctpldfuncionespublicas_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldfuncionespublicascargo_c',
                                    'label' => 'ctpldfuncionespublicascargo_c_label',
                                    'value' => 'equal($ctpldfuncionespublicas_c,"1")',
                            ),
                    ),
            ),
    );
    */
	
	/*Su conyuge o alguno de sus padres, abuelos, hijos, nietos, hermanos, suegros, hijos politicos o cunados, 
	desempenan o han desempenado Funciones Publicas destacadas en Mexico o en el extranjero, 
	altos puestos ejecutivos en Empresas Estatales o funciones importantes en partidos politicos*/
	$dependencies['Accounts']['ctpldconyugecargo_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('ctpldconyuge_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldconyugecargo_c',
                                    'label' => 'ctpldconyugecargo_c_label',
                                    'value' => 'equal($ctpldconyuge_c,"1")',
                            ),
                    ),
            ),
    );
	
	/*Alguno de sus Socios o Accionistas desempena o ha desempenado funciones Publicas destacadas en Mexico o en el extranjero, 
	altos puestos ejecutivos en Empresas Estatales o funciones importantes en Partidos Politicos*/
	$dependencies['Accounts']['ctpldaccionistascargo_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('ctpldaccionistas_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldaccionistascargo_c',
                                    'label' => 'ctpldaccionistascargo_c_label',
                                    'value' => 'equal($ctpldaccionistas_c,"1")',
                            ),
                    ),
            ),
    );
	
	/*Su conyuge o alguno de los padres, abuelos, hijos, nietos, hermanos, suegros, hijos politicos o cunados de los Socios o Accionistas, 
	desempena o ha desempenado funciones publicas destacadas en Mexico o en el extranjero, altos puestos ejecutivos en Empresa*/
	$dependencies['Accounts']['ctpldaccionistasconyugecargo_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('ctpldaccionistasconyuge_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'ctpldaccionistasconyugecargo_c',
                                    'label' => 'ctpldaccionistasconyugecargo_c_label',
                                    'value' => 'equal($ctpldaccionistasconyuge_c,"1")',
                            ),
                    ),
            ),
    );
	
	/*Realizara pagos utilizando otro instrumento monetario*/
	$dependencies['Accounts']['imotrodesc_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('imotro_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'SetRequired',
                            'params' => array(
                                    'target' => 'imotrodesc_c',
                                    'label' => 'imotrodesc_c_label',
                                    'value' => 'equal($imotro_c,"1")',
                            ),
                    ),
            ),
    );

        $dependencies['Accounts']['referenciador_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('origendelprospecto_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'SetRequired',
                    'params' => array(
                        'target' => 'referenciador_c',
                        'label' => 'referenciador_c_label',
                        'value' => 'equal($origendelprospecto_c,"Referenciador")', //Formula
                    ),
                ),
            ),
        );

        $dependencies['Accounts']['referido_cliente_prov_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('origendelprospecto_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'SetRequired',
                    'params' => array(
                        'target' => 'referido_cliente_prov_c',
                        'label' => 'referido_cliente_prov_c_label',
                        'value' => 'or(equal($origendelprospecto_c,"Referido Cliente"), equal($origendelprospecto_c,"Referido Proveedor"))',
                    ),
                ),
            ),
        );

        $dependencies['Accounts']['referenciado_agencia_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('origendelprospecto_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'SetRequired',
                    'params' => array(
                        'target' => 'referenciado_agencia_c',
                        'label' => 'referenciado_agencia_c_label',
                        'value' => 'equal($origendelprospecto_c,"Agencia Distribuidor")',
                    ),
                ),
            ),
        );

        $dependencies['Accounts']['evento_marketing_c_required'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('origendelprospecto_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'SetRequired',
                    'params' => array(
                        'target' => 'evento_marketing_c',
                        'label' => 'evento_marketing_c_label',
                        'value' => 'or(equal($origendelprospecto_c,"Eventos Mercadotecnia"),equal($origendelprospecto_c,"Mercadotecnia"))', //Formula
                    ),
                ),
            ),
        );


//////////***************************   BEGIN: READ ONLY   ******************************////////////////////////////

    $dependencies['Accounts']['pep_c_lista_negra_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'ReadOnly',
                            'params' => array(
                                    'target' => 'pep_c',
                                    'value' => 'true',
                            ),
                    ),
                    array(
                            'name' => 'ReadOnly',
                            'params' => array(
                                    'target' => 'lista_negra_c',
                                    'value' => 'true',
                            ),
                    ),
            ),
    );

/*
    $dependencies['Accounts']['idprospecto_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'ReadOnly',
                            'params' => array(
                                    'target' => 'idprospecto_c',
                                    'label' => 'idprospecto_c_label',
                                    'value' => 'not(equal($estatus_c,"Make it Read Only"))',
                            ),
                    ),
            ),
    );
*/

    $dependencies['Accounts']['idcliente_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('idcliente_c','tipo_registro_c','estatus_c'),
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'ReadOnly',
                            'params' => array(
                                    'target' => 'idcliente_c',
                                    'label' => 'idcliente_c_label',
                                    'value' => 'true',
                            ),
                    ),
            ),
    );
	
	$dependencies['Accounts']['reus_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'onload' => true,
            'actions' => array(
                    array(
                            'name' => 'ReadOnly',
                            'params' => array(
                                    'target' => 'reus_c',
                                    'label' => 'LBL_REUS',
                                    'value' => 'true',
                            ),
                    ),
            ),
    );
        $dependencies['Accounts']['promotorleasing_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('idcliente_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'promotorleasing_c',
                        'label' => 'LBL_promotorleasing_c',
                        'value' => 'not(equal($idcliente_c,""))',
                    ),
                ),
            ),
        );

        $dependencies['Accounts']['promotorfactoraje_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('idcliente_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'promotorfactoraje_c',
                        'label' => 'LBL_promotorfactoraje_c',
                        'value' => 'not(equal($idcliente_c,""))',
                    ),
                ),
            ),
        );

        $dependencies['Accounts']['promotorcredit_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('idcliente_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'promotorcredit_c',
                        'label' => 'LBL_promotorcredit_c',
                        'value' => 'not(equal($idcliente_c,""))',
                    ),
                ),
            ),
        );


        $dependencies['Accounts']['referencia_bancaria_c_readonly'] = array(
            'hooks' => array("all"),
            'trigger' => 'true',
            'triggerFields' => array('idcliente_c','tipo_registro_c','estatus_c'),
            'onload' => true,
            'actions' => array(
                array(
                    'name' => 'ReadOnly',
                    'params' => array(
                        'target' => 'referencia_bancaria_c',
                        'label' => 'referencia_bancaria_c_label',
                        'value' => 'true',
                    ),
                ),
            ),
        );

    //////////***************************   END: READ ONLY   ******************************////////////////////////////


/** Carlos Zaragoza: Al cambiar tipo de registro a cliente bloquear estatus seleccionando integraci�n de expediente*/
/*
$dependencies['Accounts']['estatus_c_readonly'] = array(
    'hooks' => array("edit"),
    'trigger' => 'true',
    'triggerFields' => array('estatus_c'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'estatus_c',
                'label' => 'estatus_c_label',
                'value' => 'equal($tipo_registro_c,"Cliente")',
            ),
        ),
    ),
);
*/

$dependencies['Accounts']['alta_proveedor_c_readonly'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'triggerFields' => array('idcliente_c','tipo_registro_c','estatus_c'),
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'alta_proveedor_c',
                'label' => 'alta_proveedor_c_label',
                'value' => 'true',
            ),
        ),
    ),
);
