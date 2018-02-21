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
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'לוח שנה',
	'LBL_MODULE_NAME_SINGULAR' => 'לוח שנה',
	'LBL_MODULE_TITLE' => 'לוח שנה',
	'LNK_NEW_CALL' => 'יומן שיחות',
	'LNK_NEW_MEETING' => 'פגישה מתוכננת',
	'LNK_NEW_APPOINTMENT' => 'צור פגישה',
	'LNK_NEW_TASK' => 'צור משימה',
	'LNK_CALL_LIST' => 'שיחות',
	'LNK_MEETING_LIST' => 'פגישות',
	'LNK_TASK_LIST' => 'משימות',
	'LNK_VIEW_CALENDAR' => 'היום',
	'LNK_IMPORT_CALLS' => 'ייבא שיחות',
	'LNK_IMPORT_MEETINGS' => 'ייבא פגישות',
	'LNK_IMPORT_TASKS' => 'ייבא משימות',
	'LBL_MONTH' => 'חודש',
	'LBL_DAY' => 'יום',
	'LBL_YEAR' => 'שנה',
	'LBL_WEEK' => 'שבוע',
	'LBL_PREVIOUS_MONTH' => 'חודש שעבר',
	'LBL_PREVIOUS_DAY' => 'אתמול',
	'LBL_PREVIOUS_YEAR' => 'שנה שעברה',
	'LBL_PREVIOUS_WEEK' => 'שבוע שעבר',
	'LBL_NEXT_MONTH' => 'חודש הבא',
	'LBL_NEXT_DAY' => 'היום הבא',
	'LBL_NEXT_YEAR' => 'שנה הבאה',
	'LBL_NEXT_WEEK' => 'שבוע הבא',
	'LBL_AM' => 'לפני הצהרים',
	'LBL_PM' => 'אחרי הצהרים',
	'LBL_SCHEDULED' => 'נקבע ביומן',
	'LBL_BUSY' => 'עסוק',
	'LBL_CONFLICT' => 'סתירה',
	'LBL_USER_CALENDARS' => 'לוחות שנה למשתמש',
	'LBL_SHARED' => 'משותף',
	'LBL_PREVIOUS_SHARED' => 'הקודם',
	'LBL_NEXT_SHARED' => 'הבא',
	'LBL_SHARED_CAL_TITLE' => 'לוח שנה משותף',
	'LBL_USERS' => 'משתמשים',
	'LBL_REFRESH' => 'רענן',
	'LBL_EDIT_USERLIST' => 'רשימת משתמשים',
	'LBL_SELECT_USERS' => 'בחרמשתמש כדי להציג את לוח השנה שלו',
	'LBL_FILTER_BY_TEAM' => 'סנן משתמש לפי קבוצה:',
	'LBL_ASSIGNED_TO_NAME' => 'הוקצה עבור',
	'LBL_DATE' => 'תאריך ושעה',  
	'LBL_CREATE_MEETING' => 'תזמן פגישה [Alt+M]',
	'LBL_CREATE_CALL' => 'יומן שיחה',
	'LBL_HOURS_ABBREV' => 'ש&#39;',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'כן',
	'LBL_NO' => 'לא',
	'LBL_SETTINGS' => 'הגדרות',
	'LBL_CREATE_NEW_RECORD' => 'צור פעילות',
    'LBL_CREATE_NEW_CALL' => 'צור שיחה',
    'LBL_CREATING_NEW_ACTIVITY' => 'אתה יוצר הזדמנות. האם רצית <br /><a href="javascript:void(0);" data-action="create-task">ליצור משימה</a><br /> או <br />or <a href="javascript:void(0);" data-action="schedule-call">לקבוע מועד לשיחה</a>',
	'LBL_LOADING' => 'טוען ...',
	'LBL_SAVING' => 'שומר...',
	'LBL_SENDING_INVITES' => 'שומר ושולח למוזמנים',
	'LBL_CONFIRM_REMOVE' => 'אתה בטוח שברצונך להסיר רשומה זו',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'אתה בטוח שברצונך להסיר את כל הרשומות הקשורות',
	'LBL_EDIT_RECORD' => 'ערוך פעילות',
    'LBL_EDIT_CALL' => 'ערוך שיחה',
	'LBL_ERROR_SAVING' => 'שגיאה בעת השמירה',
    'LBL_NO_ACCESS' => 'אין לך גישה',
	'LBL_ERROR_LOADING' => 'שגיאה בעת הטעינה',
	'LBL_GOTO_DATE' => 'לך לתאריך',
	'NOTICE_DURATION_TIME' => 'משך זמן חייב להיות גדול מאפס',
	'LBL_STYLE_BASIC' => 'בסיסי',
	'LBL_STYLE_ADVANCED' => 'מתקדם',

	'LBL_INFO_TITLE' => 'פרטים נוספים',
	'LBL_INFO_DESC' => 'תיאור',
	'LBL_INFO_START_DT' => 'תאריך התחלה:',
	'LBL_INFO_DUE_DT' => 'תאריך סיום',
	'LBL_INFO_DURATION' => 'משך:',
	'LBL_INFO_NAME' => 'נושא:',
	'LBL_INFO_RELATED_TO' => 'קשור אל',

	'LBL_NO_USER' => 'אין התאמה לשדה:הוקצה עבור',
	'LBL_SUBJECT' => 'נושא',
	'LBL_DURATION' => 'משך:',
	'LBL_STATUS' => 'מצב',
	'LBL_DATE_TIME' => 'תאריך ושעת התחלה',


	'LBL_SETTINGS_TITLE' => 'הגדרות',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'הצג מרווחי זמן בימים ושובועת לצפייה',
	'LBL_SETTINGS_TIME_STARTS'=>'זמן התחלה:', 
	'LBL_SETTINGS_TIME_ENDS'=>'זמן סיום:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'הקראה שיחות:',
	'LBL_SETTINGS_TASKS_SHOW' => 'הראה משימות:', 

	'LBL_SAVE_BUTTON' => 'שמירה',
	'LBL_DELETE_BUTTON' => 'מחק',
	'LBL_APPLY_BUTTON' => 'הפעל',
	'LBL_SEND_INVITES' => 'שמור ושלח למוזמנים',
	'LBL_CANCEL_BUTTON' => 'בטל',
	'LBL_CLOSE_BUTTON' => 'סגור:',

	'LBL_GENERAL_TAB' => 'פרטים',
	'LBL_PARTICIPANTS_TAB' => 'מוזמנים',
	'LBL_REPEAT_TAB' => 'חוזר ונשנה',	
	
	'LBL_REPEAT_TYPE' => 'חזור',
	'LBL_REPEAT_INTERVAL' => 'כל',
	'LBL_REPEAT_END' => 'סיום',	
	'LBL_REPEAT_END_AFTER' => 'אחרי',
	'LBL_REPEAT_OCCURRENCES' => 'חוזר ונשנה',
	'LBL_REPEAT_END_BY' => 'על ידי',	
	'LBL_REPEAT_DOW' => 'על',	
	'LBL_REPEAT_UNTIL' => 'חזור עד',
	'LBL_REPEAT_COUNT' => 'מספר החזרות והנישנות',
	'LBL_RECURRING_LIMIT_ERROR' => 'לא ניתן לקבוע את ה- $moduleTitle המתחדש משום שהוא חורג ממספר החזרות המקסימלי של $limit.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'ערוך כל החזרות',
	'LBL_REMOVE_ALL_RECURRENCES' => 'מחק את כל החזרות',

	'LBL_DATE_END_ERROR' => 'תאריך הסיום לפני תאריך ההתחלה',
	'ERR_YEAR_BETWEEN' => 'שגיאה - השנה צריכה להיות בין 1970 ל-2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: לא מוגדר עבור תצוגה זו',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "ארוע חוזר {0} חרג מהמגבלה",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} אינו ארוע חוזר",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} אינו הישנות של הורה",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} אינו מזוהה כארוע מודול חוזר",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);
