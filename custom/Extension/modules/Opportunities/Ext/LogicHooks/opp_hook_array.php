<?php
 /**
 * @file   opp_hook_array.php
 * @author trobinson@levementum.com
 * @date   6/3/2015 1:06 PM
 * @brief  opportunity logic hook array
 */

 $hook_array['before_save'][] = Array(
    1,
    'evey time a new team is added to the account record, All related opportunities get the new team',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'setTeams'
);

 $hook_array['before_save'][] = Array(
    2,
    'evey time a new team is added to the account record, All related opportunities get the new team',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'crearFolioSolicitud'
);


 $hook_array['before_save'][] = Array(
    3,
    'evey time a new team is added to the account record, All related opportunities get the new team',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'setFechadeCierre'
);

$hook_array['before_save'][] = Array(
    4,
    'Envia los datos de ratifiacion e incremento',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'AsignaCondicionesFinancieras'
);

$hook_array['before_save'][] = Array(
    5,
    'Envia los datos de ratifiacion e incremento',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'creaRatificacion'
);

$hook_array['after_save'][] = Array(
    4,
    'evey time a new team is added to the account record, All related opportunities get the new team',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'creaSolicitud'
);

$hook_array['after_save'][] = Array(
    5,
    'Bitacora de cambios',
    'custom/modules/Opportunities/opp_logic_hooks.php',
    'OpportunityLogic', // name of the class
    'bitacora_estatus'
);


