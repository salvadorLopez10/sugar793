<?php
/**
 * Created by PhpStorm.
 * User: Jorge
 * Date: 6/15/2015
 * Time: 12:18 PM
 */

$hook_array['after_save'][] = Array(
    1,
    'WS Inserta dirección en UNICS',
    'custom/modules/dire_Direccion/Dir_Direcciones_Hooks.php',
    'Dir_Direcciones_Hooks',
    'insertarDireccionenUNICS'
);

$hook_array['before_save'][] = Array(
    1,
    'detecta si estamos insertando o actualizando un servicio',
    'custom/modules/dire_Direccion/Dir_Direcciones_Hooks.php',
    'Dir_Direcciones_Hooks',
    'detectaEstado'
);

$hook_array['before_save'][] = Array(
    2,
    'change all text fields to UpperCase',
    'custom/modules/dire_Direccion/Dir_Direcciones_Hooks.php',
    'Dir_Direcciones_Hooks',
    'textToUppperCase'
);

$hook_array['before_save'][] = Array(
    3,
    'get the last sequencia number (MAX) related to the person, and adds 1',
    'custom/modules/dire_Direccion/Dir_Direcciones_Hooks.php',
    'Dir_Direcciones_Hooks',
    'setSequencia'
);