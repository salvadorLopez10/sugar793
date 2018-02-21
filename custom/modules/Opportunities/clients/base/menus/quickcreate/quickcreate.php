<?php
// created: 2018-01-10 13:44:08
$viewdefs['Opportunities']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_OPPORTUNITY',
  'visible' => true,
  'order' => 1,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'opportunities',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'opportunities',
    ),
  ),
);