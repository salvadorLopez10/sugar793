<?php
 // created: 2018-01-10 13:38:27
$dictionary['Opportunity']['fields']['sub_activo_c']['labelValue'] = 'Sub Activo';
$dictionary['Opportunity']['fields']['sub_activo_c']['full_text_search']['enabled'] = true;
$dictionary['Opportunity']['fields']['sub_activo_c']['full_text_search']['searchable'] = false;
$dictionary['Opportunity']['fields']['sub_activo_c']['full_text_search']['boost'] = 1;
$dictionary['Opportunity']['fields']['sub_activo_c']['enforced'] = '';
$dictionary['Opportunity']['fields']['sub_activo_c']['dependency'] = 'not(equal($tipo_producto_c,"4"))';

