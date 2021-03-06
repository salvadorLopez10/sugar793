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

// $Id: en_us.lang.php 56786 2010-06-02 18:29:56Z jenny $

$mod_strings = array (
	'LBL_MODULE_NAME' => 'Projekt',
	'LBL_MODULE_NAME_SINGULAR' => 'Projekt',
	'LBL_MODULE_TITLE' => 'Projektid: Avaleht',
	'LBL_SEARCH_FORM_TITLE' => 'Proejkti otsing',
    'LBL_LIST_FORM_TITLE' => 'Projekti loend',
    'LBL_HISTORY_TITLE' => 'Ajalugu',

	'LBL_ID' => 'Id',
	'LBL_DATE_ENTERED' => 'Loodud:',
	'LBL_DATE_MODIFIED' => 'Muudetud:',
	'LBL_ASSIGNED_USER_ID' => 'Vastutaja:',
    'LBL_ASSIGNED_USER_NAME' => 'Vastutaja:',
	'LBL_MODIFIED_USER_ID' => 'Muudetud kasutaja Id',
	'LBL_CREATED_BY' => 'Looja:',
	'LBL_TEAM_ID' => 'Meeskond:',
	'LBL_NAME' => 'Nimi:',
    'LBL_PDF_PROJECT_NAME' => 'Projekti nimi:',
	'LBL_DESCRIPTION' => 'Kirjeldus:',
	'LBL_DELETED' => 'Kustutatud:',
	'LBL_DATE_START' => 'Alguskuupäev:',
	'LBL_DATE_END' => 'Lõppkuupäev:',
	'LBL_PRIORITY' => 'Tähtsus:',
    'LBL_STATUS' => 'Olek:',
    'LBL_MY_PROJECTS' => 'Minu projektid',
    'LBL_MY_PROJECT_TASKS' => 'Minu projekti ülesanded',
    
	'LBL_TOTAL_ESTIMATED_EFFORT' => 'Hinnanguline ajakulu (tunde):',
	'LBL_TOTAL_ACTUAL_EFFORT' => 'Tegelik ajakulu (tunde):',

	'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_DAYS' => 'päevi',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Vastutaja',
	'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Hinnanguline ajakulu (tunde):',
	'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Tegelik ajakulu (tunde):',
    'LBL_LIST_UPCOMING_TASKS' => 'Tulevased ülesanded (1 nädal)',
    'LBL_LIST_OVERDUE_TASKS' => 'Ületähtaja ülesanded',
    'LBL_LIST_OPEN_CASES' => 'Avatud juhtumid',
    'LBL_LIST_END_DATE' => 'Lõppkuupäev',
    'LBL_LIST_TEAM_ID' => 'Meeskond',
    

	'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Projekti ülesanded',
	'LBL_CONTACT_SUBPANEL_TITLE' => 'Kontaktid',
	'LBL_ACCOUNT_SUBPANEL_TITLE' => 'Ettevõtted',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Müügivõimalused',
	'LBL_QUOTE_SUBPANEL_TITLE' => 'Pakkumised',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Uus projekt',

	'CONTACT_REMOVE_PROJECT_CONFIRM' => 'Oled kindel, et soovid selle kontakti projektist eemaldada?',

	'LNK_NEW_PROJECT'	=> 'Loo projekt',
	'LNK_PROJECT_LIST'	=> 'Vaata projekti loendit',
	'LNK_NEW_PROJECT_TASK'	=> 'Loo projekti ülesanne',
	'LNK_PROJECT_TASK_LIST'	=> 'Vaata projekti ülesandeid',
    'LNK_PROJECT_DASHBOARD' => 'Vaata minu projektide töölauda',
    'LNK_PROJECT_TASKS_DASHBOARD'   => 'Minu projekti ülesannete töölaud',   
	'LNK_NEW_PROJECT_TEMPLATES' => 'Loo projekti mall',
	'LNK_PROJECT_TEMPLATES_LIST' => 'Vaata projekti malle',
    'LNK_PROJECT_RESOURCE_REPORT' => 'Ressurssi aruanne',
	
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projektid',
	'LBL_ACTIVITIES_TITLE'=>'Tegevused',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Tegevused',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Ajalugu',
	'LBL_QUICK_NEW_PROJECT'	=> 'Uus projekt',
	
	'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Projekti ülesanded',
	'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
	'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
	'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Müügivõimalused',
    'LBL_CASES_SUBPANEL_TITLE' => 'Juhtumid',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugid',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Quoted Line Items',
    'LBL_RLI_SUBPANEL_TITLE' => 'Revenue Line Items',
    
	'LBL_QUOTES_SUBPANEL_TITLE' => 'Pakkumised',
	
	'LBL_RESOURCES_SUBPANEL_TITLE' => 'Ressurssid',
	'LBL_RESOURCE_NAME' => 'Resource Name',
	'LBL_RESOURCE_TYPE' => 'Resource Type',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Ülesande nimi',
    'LBL_DURATION' => 'Kestus',
    'LBL_ACTUAL_DURATION' => 'Tegelik kestus',
    'LBL_START' => 'Alusta',
    'LBL_FINISH' => 'Lõpeta',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% teostatud',
    'LBL_RESOURCE_NAMES' => 'Allikas',
    'LBL_MORE'  => 'Rohkem...',

    'LBL_PERCENT_BUSY' => '% hõivatud',
    'LBL_USER_RESOURCE' => 'Kasutaja ressurss',
    'LBL_CONTACTS_RESOURCE' => 'Kontakti ressurss',
    'LBL_PROJECT_HOLIDAYS' => 'Puhkus',
    'LBL_LIST_RESOURCE' => 'Ressurss:',
    'LBL_TASK_ID_WIDGET' => 'id',
    'LBL_TASK_NAME_WIDGET' => 'kirjeldus',
    'LBL_DURATION_WIDGET' => 'kestus',
    'LBL_START_WIDGET' => 'date_start',
    'LBL_FINISH_WIDGET' => 'date_finish',
    'LBL_PREDECESSORS_WIDGET' => 'predecessors_',
    'LBL_PERCENT_COMPLETE_WIDGET' => 'percent_complete',
    'LBL_RESOURCE_NAMES_WIDGET' => 'resurss',
    'LBL_EDIT_PROJECT_TASKS_TITLE'=> 'Muuda projektiülesandeid',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    
    'LBL_INSERT_BUTTON' => 'Sisesta ridu',
    'LBL_INDENT_BUTTON' => 'Indent',
    'LBL_OUTDENT_BUTTON' => 'Outdent',
    'LBL_SAVE_BUTTON' => 'Salvesta',
    'LBL_COPY_BUTTON' => 'Kopeeri',
    'LBL_PASTE_BUTTON' => 'Kleebi',   
    'LBL_DELETE_BUTTON' => 'Kustuta',  
    'LBL_EXPAND_ALL_BUTTON' => 'Laienda kõik',  
    'LBL_COLLAPSE_ALL_BUTTON' => 'Ahenda kõik',  
    'LBL_MARK_AS_MILESTONE_BUTTON' => 'Mark as Milestone',
    'LBL_UNMARK_AS_MILESTONE_BUTTON' => 'Un-mark as Milestone',
    'LBL_HIDE_OPTIONAL_COLUMNS_BUTTON' => 'Peida valikulised veerud',
    'LBL_SHOW_OPTIONAL_COLUMNS_BUTTON' => 'Näita valikulised veerud',
    'LBL_VIEW_TASK_DETAILS_BUTTON' => 'Vaata ülesande üksikasju',
    'LBL_RECALCULATE_DATES_BUTTON' => 'Kuupäevade ümberarvestus',    
    'LBL_EXPORT_TO_PDF' => 'Ekspordi PDF',
    
    'LBL_FILTER_ALL_TASKS' => 'Kõik ülesanded',  
    'LBL_FILTER_COMPLETED_TASKS' => 'Lõpetatud ülesanded',  
    'LBL_FILTER_INCOMPLETE_TASKS' => 'Lõpetamata ülesanded',  
    'LBL_FILTER_MILESTONES' => 'Milestones',  
    'LBL_FILTER_RESOURCE' => 'Ressurssi kasutamise ülesanded',    
    'LBL_FILTER_DATE_RANGE' => 'Tasks in Date Range', 
    'LBL_FILTER_VIEW' => 'Vaata',
    'LBL_LIST_FILTER_VIEW' => 'Vaata',
    'LBL_FILTER_DATE_RANGE_START' => 'Ülesanded, mis algavad või lõppevad hiljem', 
    'LBL_FILTER_DATE_RANGE_FINISH' => 'ja varem', 
    'LBL_FILTER_MY_TASKS' => 'Minu ülesanded',    
    'LBL_FILTER_MY_OVERDUE_TASKS' => 'Minu ületähtaegsed ülesanded',    
    'LBL_FILTER_MY_UPCOMING_TASKS' => 'Minu tulevased ülesanded (1 nädal)',    

/*
    * Tasks that fall within a date range
    * Tasks using a specified resource     
  */   
    'LBL_CUT_BUTTON' => 'Lõika', 
    'LBL_WEEK_BUTTON' => 'Nädal',
    'LBL_BIWEEK_BUTTON' => '2 nädalat',
    'LBL_MONTH_BUTTON' => 'Kuu',
    
    'ERR_TASK_NAME_FOR_ROW' => 'Ülesande nimi rea jaoks',
    'ERR_IS_EMPTY' => 'ei saa olle tühi,',   
    'ERR_PERCENT_COMPLETE' => 'Lõpetamisprotsent peab olema väärtus 0 ja 100 vahel.',   
    'ERR_DURATION' => 'Kestus peab olema täisarv.',
    'ERR_DATE' => 'Määratud kuupäev langeb puhkepäevale.',
    'ERR_FINISH_DATE' => 'Lõppkuupäev ei saa olla varasem alguskuupäevast.',
    'ERR_PREDECESSORS_INPUT' => 'Values entered in the Predecessors field must be of the form "1" or "1,2"',
    'ERR_PREDECESSORS_OUT_OF_RANGE' => 'The value specified for the Predecessor field is larger than the number of rows.',   
    'ERR_PREDECESSOR_CYCLE_FAIL' => 'The specified predecessor causes a dependency cycle.',
    'ERR_PREDECESSOR_IS_PARENT_OR_CHILD_FAIL' => 'The specified predecessor is either a parent task or a subtask.', 
    'ERR_TASK_VIEW_DETAILS' => 'You cannot view the details of a task not yet saved.',
    'NTC_DELETE_TASK_AND_SUBTASKS' => 'Kas oled kindel, et soovid selle ülesande ja selle alamülesanded kustutada?',
    'NTC_NO_ACTIVE_PROJECTS' => 'Sul pole aktiivseid projekte ega projekti ülesandeid.',
    'NTC_ASSIGN_RIGHT_TEAM' => 'Veendu, et kõik selle projekti ressurssid on selle meeskonna liikmed.',
       
    'LBL_RESOURCE_NAME' => 'Resource Name',
    'LBL_RESOURCE_TYPE' => 'Resource Type',
    
    'LBL_GRID_ONLY' => 'Grid',
    'LBL_GANTT_ONLY' => 'Gantt',
    'LBL_GRID_GANTT' => 'Grid/Gantt',
    
    'LBL_REPORT' => 'Aruanne',
    'LBL_DAILY_REPORT' => 'Päeva aruanne',
    'LBL_DATE' => 'Kuupäev',
    'LBL_PROJECT_HOLIDAYS_TITLE' => 'Projekti puhkused',   
    'LBL_HOLIDAYS_TITLE' => 'Puhkused',   
    'LBL_HOLIDAY' => 'Puhkus',   
    
    'LBL_PROJECT_TEMPLATE' => 'Projekti mall',
    'LBL_PROJECT_TEMPLATES_LIST' => 'Projekti mallide loend',
    'LBL_PROJECT_TEMPLATES_TITLE' => 'Projekti mallid: Avaleht',
    'LBL_IS_TEMPLATE' => 'On mall',
	'LBL_SAVE_TEMPLATE_BUTTON_TITLE' => 'Salvesta mallina',
    'LBL_SAVE_TEMPLATE_BUTTON_LABEL' => 'Salvesta mallina',
    'LBL_SAVE_AS_PROJECT' => 'Salvesta projektina',
    'LBL_SAVE_AS_TEMPLATE' => 'Salvesta ina',
    'LBL_SAVE_AS_NEW_PROJECT_BUTTON' => 'Salvesta Uue projektina',
    'LBL_SAVE_AS_NEW_TEMPLATE_BUTTON' => 'Salvesta Uue mallina',    
    
    'LBL_TEMPLATE_NAME' => 'Malli nimi',
    'LBL_PROJECT_NAME' => 'Projekti nimi:',    
    
	'LBL_PROJECT_TEMPLATE_NAME' => 'Malli nimi:',    
    
    'LBL_EXPORT_TO_MS_PROJECT' => 'Ekspordi MS Projekti',
    
    'LBL_POPUP_DATE_START' => 'Alguskuupäev:',
    'LBL_POPUP_DATE_FINISH' => 'Lõppkuupäev:',
    'LBL_POPUP_PERCENT_COMPLETE' => '% lõpetatud:',
    'LBL_POPUP_RESOURCE_NAME' => 'Ressurssi nimi:',    
    
    'LBL_MY_PROJECTS_DASHBOARD' => 'Minu projektide töölaud',
    'LBL_RESOURCE_REPORT' => 'Ressurssi aruanne',
    
    'LBL_PERSONAL_HOLIDAY' => '-- Personal Holiday --',
    'LBL_OPPORTUNITIES' => 'Müügivõimalused',
	'LBL_LAST_WEEK' => 'Eelmine',
	'LBL_NEXT_WEEK' => 'Järgmine',
	'LBL_PROJECTRESOURCES_SUBPANEL_TITLE' => 'Projekti ressurssid',
	'LBL_PROJECTTASK_SUBPANEL_TITLE' => 'Projekti ülesanne',
	'LBL_HOLIDAYS_SUBPANEL_TITLE' => 'Puhkused',
	'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
	'LBL_INSERTROWS' => 'Sisesta ridu' /*for 508 compliance fix*/,
	'LBL_PROJECT_INFORMATION' => 'Projekti ülevaade',

);
?>
