<?php
// created: 2018-01-10 13:44:08
$viewdefs['lev_Backlog']['base']['view']['recordlist'] = array (
  'favorite' => true,
  'following' => true,
  'selection' => 
  array (
    'type' => 'multi',
    'actions' => 
    array (
      0 => 
      array (
        'name' => 'export_button',
        'type' => 'button',
        'label' => 'LBL_EXPORT',
        'acl_action' => 'export',
        'primary' => true,
        'events' => 
        array (
          'click' => 'list:massexport:fire',
        ),
      ),
    ),
  ),
  'rowactions' => 
  array (
    'actions' => 
    array (
      0 => 
      array (
        'type' => 'rowaction',
        'css_class' => 'btn',
        'tooltip' => 'LBL_PREVIEW',
        'event' => 'list:preview:fire',
        'icon' => 'fa-eye',
        'acl_action' => 'view',
      ),
    ),
  ),
  'last_state' => 
  array (
    'id' => 'record-list',
  ),
);