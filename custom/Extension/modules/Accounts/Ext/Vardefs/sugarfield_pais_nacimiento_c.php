<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['pais_nacimiento_c']['labelValue'] = 'Pais de nacimiento';
$dictionary['Account']['fields']['pais_nacimiento_c']['dependency'] = 'or(not(equal($tipo_registro_c,"Prospecto")),equal($estatus_c,"Interesado"))';
$dictionary['Account']['fields']['pais_nacimiento_c']['visibility_grid'] = '';
$dictionary['Account']['fields']['pais_nacimiento_c']['full_text_search']['boost'] = 1;

