<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['noseriefiel_c']['labelValue'] = 'No Serie Fiel';
$dictionary['Account']['fields']['noseriefiel_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['noseriefiel_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['noseriefiel_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['noseriefiel_c']['enforced'] = 'false';
$dictionary['Account']['fields']['noseriefiel_c']['dependency'] = 'and(not(equal($tipodepersona_c,"Persona Moral")),equal($estatus_c,"Interesado"))';

