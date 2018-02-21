<?php
/**
 * Created by Levementum.
 * User: jgarcia@levementum.com
 * Date: 9/23/2016
 * Time: 4:52 PM
 */

$dependencies['uni_Brujula']['name_readonly'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'name',
                'label' => 'name_label',
                'value' => 'true',
            ),
        ),
    ),
);

$dependencies['uni_Brujula']['assigned_user_name_readonly'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'assigned_user_name',
                'label' => 'assigned_user_name_label',
                'value' => 'not(equal($id, ""))',
            ),
        ),
    ),
);

$dependencies['uni_Brujula']['fecha_reporte_readonly'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'fecha_reporte',
                'label' => 'fecha_reporte_label',
                'value' => 'not(equal($id, ""))',
            ),
        ),
    ),
);

$dependencies['uni_Brujula']['vacaciones'] = array(
    'hooks' => array("all"),
    'trigger' => 'true',
    'onload' => true,
    'actions' => array(
        array(
            'name' => 'ReadOnly',
            'params' => array(
                'target' => 'vacaciones_c',
                'label' => 'vacaciones_label',
                'value' => 'not(equal($id, ""))',
            ),
        ),
    ),
);