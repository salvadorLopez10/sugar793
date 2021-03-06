<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'LBL_ADDRESS_BCC' => '密抄:',
  'LBL_ADDRESS_CC' => '抄送:',
  'LBL_ADDRESS_TO' => '收件人:',
  'LBL_ADDRESS_TYPE' => '使用地址:',
  'LBL_ADDRESS_TYPE_TARGET' => '类型',
  'LBL_ALERT_CURRENT_USER' => '用户关联目标',
  'LBL_ALERT_CURRENT_USER_TITLE' => '与目标模块关联的用户',
  'LBL_ALERT_LOGIN_USER_TITLE' => '在执行时间登录的用户',
  'LBL_ALERT_REL1' => '相关模块:',
  'LBL_ALERT_REL2' => '相关模块:',
  'LBL_ALERT_REL_USER' => '用户关联相关的',
  'LBL_ALERT_REL_USER_CUSTOM' => '接受者关联相关的',
  'LBL_ALERT_REL_USER_CUSTOM_TITLE' => '在相关模块中选择接受者',
  'LBL_ALERT_REL_USER_TITLE' => '与相关模块关联的用户',
  'LBL_ALERT_SPECIFIC_ROLE' => '所有用户在指定的',
  'LBL_ALERT_SPECIFIC_ROLE_TITLE' => '所有在指定角色中的用户',
  'LBL_ALERT_SPECIFIC_TEAM' => '所有用户在指定的',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET' => '所有属于与目标模块相关联的团队的用户',
  'LBL_ALERT_SPECIFIC_TEAM_TARGET_TITLE' => '与目标模块相关联的团队成员',
  'LBL_ALERT_SPECIFIC_TEAM_TITLE' => '所有在指定团队中的用户',
  'LBL_ALERT_SPECIFIC_USER' => '指定的',
  'LBL_ALERT_SPECIFIC_USER_TITLE' => '指定的用户',
  'LBL_ALERT_TRIG_USER_CUSTOM' => '接受者关联目标模块',
  'LBL_ALERT_TRIG_USER_CUSTOM_TITLE' => '在目标模块中选择接受者',
  'LBL_AND' => '和名称字段:',
  'LBL_ARRAY_TYPE' => '行动类型:',
  'LBL_BLANK' => '',
  'LBL_CUSTOM_USER' => '自定义用户:',
  'LBL_EDITLAYOUT' => '编辑布局',
  'LBL_FIELD' => '字段',
  'LBL_FIELD_VALUE' => '已选择的用户:',
  'LBL_FILTER_BY' => '(附加过滤器)过滤相关模块通过',
  'LBL_FILTER_CUSTOM' => '(附加过滤器)过滤相关模块通过指定',
  'LBL_LIST_ADDRESS_TYPE' => '地址类型',
  'LBL_LIST_ARRAY_TYPE' => '行动类型',
  'LBL_LIST_FIELD_VALUE' => '用户',
  'LBL_LIST_FORM_TITLE' => '接受者列表',
  'LBL_LIST_RELATE_TYPE' => '关联类型',
  'LBL_LIST_REL_MODULE1' => '相关模块',
  'LBL_LIST_REL_MODULE2' => '相关模块',
  'LBL_LIST_STATEMENT' => '警告接受者:',
  'LBL_LIST_STATEMENT_CONTENT' => '发送警告到下面接受者:',
  'LBL_LIST_STATEMENT_INVITE' => '会议/电话受邀者:',
  'LBL_LIST_USER_TYPE' => '用户类型',
  'LBL_LIST_WHERE_FILTER' => '状态',
  'LBL_MODULE_NAME' => '警告接受者列表',
  'LBL_MODULE_NAME_INVITE' => '受邀者列表',
  'LBL_MODULE_NAME_SINGULAR' => '警告接受者列表',
  'LBL_MODULE_NAME_SINGULAR_INVITE' => '受邀者列表',
  'LBL_MODULE_TITLE' => '接受者:首页',
  'LBL_NEW_FORM_TITLE' => '新增工作流程接受者',
  'LBL_NEXT_BUTTON' => '下一步',
  'LBL_PLEASE_SELECT' => '请选择',
  'LBL_PREVIOUS_BUTTON' => '上页',
  'LBL_RECORD' => '模块',
  'LBL_RELATE_TYPE' => '关系类型:',
  'LBL_REL_CUSTOM' => '选择自定义电子邮件字段:',
  'LBL_REL_CUSTOM2' => '字段',
  'LBL_REL_CUSTOM3' => '字段',
  'LBL_REL_CUSTOM_STRING' => '选择自定义电子邮件和名称字段',
  'LBL_REL_MODULE1' => '相关模块:',
  'LBL_REL_MODULE2' => '相关模块:',
  'LBL_ROLE' => '角色',
  'LBL_SEARCH_FORM_TITLE' => '查找工作流程列表',
  'LBL_SELECT_EMAIL' => '您必须选择一个电子邮件',
  'LBL_SELECT_FILTER' => '您必须选择一个字段用于过滤',
  'LBL_SELECT_NAME' => '您必须选择一个姓名',
  'LBL_SELECT_NAME_EMAIL' => '您必须选择姓名与电子邮件',
  'LBL_SELECT_VALUE' => '您必须选择一个有效值。',
  'LBL_SEND_EMAIL' => '发送电子邮件给:',
  'LBL_SPECIFIC_FIELD' => '字段',
  'LBL_TEAM' => '团队',
  'LBL_USER' => '用户',
  'LBL_USER1' => '记录创建人',
  'LBL_USER2' => '记录最后修改人',
  'LBL_USER3' => '当前',
  'LBL_USER3b' => '系统。',
  'LBL_USER4' => '当前的记录指派人',
  'LBL_USER5' => '先前的记录指派人',
  'LBL_USER_MANAGER' => '用户经理',
  'LBL_USER_TYPE' => '用户类型:',
  'LBL_WHERE_FILTER' => '状态:',
  'LNK_NEW_WORKFLOW' => '新增工作流程',
  'LNK_WORKFLOW' => '工作流程对象',
  'NTC_REMOVE_ALERT_USER' => '您确定要移除这个警告接受者吗?',
);

