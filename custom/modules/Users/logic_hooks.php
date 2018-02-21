<?php
// Do not store anything in this file that is not part of the array or the hook version.  This file will	
// be automatically rebuilt in the future. 
 $hook_version = 1; 
$hook_array = Array(); 
// position, file, function 
$hook_array['before_save'] = Array();

$hook_array['before_save'][] = Array(
    1,
    'User Private Team',
    'custom/modules/Users/DefaultTeam.php',
    'DefaultTeam',
    'new_user_created'
);

/*
$hook_array['after_save'][] = Array(
    1,
    'Asigna equipos de BO en caso de tener',
    'custom/modules/Users/DefaultTeam.php',
    'DefaultTeam', // name of the class
    'setBackOfficeTeam' // name of the function.

);*/

?>