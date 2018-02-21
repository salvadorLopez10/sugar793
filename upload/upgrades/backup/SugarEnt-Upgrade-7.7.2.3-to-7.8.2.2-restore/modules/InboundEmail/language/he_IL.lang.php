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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'הקצה לצוותים',

	'LBL_RE'					=> 'תגובה:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'פרטי כניסה או סיסמה לא נכונים',
	'ERR_BODY_TOO_LONG'		=> '\rגוף טקסט ארוך מדי כדי לתפוס דוא"ל מלא. גזור.',
	'ERR_INI_ZLIB'			=> 'לא ניתן לכבות דחיסת zlib זמנית. "בדוק הגדרות" עלול להיכשל.',
	'ERR_MAILBOX_FAIL'		=> 'לא ניתן לאחזר חשבונות דואר.',
	'ERR_NO_IMAP'			=> 'לא נמצאו ספריות IMAP. אנא פתור את זה לפני שתמשיך עם דוא"ל נכנס',
	'ERR_NO_OPTS_SAVED'		=> 'לא נשמרו Optimums בחשבון הדוא"ל הנכנס שלך. אנא בדוק את ההגדרות',
	'ERR_TEST_MAILBOX'		=> 'אנא בדוק את ההגדרות שלך ונסה שוב.',
    'ERR_DELETE_FOLDER' => 'לא ניתן למחוק ספריה',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'לא ניתן לבטל רישום לספריה לפני מחיקה',

	'LBL_APPLY_OPTIMUMS'	=> 'החל ערכים מיטביים',
	'LBL_ASSIGN_TO_USER'	=> 'הקצה למשתמש',
	'LBL_AUTOREPLY_OPTIONS'	=> 'אפשרויות תגובה-אוטומטית',
	'LBL_AUTOREPLY'			=> 'תבנית תגובה-אוטומטית',
	'LBL_AUTOREPLY_HELP'	=> 'בחר תגובה אוטומטית כדי להודיע לשולחי דוא"ל שהתגובה שלהם התקבלה.',
	'LBL_BASIC'				=> 'פרטי חשבון דואר',
	'LBL_CASE_MACRO'		=> 'תיק מאקרו',
	'LBL_CASE_MACRO_DESC'	=> 'הגדר את המאקרו שינותח וישמש כדי לקשר דוא"ל מיובא לתיק.',
	'LBL_CASE_MACRO_DESC2'	=> 'הגדר את זה לכל ערך, אבל שמור את ה<b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Force validation of the mail server&#39;s Security Certificate - do not use if self-signing.',
	'LBL_CERT'				=> 'אמת תעודה',
	'LBL_CLOSE_POPUP'		=> 'סגור חלון',
	'LBL_CREATE_NEW_GROUP'	=> '--צור קבוצה בשמירה--',
	'LBL_CREATE_TEMPLATE'	=> 'צור',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'הצטרף לתיקיות',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Default:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Default:',
	'LBL_DELETE_SEEN'		=> 'מחק הודעות דוא"ל שנקראו לאחר הייבוא',
	'LBL_EDIT_TEMPLATE'		=> 'ערוך',
	'LBL_EMAIL_OPTIONS'		=> 'אפשרויות טיפול בדוא"ל',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'אפשרויות טיפול קופץ',
	'LBL_FILTER_DOMAIN_DESC'=> 'ציין דומיין שאליו לא יישלחו תגובות-אוטומטיות.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'בחר כדי ליצור רישומי דוא"ל אוטומטית ב-Sugar עבור כל הודעות הדוא"ל הנכנסות.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'עבור האפשרות צור תיק',
	'LBL_FILTER_DOMAIN'		=> 'אין תגובה-אוטומטית לדומיין זה',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>מציאת משתני חיבור מיטבי.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'מצא תצורה מיטבית',
	'LBL_FIND_SSL_WARN'		=> '<br>בדיקת SSL עלולה להיארך זמן רב. אנא היה סבלני.<br>',
	'LBL_FORCE_DESC'		=> 'שרתי IMAP/POP3 מסוימים דורשים החלפות מיוחדות. בדוק כדי לאלץ החלפה שלילית בעת ההתחברות (כלומר, /notls)',
	'LBL_FORCE'				=> 'אלץ שלילי',
	'LBL_FOUND_MAILBOXES'	=> 'נמצאו התיקיות השמישות הבאות.<br>לחץ על אחת כדי לבחור בה:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>נמצאו הגדרות מיטביות. לחץ על הכפתור מטה כדי להחיל אותן בחשבון הדואר שלך.',
	'LBL_FROM_ADDR'			=> 'כתובת "מאת"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "ייתכן וכתובת הדוא\"ל שהוזנה כאן לא תופיע באזור כתובת &quot;מאת&quot; של הדוא\"ל שנשלח עקב הגבלות שנכפו על ידי ספק שירות הדואר. בנסיבות אלה, כתובת הדוא\"ל שהוגדרה בשרת הדואר היוצא תובא לשימוש.",
	'LBL_FROM_NAME_ADDR'	=> 'שם/דוא"ל מאת',
	'LBL_FROM_NAME'			=> 'שם "מאת"',
	'LBL_GROUP_QUEUE'		=> 'הקצה לקבוצה',
    'LBL_HOME'              => 'בית',
	'LBL_LIST_MAILBOX_TYPE'	=> 'ניצולת חשבון דואר',
	'LBL_LIST_NAME'			=> 'שם:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Type',
	'LBL_LIST_SERVER_URL'	=> 'שרת דואר',
	'LBL_LIST_STATUS'		=> 'מצב',
	'LBL_LOGIN'				=> 'שם משתמש',
	'LBL_MAILBOX_DEFAULT'	=> 'תיבת דואר נכנס',
	'LBL_MAILBOX_SSL_DESC'	=> 'השתמש ב-SSL בעת ההתחברות, אם זה לא עובד, בדוק שהתקנת ה-PHP שלך כוללת "--with-imap-ssl" בהגדרות.',
	'LBL_MAILBOX_SSL'		=> 'השתמש ב-SSL',
	'LBL_MAILBOX_TYPE'		=> 'פעולות אפשריות',
	'LBL_DISTRIBUTION_METHOD' => 'שיטת הפצה',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'תבנית חדשה של תגובה-אוטומטית תיק',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'בחר תגובה אוטומטית כדי להודיע לשולחי הודעות דוא"ל שתיק נוצר. הודעת הדוא"ל מכילה את מספר התיק בקו הנושא אשר תואם להגדרת מאקרו תיק. תגובה זו נשלחת רק כאשר הודעת הדוא"ל הראשונה מתקבלת מהנמען.',
	'LBL_MAILBOX'			=> 'תיקיות בבקרה',
	'LBL_TRASH_FOLDER'		=> 'תיקיית אשפה',
	'LBL_GET_TRASH_FOLDER'	=> 'השג תיקיית אשפה',
	'LBL_SENT_FOLDER'		=> 'תיקיית נשלחו',
	'LBL_GET_SENT_FOLDER'	=> 'השג תיקיית נשלחו',
	'LBL_SELECT'				=> 'Select',
	'LBL_MARK_READ_DESC'	=> 'סמן הודעות שנקראו בשרת הדואר בייבוא; אל תמחק.',
	'LBL_MARK_READ_NO'		=> 'הודעת דוא"ל שסומנה כמחוקה לאחר הייבוא',
	'LBL_MARK_READ_YES'		=> 'הודעת דוא"ל שנותרה בשרת לאחר הייבוא',
	'LBL_MARK_READ'			=> 'השאר הודעות בשרת',
	'LBL_MAX_AUTO_REPLIES'	=> 'מספר תגובות-אוטומטיות',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'הגדר את המספר המרבי של תגובות-אוטומטיות לשליחה לכתובת דוא"ל ייחודית במהלך תקופה של 24 שעות.',
	'LBL_PERSONAL_MODULE_NAME' => 'חשבון דואר אישי',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'חשבון דואר אישי',
	'LBL_CREATE_CASE'      => 'צור תיק מדוא"ל',
	'LBL_CREATE_CASE_HELP'  => 'בחר כדי ליצור אוטומטית רישומי תיק ב-Sugar מהודעות דוא"ל נכנסות.',
	'LBL_MODULE_NAME'		=> 'Group Mail Account',
	'LBL_MODULE_NAME_SINGULAR' => 'דואר נכנס',
	'LBL_BOUNCE_MODULE_NAME' => 'תיבת דואר של טיפול קופץ',
	'LBL_MODULE_TITLE'		=> 'Inbound Email',
	'LBL_NAME'				=> 'שם',
    'LBL_NONE'              => 'אין',
	'LBL_NO_OPTIMUMS'		=> 'לא ניתן למצוא Optimums. אנא בדוק את ההגדרות שלך ונסה שוב.',
	'LBL_ONLY_SINCE_DESC'	=> 'בעת שימוש ב-POP3, PHP לא ניתן לסנן הודעות חדשות/שלא נקראו. דגל זה מאפשר לבקשה לבדוק הודעות מאז הפעם האחרונה שבה נבדק חשבון הדואר. זה ישפר משמעותית את הביצועים במידה ושרת הדואר שלך לא תומך ב-IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'לא, בדוק כנגד כל הודעות הדוא"ל בשרת הדואר.',
	'LBL_ONLY_SINCE_YES'	=> 'כן.',
	'LBL_ONLY_SINCE'		=> 'ייבוא מאז הבדיקה האחרונה:',
	'LBL_OUTBOUND_SERVER'	=> 'שרת דואר יוצא',
	'LBL_PASSWORD_CHECK'	=> 'בדיקת סיסמה',
	'LBL_PASSWORD'			=> 'סיסמה',
	'LBL_POP3_SUCCESS'		=> 'בדיקת החיבור POP3 שלך הסתיימה בהצלחה.',
	'LBL_POPUP_FAILURE'		=> 'בדיקת החיבור נכשלה. השגיאה מוצגת מטה.',
	'LBL_POPUP_SUCCESS'		=> 'בדיקת החיבור הסתיימה בהצלחה. ההגדרות שלך עובדות.',
	'LBL_POPUP_TITLE'		=> 'הגדרות בדיקה',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'השגת רשימת תיקיות',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'בחר תיקיות שהצטרפת אליהן',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'בחר תיקיית אשפה',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'בחר תיקיית נשלחו',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'התיקייה או התיקיות הבאות %s לא קיימות או נמחקו מהשרת',
	'LBL_PORT'				=> 'יציאת שרת דואר',
	'LBL_QUEUE'				=> 'תור חשבון דואר',
	'LBL_REPLY_NAME_ADDR'	=> 'שם/דוא"ל תגובה',
	'LBL_REPLY_TO_NAME'		=> 'שם "הגב-אל"',
	'LBL_REPLY_TO_ADDR'		=> 'כתובת "הגב-אל"',
	'LBL_SAME_AS_ABOVE'		=> 'משתמש בשם/כתובת מאת',
	'LBL_SAVE_RAW'			=> 'שמור מקור גולמי',
	'LBL_SAVE_RAW_DESC_1'	=> 'בחר "כן" במידה ותרצה לשמר את המקור הגולמי עבור כל דוא"ל מיובא.',
	'LBL_SAVE_RAW_DESC_2'	=> 'צירופים גדולים יכולים לגרום לכישלונות עם מסדי נתונים שהוגדרו בצורה שמרנית או לא תקינה.',
	'LBL_SERVER_OPTIONS'	=> 'הגדרות מתקדמות',
	'LBL_SERVER_TYPE'		=> 'פרוטוקול שרת דואר',
	'LBL_SERVER_URL'		=> 'כתובת שרת דואר',
	'LBL_SSL_DESC'			=> 'אם שרת הדואר שלך תומך בחיבורי שקע מאובטח, הפעלת אפשרות זו תכפה חיבורי SSL בעת ייבוא דוא"ל.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'לצוות שנבחר יש גישה לחשבון דואר.',
	'LBL_SSL'				=> 'השתמש ב-SSL',
	'LBL_STATUS'			=> 'מצב',
	'LBL_SYSTEM_DEFAULT'	=> 'ברירת מחדל מערכת',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Test [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'הגדרות בדיקה',
	'LBL_TEST_SUCCESSFUL'	=> 'החיבור הושלם בהצלחה.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'רגע אחד בבקשה...',
	'LBL_TLS_DESC'			=> 'השתמש באבטחת שכבת הובלה בעת התחברות לשרת הדואר - השתמש בזה רק אם שרת הדואר שלך תומך בפרוטוקול זה.',
	'LBL_TLS'				=> 'השתמש ב-TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'דוא"ל נכנס הושבת',
	'LBL_WARN_IMAP'			=> 'אזהרות:',
	'LBL_WARN_NO_IMAP'		=> 'דוא"ל נכנס <b>לא יכולה</b> לתפקד בלי הפעלת/הידור הספריות IMAP c-client עם המודול PHP. אנא צור קשר עם מנהל המערכת שלך כדי לפתור את הבעיה.',

	'LNK_CREATE_GROUP'		=> 'צור קבוצה חדשה',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'חשבון דואר קבוצה חדש',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'חשבון טיפול קופץ חדש',
	'LNK_LIST_MAILBOXES'	=> 'כל חשבונות הדואר',
	'LNK_LIST_QUEUES'		=> 'כל התורים',
	'LNK_LIST_SCHEDULER'	=> 'Schedulers',
	'LNK_LIST_TEST_IMPORT'	=> 'בדיקת ייבוא דוא"ל',
	'LNK_NEW_QUEUES'		=> 'צור תור חדש',
	'LNK_SEED_QUEUES'		=> 'תורי Seed מצוותים',
	'LBL_GROUPFOLDER_ID'	=> 'מזהה תיקיית קבוצה',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'הקצה לתיקיית קבוצה',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'הרשה למשתמשים לשלוח הודעות דוא"ל באמצעות שם וכתובת "מאת" בתור התגובה לכתובת',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'כאשר אפשרות זו נבחרת, שם מאת וכתובת הדוא"ל מאת המושיכים לחשבון דואר קבוצתי זה יופיעו בתור אפשרות עבור השדה &#39;מאת&#39; בעת חיבור הודעות דוא"ל עבור משתמשים בעלי גישה לחשבון הדואר הקבוצתי.',
    'LBL_STATUS_ACTIVE'     => 'Active',
    'LBL_STATUS_INACTIVE'   => 'Inactive',
    'LBL_IS_PERSONAL' => 'אישי',
    'LBL_IS_GROUP' => 'קבוצה',
    'LBL_ENABLE_AUTO_IMPORT' => 'יבא הודעות דוא"ל אוטומטית',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'אזהרה: אתה משנ את הגדרות הייבוא האוטומטית שלך מה שעלול לגרום לאובדן נתונים.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'אזהרה: יש להפעיל ייבוא אוטומטי בעת יצירת תיקים אוטומטית.',
	'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
?>
