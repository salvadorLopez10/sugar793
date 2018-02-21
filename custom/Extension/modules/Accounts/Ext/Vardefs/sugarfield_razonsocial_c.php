<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['razonsocial_c']['labelValue'] = 'Razon Social';
$dictionary['Account']['fields']['razonsocial_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['razonsocial_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['razonsocial_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['razonsocial_c']['enforced'] = 'false';
$dictionary['Account']['fields']['razonsocial_c']['dependency'] = 'equal($tipodepersona_c,"Persona Moral")';

