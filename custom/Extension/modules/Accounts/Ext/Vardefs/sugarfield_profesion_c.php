<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['profesion_c']['labelValue'] = 'Profesion';
$dictionary['Account']['fields']['profesion_c']['dependency'] = 'and(not(equal($tipodepersona_c,"Persona Moral")),or(not(equal($tipo_registro_c,"Prospecto")),equal($estatus_c,"Interesado")))';
$dictionary['Account']['fields']['profesion_c']['visibility_grid'] = '';
$dictionary['Account']['fields']['profesion_c']['full_text_search']['boost'] = 1;

