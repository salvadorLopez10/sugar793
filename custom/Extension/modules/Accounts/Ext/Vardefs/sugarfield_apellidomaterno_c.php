<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['apellidomaterno_c']['labelValue'] = 'Apellido Materno';
$dictionary['Account']['fields']['apellidomaterno_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['apellidomaterno_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['apellidomaterno_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['apellidomaterno_c']['enforced'] = 'false';
$dictionary['Account']['fields']['apellidomaterno_c']['dependency'] = 'not(equal($tipodepersona_c,"Persona Moral"))';

