<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['genero_c']['labelValue'] = 'Género';
$dictionary['Account']['fields']['genero_c']['dependency'] = 'and(not(equal($tipodepersona_c,"Persona Moral")),or(not(equal($tipo_registro_c,"Prospecto")),equal($estatus_c,"Interesado")))';
$dictionary['Account']['fields']['genero_c']['visibility_grid'] = '';
$dictionary['Account']['fields']['genero_c']['full_text_search']['boost'] = 1;

