<?php
 // created: 2018-01-10 13:38:27
$dictionary['Lead']['fields']['segundonombre_c']['labelValue'] = 'Segundo Nombre';
$dictionary['Lead']['fields']['segundonombre_c']['full_text_search']['enabled'] = true;
$dictionary['Lead']['fields']['segundonombre_c']['full_text_search']['searchable'] = false;
$dictionary['Lead']['fields']['segundonombre_c']['full_text_search']['boost'] = 1;
$dictionary['Lead']['fields']['segundonombre_c']['enforced'] = 'false';
$dictionary['Lead']['fields']['segundonombre_c']['dependency'] = 'or(equal($regimen_fiscal_c,"Persona Fisica"),equal($regimen_fiscal_c,"Persona Fisica con Actividad Empresarial"))';

