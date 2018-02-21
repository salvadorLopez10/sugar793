<?php
 // created: 2018-01-10 13:39:18
$dictionary['Opportunity']['fields']['date_closed']['audited']=false;
$dictionary['Opportunity']['fields']['date_closed']['comments']='Expected or actual date the oppportunity will close';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['duplicate_merge_dom_value']='0';
$dictionary['Opportunity']['fields']['date_closed']['merge_filter']='disabled';
$dictionary['Opportunity']['fields']['date_closed']['calculated']=true;
$dictionary['Opportunity']['fields']['date_closed']['required']=false;
$dictionary['Opportunity']['fields']['date_closed']['massupdate']=false;
$dictionary['Opportunity']['fields']['date_closed']['formula']='maxRelatedDate($revenuelineitems, "date_closed")';
$dictionary['Opportunity']['fields']['date_closed']['enforced']=true;
$dictionary['Opportunity']['fields']['date_closed']['full_text_search']=array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1,
);
$dictionary['Opportunity']['fields']['date_closed']['related_fields']=array (
);

 ?>