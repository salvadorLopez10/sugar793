<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['primernombre_c']['labelValue'] = 'Primer Nombre';
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['primernombre_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['primernombre_c']['enforced'] = 'false';
$dictionary['Account']['fields']['primernombre_c']['dependency'] = 'not(equal($tipodepersona_c,"Persona Moral"))';

