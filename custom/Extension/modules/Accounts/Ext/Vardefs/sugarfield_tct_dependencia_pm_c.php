<?php
 // created: 2018-02-06 17:38:14
$dictionary['Account']['fields']['tct_dependencia_pm_c']['labelValue']='Dependencia donde ejerce o ejerció el cargo';
$dictionary['Account']['fields']['tct_dependencia_pm_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Account']['fields']['tct_dependencia_pm_c']['enforced']='';
$dictionary['Account']['fields']['tct_dependencia_pm_c']['dependency']='equal($ctpldaccionistas_c,true)';

 ?>