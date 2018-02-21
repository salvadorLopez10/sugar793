<?php
// created: 2018-01-10 13:44:08
$viewdefs['Leads']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_LEAD',
  'visible' => true,
  'order' => 2,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'leads',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'leads',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'leads',
    ),
  ),
);