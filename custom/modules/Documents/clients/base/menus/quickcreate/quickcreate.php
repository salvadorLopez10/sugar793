<?php
// created: 2018-01-10 13:44:08
$viewdefs['Documents']['base']['menu']['quickcreate'] = array (
  'layout' => 'create',
  'label' => 'LNK_NEW_DOCUMENT',
  'visible' => false,
  'icon' => 'fa-plus',
  'related' => 
  array (
    0 => 
    array (
      'module' => 'Accounts',
      'link' => 'documents',
    ),
    1 => 
    array (
      'module' => 'Contacts',
      'link' => 'documents',
    ),
    2 => 
    array (
      'module' => 'Opportunities',
      'link' => 'documents',
    ),
    3 => 
    array (
      'module' => 'RevenueLineItems',
      'link' => 'documents',
    ),
  ),
);