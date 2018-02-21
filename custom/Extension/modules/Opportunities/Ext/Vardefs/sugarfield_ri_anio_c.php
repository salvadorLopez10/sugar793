<?php
 // created: 2018-01-10 13:38:27
$dictionary['Opportunity']['fields']['ri_anio_c']['labelValue'] = 'Año de Backlog para R/I';
$dictionary['Opportunity']['fields']['ri_anio_c']['dependency'] = 'and(equal($ratificacion_incremento_c,1),equal($tipo_operacion_c,2),equal($tipo_producto_c,"1"))';
$dictionary['Opportunity']['fields']['ri_anio_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['ri_anio_c']['full_text_search']['boost'] = 1;

