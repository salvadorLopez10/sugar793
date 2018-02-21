<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
	'LBL_SEND_DATE_TIME'						=> '发送日期',
	'LBL_IN_QUEUE'								=> '处理中',
	'LBL_IN_QUEUE_DATE'							=> '排队日期',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> '每一批发送过的电子邮件数量只可以是整数',

	'LBL_ATTACHMENT_AUDIT'						=> ' 已发送。它没有被复制以防止占用当前机器的磁盘。',
	'LBL_CONFIGURE_SETTINGS'					=> '配置电子邮件设置',
	'LBL_CUSTOM_LOCATION'						=> '已定义用户',
	'LBL_DEFAULT_LOCATION'						=> '默认',
	
	'LBL_DISCLOSURE_TITLE'						=> '附录对每封邮件显示的消息',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> '显示的内容',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> '注意: 此邮件消息仅为唯一的受件人所用，并可能包含机密或特殊信息。 任何未授权的查阅、 使用、 泄露、 或者分配都是禁止的。 如果您非指定收件人， 请销毁原始信息的所有副本并通告发送者以便我们更改收件人地址。谢谢。',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> '用这种字符集撰写电子邮件',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> '用这种客户端撰写电子邮件',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> '删除电子邮件的同时也删除相关的笔记和附件',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> '预先填入 Gmail&#153; 默认值',
	'LBL_EMAIL_PER_RUN_REQ'						=> '每一批发送电子邮件的数量：',
	'LBL_EMAIL_SMTP_SSL'						=> '使SMTP在SSL之上？',
	'LBL_EMAIL_USER_TITLE'						=> '用户默认电子邮件',
	'LBL_EMAIL_OUTBOUND_CONFIGURATION'			=> '外发邮件配置',
	'LBL_EMAILS_PER_RUN'						=> '每一批发送电子邮件的数量：',
	'LBL_ID'									=> 'ID',
	'LBL_LIST_CAMPAIGN'							=> '市场活动',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> '已处理的',
	'LBL_LIST_FORM_TITLE'						=> '队列',
	'LBL_LIST_FROM_EMAIL'						=> '发件人电子邮件',
	'LBL_LIST_FROM_NAME'						=> '发件人姓名',
	'LBL_LIST_IN_QUEUE'							=> '处理中',
	'LBL_LIST_MESSAGE_NAME'						=> '营销信息',
	'LBL_LIST_RECIPIENT_EMAIL'					=> '收件人电子邮件',
	'LBL_LIST_RECIPIENT_NAME'					=> '收件人姓名',
	'LBL_LIST_SEND_ATTEMPTS'					=> '试图发送',
	'LBL_LIST_SEND_DATE_TIME'					=> '发送于',
	'LBL_LIST_USER_NAME'						=> '用户名',
	'LBL_LOCATION_ONLY'							=> '地点',
	'LBL_LOCATION_TRACK'						=> '市场活动追踪文件的位置(像campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => '保留市场活动信息的备份：',
    'LBL_CAMP_MESSAGE_COPY_DESC'                     => '您是否希望存储在所有市场活动中发送的<bold>每一封</bold>电子邮件的消息副本？<bold>我们建议且系统默认不会这样做</bold>。选择否，则仅存储发送的模板和创建独立消息所需的变量。',
	'LBL_MAIL_SENDTYPE'							=> '邮件转发代理：',
	'LBL_MAIL_SMTPAUTH_REQ'						=> '使用 SMTP 认证：',
	'LBL_MAIL_SMTPPASS'							=> '密码：',
	'LBL_MAIL_SMTPPORT'							=> 'SMTP 端口：',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP服务器地址：',
	'LBL_MAIL_SMTPUSER'							=> '用户名：',
	'LBL_CHOOSE_EMAIL_PROVIDER'        => '请选择您的邮件供应商',
	'LBL_YAHOOMAIL_SMTPPASS'					=> 'Yahoo！邮件密码',
	'LBL_YAHOOMAIL_SMTPUSER'					=> 'Yahoo！ 邮件编号',
	'LBL_GMAIL_SMTPPASS'					=> 'Gmail 密码',
	'LBL_GMAIL_SMTPUSER'					=> 'Gmail邮件地址',
	'LBL_EXCHANGE_SMTPPASS'					=> 'Exchange 密码',
	'LBL_EXCHANGE_SMTPUSER'					=> 'Exchange 用户名',
	'LBL_EXCHANGE_SMTPPORT'					=> 'Exchange 服务器端口',
	'LBL_EXCHANGE_SMTPSERVER'				=> 'Exchange 服务器',
	'LBL_EMAIL_LINK_TYPE'				=> '电子邮件客户端',
    'LBL_EMAIL_LINK_TYPE_HELP'			=> '<b>Sugar邮件客户端：</b>使用Sugar应用中的邮件客户端发送电邮。<br>只有您的管理员已配置电子邮件相关设置，该选项才可用。如果您有任何疑问，请与管理员联系。<br><b>外部邮件客户端：</b> 使用Sugar应用程序以外的电子邮件客户端发送邮件，如 Microsoft Outlook 的外部。',
	'LBL_MARKETING_ID'							=> '营销 ID',
    'LBL_MODULE_ID'                             => '邮递员',
	'LBL_MODULE_NAME'							=> '电子邮件设置',
	'LBL_MODULE_NAME_SINGULAR'						=> '电子邮件设置',
	'LBL_CONFIGURE_CAMPAIGN_EMAIL_SETTINGS'    => '配置市场活动的电子邮件设置',
	'LBL_MODULE_TITLE'							=> '发件箱电子邮件队列管理',
	'LBL_NOTIFICATION_ON_DESC' 					=> '当有记录被指派的时候，给用户发送通知邮件。',
	'LBL_NOTIFY_FROMADDRESS' 					=> '“发件人”地址：',
	'LBL_NOTIFY_FROMNAME' 						=> '“发件人”姓名：',
	'LBL_NOTIFY_ON'								=> '指派通知',
	'LBL_ALLOW_USER_EMAIL_ACCOUNT'				=> '允许用户配置电子邮件帐户',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> '为新用户发送默认通知邮件？',
	'LBL_NOTIFY_TITLE'							=> '电子邮件通知选项',
	'LBL_OLD_ID'								=> '旧编号',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> '发件箱电子邮件选项',
	'LBL_RELATED_ID'							=> '相关编号',
	'LBL_RELATED_TYPE'							=> '相关类型',
	'LBL_SAVE_OUTBOUND_RAW'						=> '保存发件箱电子邮件原件',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> '查找已处理的',
	'LBL_SEARCH_FORM_TITLE'						=> '查找队列',
	'LBL_VIEW_PROCESSED_EMAILS'					=> '查看已处理的电子邮件',
	'LBL_VIEW_QUEUED_EMAILS'					=> '查看队列电子邮件',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'config.php中变量site_url的值',
	'TXT_REMOVE_ME_ALT'							=> '要把自己从这个邮件列表中移除，请去往',
	'TXT_REMOVE_ME_CLICK'						=> '点击此处',
	'TXT_REMOVE_ME'								=> '把自己从电子邮件列表中移除',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> '给负责人的电子邮件地址发送通知？',

	'LBL_SECURITY_TITLE'						=> '电子邮件安全设置',
	'LBL_SECURITY_DESC'							=> '不允许进入收件箱，或者不允许显示电子邮件模块。',
	'LBL_SECURITY_APPLET'						=> '小应用程序标签',
	'LBL_SECURITY_BASE'							=> '基本标签',
	'LBL_SECURITY_EMBED'						=> '嵌入标签',
	'LBL_SECURITY_FORM'							=> '表单标签',
	'LBL_SECURITY_FRAME'						=> '结构标签',
	'LBL_SECURITY_FRAMESET'						=> '框架标签',
	'LBL_SECURITY_IFRAME'						=> 'iFrame 标签',
	'LBL_SECURITY_IMPORT'						=> '导入标签',
	'LBL_SECURITY_LAYER'						=> '层次标签',
	'LBL_SECURITY_LINK'							=> '链接标签',
	'LBL_SECURITY_OBJECT'						=> '目标标签',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> '选择Outlook默认最低安全防范(错误在正确的一边显示)。',
	'LBL_SECURITY_SCRIPT'						=> '脚本标签',
	'LBL_SECURITY_STYLE'						=> '风格标签',
	'LBL_SECURITY_TOGGLE_ALL'					=> '选中所有选项',
	'LBL_SECURITY_XMP'							=> 'Xmp 标签',
    'LBL_YES'                                   => '是',
    'LBL_NO'                                    => '否',
    'LBL_PREPEND_TEST'                          => '[测试]:',
	'LBL_SEND_ATTEMPTS'							=> '尝试发送',
	'LBL_OUTGOING_SECTION_HELP'                 => '为电子邮件通知和工作流警告配置默认的邮件发送服务器。',
    'LBL_ALLOW_DEFAULT_SELECTION'               => '允许用户使用此帐户发送电子邮件:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP'          => '选中这个选项时，所有用户将能够使用相同的发送电子邮件帐户发送系统通知和警报。 如果选项未选中，用户仍然可以使用自己的账户信息设置自己的邮件发送服务器。',
    'LBL_FROM_ADDRESS_HELP'                     => '当启用时，用户指定的名字和电子邮件地址将被包括在电子邮件发件人中。如果 SMTP 服务器不允许从一个比服务器帐户不同的电子邮件帐户发送邮件，此功能可能无法正常使用。',
	'LBL_GMAIL_LOGO' => '谷歌邮箱' /*for 508 compliance fix*/,
	'LBL_YAHOO_MAIL_LOGO' => 'Yahoo电邮' /*for 508 compliance fix*/,
	'LBL_EXCHANGE_LOGO' => '交换' /*for 508 compliance fix*/,
	'LBL_HELP' => '帮助' /*for 508 compliance fix*/,
    'LBL_UNAUTH_ACCESS' => '没有管理权限。',
    'LBL_INVALID_ENTRY_POINT' => '无效的输入点',
);
