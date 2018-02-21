<?php
 // created: 2018-01-10 13:38:27
$dictionary['Lead']['fields']['apellidomaterno_c']['labelValue'] = 'Apellido Materno';
$dictionary['Lead']['fields']['apellidomaterno_c']['full_text_search']['enabled'] = true;
$dictionary['Lead']['fields']['apellidomaterno_c']['full_text_search']['searchable'] = false;
$dictionary['Lead']['fields']['apellidomaterno_c']['full_text_search']['boost'] = 1;
$dictionary['Lead']['fields']['apellidomaterno_c']['enforced'] = 'false';
$dictionary['Lead']['fields']['apellidomaterno_c']['dependency'] = 'or(equal($regimen_fiscal_c,"Persona Fisica"),equal($regimen_fiscal_c,"Persona Fisica con Actividad Empresarial"))';

