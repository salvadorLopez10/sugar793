<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['segundonombre_c']['labelValue'] = 'Segundo Nombre';
$dictionary['Account']['fields']['segundonombre_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['segundonombre_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['segundonombre_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['segundonombre_c']['enforced'] = 'false';
$dictionary['Account']['fields']['segundonombre_c']['dependency'] = 'not(equal($tipodepersona_c,"Persona Moral"))';

