<?php
 // created: 2018-01-10 13:38:27
$dictionary['Opportunity']['fields']['ri_tipo_tasa_moratorio_c']['labelValue'] = 'Tipo tasa interés moratorio (Ratificación)';
$dictionary['Opportunity']['fields']['ri_tipo_tasa_moratorio_c']['dependency'] = 'and(equal($tipo_operacion_c,"2"),equal($ratificacion_incremento_c,"1"),equal($tipo_producto_c,"4"))';
$dictionary['Opportunity']['fields']['ri_tipo_tasa_moratorio_c']['visibility_grid'] = '';
$dictionary['Opportunity']['fields']['ri_tipo_tasa_moratorio_c']['full_text_search']['boost'] = 1;

