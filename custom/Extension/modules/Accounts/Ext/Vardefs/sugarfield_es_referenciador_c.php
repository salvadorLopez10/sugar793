<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['es_referenciador_c']['labelValue'] = 'Referenciador Autorizado';
$dictionary['Account']['fields']['es_referenciador_c']['enforced'] = '';
$dictionary['Account']['fields']['es_referenciador_c']['dependency'] = 'or(equal($tipo_registro_c,"Proveedor"),equal($esproveedor_c,true))';

