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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Podmienky',
  'LBL_MODULE_NAME_SINGULAR' => 'Podmienka',
  'LBL_MODULE_TITLE' => 'Spúštač pracovných procesov: Hlavná stránka',
  'LBL_MODULE_SECTION_TITLE' => 'Ak sú splnené tieto podmienky',
  'LBL_SEARCH_FORM_TITLE' => 'Hľadanie spúšťača pracovných procesov',
  'LBL_LIST_FORM_TITLE' => 'Zoznam spúštača',
  'LBL_NEW_FORM_TITLE' => 'Vytvoriť Spúštač',
  'LBL_LIST_NAME' => 'Popis:',
  'LBL_LIST_VALUE' => 'Hodnota:',
  'LBL_LIST_TYPE' => 'Typ:',
  'LBL_LIST_EVAL' => 'Vyhodnotenie:',
  'LBL_LIST_FIELD' => 'Pole:',
  'LBL_NAME' => 'Názov Spúšťača:',
  'LBL_TYPE' => 'Typ:',
  'LBL_EVAL' => 'Vyhodnotenie spúšťača:',
  'LBL_SHOW_PAST' => 'Zmena predošlej hodnoty:',
  'LBL_SHOW' => 'Zobraziť',

  'LNK_NEW_TRIGGER' => 'Vytvoriť spúšťač',
  'LNK_TRIGGER' => 'Spúšťače pracovných procesov',


  'LBL_LIST_STATEMEMT' => 'Spustí akciu založenú na nasledujúcich:',
  'LBL_FILTER_LIST_STATEMEMT' => 'Filtruje objekty založené na nasledujúcich',

  'NTC_REMOVE_TRIGGER' => 'Ste si istí, že chcete odstrániť tento spúšťač?',
  'NTC_REMOVE_TRIGGER_PRIMARY' => 'Removing a primary trigger will remove all triggers.',


    'LNK_NEW_WORKFLOW' => 'Vytvoriť pracovný proces',
  'LNK_WORKFLOW' => 'Objekty pracovných procesov',
  'LBL_ALERT_TEMPLATES' => 'Šablóny upozornení',


//General Labels
  'LBL_TRIGGER' => 'Kedy',
  'LBL_FIELD' => 'pole',
  'LBL_VALUE' => 'hodnota',
  'LBL_RECORD' => 'modulové',
//Specific Lables

	'LBL_COMPARE_SPECIFIC_TITLE' => 'Keď sa pole v cielenom moduli zmení na alebo z určitej hodnoty',
	'LBL_COMPARE_SPECIFIC_PART' => 'zmení na alebo z určitej hodnoty',
	'LBL_COMPARE_SPECIFIC_PART_TIME' => ' ',


	'LBL_COMPARE_CHANGE_TITLE' => 'Keď sa zmení pole na cielenom moduli',
	'LBL_COMPARE_CHANGE_PART' => 'zmení',


	'LBL_COMPARE_COUNT_TITLE' => 'Spustí pri určitom počte',

	'LBL_COMPARE_ANY_TIME_TITLE' => 'Pole sa nezmení na určitú dobu',
	'LBL_COMPARE_ANY_TIME_PART2' => 'nezmení na',
	'LBL_COMPARE_ANY_TIME_PART3' => 'určitú dobu',

	'LBL_FILTER_FIELD_TITLE' => 'Keď pole v cielenom moduli obsahuje určitú hodnotu',
	'LBL_FILTER_FIELD_PART1' => 'Filtrovať podľa',
	'LBL_FILTER_REL_FIELD_TITLE' => 'Keď sa cielený modul zmení a pole v súvisiacom moduli obsahuje určitú hodnotu',
	'LBL_FILTER_REL_FIELD_PART1' => 'Špecifikuj súvisiace',

	'LBL_TRIGGER_RECORD_CHANGE_TITLE' => 'Keď sa cielený modul zmení',
	//'LBL_TRIGGER_RECORD_CHANGE_LIST_TITLE' => 'When record changes',

  'LBL_FUTURE_TRIGGER' => 'Urči nový',



  'LBL_PAST_TRIGGER' => 'Urči starý',


 	////////////////Count Language
 	'LBL_COUNT_TRIGGER1' => 'Celkom',
 	'LBL_COUNT_TRIGGER1_2' => 'porovná s týmto množstvom',
 	'LBL_MODULE' => 'modul',
  	'LBL_COUNT_TRIGGER2' => 'filtruj podľa súvisiacich',
 	'LBL_COUNT_TRIGGER2_2' => 'iba',
 	'LBL_COUNT_TRIGGER3' => 'filtruj špecificky podľa',
 	'LBL_COUNT_TRIGGER4' => 'filtruj podľa sekundy',


 	'LBL_NEW_FILTER_BUTTON_KEY' => 'F',
 	'LBL_NEW_FILTER_BUTTON_TITLE' => 'Vytvoriť filter',
 	'LBL_NEW_FILTER_BUTTON_LABEL' => 'Vytvoriť filter',

  	'LBL_NEW_TRIGGER_BUTTON_KEY' => 'T',
 	'LBL_NEW_TRIGGER_BUTTON_TITLE' => 'Vytvoriť spúšťač',
 	'LBL_NEW_TRIGGER_BUTTON_LABEL' => 'Vytvoriť spúšťač',

 	'LBL_LIST_FRAME_SEC' => 'Filter:',
 	'LBL_LIST_FRAME_PRI' => 'Spúšťač:',


 	'LBL_TRIGGER_FILTER_TITLE' => 'Filtre Spúšťača',
 	'LBL_TRIGGER_FORM_TITLE' => 'Definuj podmienky pre vykonanie pracovných procesov',
 	'LBL_FILTER_FORM_TITLE' => 'Definuj podmienky pracovných procesov',

 	'LBL_SPECIFIC_FIELD'=>"je určité pole",
 	'LBL_APOSTROPHE_S'=>"je",
	'LBL_WHEN_VALUE1'=>"Keď hodnota poľa je",
	'LBL_WHEN_VALUE2'=>"Keď hodnota",

 	'LBL_SELECT_OPTION' => 'Prosím vyberte možnosť.',
	'LBL_SELECT_TARGET_FIELD' => 'Prosím vyberte cieľové pole.',
	'LBL_SELECT_TARGET_MOD' => 'Prosím vyberte cielený suvisiaci modul.',
	'LBL_SPECIFIC_FIELD_LNK' => 'určené pole',
	'LBL_MUST_SELECT_VALUE' => 'Musíte určiť hodnotu pre toto pole',
	
	'LBL_SELECT_AMOUNT' => 'Musíte určiť množstvo',
	'LBL_SELECT_1ST_FILTER' => 'Musíte určiť prvé platné pole filtra',
	'LBL_SELECT_2ND_FILTER' => 'Musíte určiť druhé platné pole filtra',

	'ERR_DELETE_RECORD' => 'A record number must be specified to delete the record.',
	'ERR_DELETE_EMPTY' => 'The record is already deleted or non-existent.',

);

$mod_process_order_strings = array(

	'compare_specific' => array('1','2','3'),
	'compare_change' => array('1','2','3'),
	'compare_count' => array('1','2','3')

);




?>
