<?php
 // created: 2018-01-10 13:38:27
$dictionary['Account']['fields']['referenciado_agencia_c']['labelValue'] = 'Referenciado por';
$dictionary['Account']['fields']['referenciado_agencia_c']['full_text_search']['enabled'] = true;
$dictionary['Account']['fields']['referenciado_agencia_c']['full_text_search']['searchable'] = false;
$dictionary['Account']['fields']['referenciado_agencia_c']['full_text_search']['boost'] = 1;
$dictionary['Account']['fields']['referenciado_agencia_c']['enforced'] = '';
$dictionary['Account']['fields']['referenciado_agencia_c']['dependency'] = 'equal($origendelprospecto_c,"Agencia Distribuidor")';

