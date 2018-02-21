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
  'ERR_FORECAST_AMOUNT' => 'Vyžaduje sa schválenie čiastky, ako číselný údaj.',
  'LBL_COMMIT_HEADER' => 'Záväzok prognózy',
  'LBL_COMMIT_MESSAGE' => 'Chcete schváliť tieto čiastky?',
  'LBL_COMMIT_NOTE' => 'Zadajte čiastky, ktoré by ste chceli schváliť pre vybraté časové obdobie:',
  'LBL_CREATED_BY' => 'Vytvoril:',
  'LBL_CURRENCY' => 'Mena',
  'LBL_CURRENCY_RATE' => 'Menový kurz',
  'LBL_DATE_COMMITTED' => 'Dátum záväzku',
  'LBL_DATE_ENTERED' => 'Dátum vloženia',
  'LBL_DATE_MODIFIED' => 'Dátum úpravy',
  'LBL_DELETED' => 'Vymazaný',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Príležitosti prognózy',
  'LBL_DV_FORECAST_PERIOD' => 'Časové obdobie prognózy',
  'LBL_DV_FORECAST_ROLLUP' => 'Prognóza kumulatívne',
  'LBL_DV_HEADER' => 'Prognózy: Tabuľka',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Čiastky posledného záväzku:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Dátum posledného záväzku',
  'LBL_DV_MY_FORECASTS' => 'Moje prognózy',
  'LBL_DV_MY_TEAM' => 'Moje tímové prognózy',
  'LBL_DV_TIMEPERIOD' => 'Časové obdobie',
  'LBL_DV_TIMEPERIODS' => 'Časové obdobia:',
  'LBL_DV_TIMPERIOD_DATES' => 'Časový rozsah:',
  'LBL_EDIT_LAYOUT' => 'Upraviť rozloženie',
  'LBL_EXPECTED_AMOUNT' => 'Predpokladaná čiastka',
  'LBL_EXPECTED_BEST_CASE' => 'Predpokladané najlepšie prípady',
  'LBL_EXPECTED_LIKELY_CASE' => 'Očakávané pravdepodobné prípady',
  'LBL_EXPECTED_OPPORTUNITIES' => 'Očakávané obchody',
  'LBL_EXPECTED_WORST_CASE' => 'Predpokladané najhoršie prípady',
  'LBL_FC_START_DATE' => 'Dátum začiatku',
  'LBL_FC_USER' => 'Plán pre:',
  'LBL_FDR_ADJ_AMOUNT' => 'Upravená čiastka',
  'LBL_FDR_COMMIT' => 'Schválená čiastka',
  'LBL_FDR_DATE_COMMIT' => 'Dátum záväzku',
  'LBL_FDR_OPPORTUNITIES' => 'Príležitosti v prognóze:',
  'LBL_FDR_USER_NAME' => 'Priamy report',
  'LBL_FDR_WEIGH' => 'Vážená čiastka príležitostí:',
  'LBL_FORECAST_HISTORY' => 'Prognózy: História',
  'LBL_FORECAST_HISTORY_TITLE' => 'Prognózy: História',
  'LBL_FORECAST_ID' => 'ID',
  'LBL_FORECAST_OPP_COMMIT' => 'Pravdepodobný prípad',
  'LBL_FORECAST_OPP_COUNT' => 'Príležitosti',
  'LBL_FORECAST_OPP_WEIGH' => 'Vážená čiastka',
  'LBL_FORECAST_TIME_ID' => 'ID časového obdobia',
  'LBL_FORECAST_TYPE' => 'Typ prognózy',
  'LBL_FORECAST_USER' => 'Užívateľ',
  'LBL_FS_CASCADE' => 'Kaskádovať?',
  'LBL_FS_CREATED_BY' => 'Vytvoril',
  'LBL_FS_DATE_ENTERED' => 'Dátum vloženia',
  'LBL_FS_DATE_MODIFIED' => 'Dátum úpravy',
  'LBL_FS_DELETED' => 'Vymazaný',
  'LBL_FS_END_DATE' => 'Dátum ukončenia',
  'LBL_FS_FORECAST_FOR' => 'Plán pre:',
  'LBL_FS_FORECAST_START_DATE' => 'Prognóza, dátum začatia',
  'LBL_FS_MODULE_NAME' => 'Plán prognózy',
  'LBL_FS_START_DATE' => 'Dátum začiatku',
  'LBL_FS_STATUS' => 'Stav',
  'LBL_FS_TIMEPERIOD' => 'Časové obdobie',
  'LBL_FS_TIMEPERIOD_ID' => 'ID časového obdobia',
  'LBL_FS_USER_ID' => 'ID užívateľa',
  'LBL_INCLUDE_EXPECTED' => 'Zahrnúť predpokladané',
  'LBL_LIST_FORM_TITLE' => 'Záväzné prognózy',
  'LBL_LV_COMMIT' => 'Schválená čiastka',
  'LBL_LV_COMMIT_DATE' => 'Dátum záväzku',
  'LBL_LV_OPPORTUNITIES' => 'Príležitosti',
  'LBL_LV_TIMPERIOD' => 'Časové obdobie',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Dátum ukončenia',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Dátum začiatku',
  'LBL_LV_TYPE' => 'Typ prognózy',
  'LBL_LV_WEIGH' => 'Vážená čiastka',
  'LBL_MODULE_NAME' => 'Prognózy',
  'LBL_MODULE_NAME_SINGULAR' => 'Prognóza',
  'LBL_MODULE_TITLE' => 'Prognózy',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Žiadne aktívne časové obdobie pre prognostiku.',
  'LBL_OW_ACCOUNTNAME' => 'Účet',
  'LBL_OW_DESCRIPTION' => 'Popis',
  'LBL_OW_MODULE_TITLE' => 'Tabuľka príležitostí',
  'LBL_OW_NEXT_STEP' => 'Ďalší krok',
  'LBL_OW_OPPORTUNITIES' => 'Príležitosť',
  'LBL_OW_PROBABILITY' => 'Pravdepodobnosť',
  'LBL_OW_REVENUE' => 'Čiastka',
  'LBL_OW_TYPE' => 'Typ',
  'LBL_OW_WEIGHTED' => 'Vážená čiastka',
  'LBL_QC_COMMIT_BUTTON' => 'Schváliť',
  'LBL_QC_COMMIT_VALUE' => 'Dosiahnutá suma:',
  'LBL_QC_DIRECT_FORECAST' => 'Moje priame prognózy:',
  'LBL_QC_HEADER_DELIM' => 'Na',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Suma posledného záväzku:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Dátum posledného záväzku:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Počet príležitostí:',
  'LBL_QC_ROLLUP_FORECAST' => 'Moja skupina prognóz:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Schválená kumulatívna čiastka',
  'LBL_QC_TIME_PERIOD' => 'Časové obdobie:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Moje prognózy',
  'LBL_QC_WEIGHT_VALUE' => 'Vážená čiastka:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Tabuľka',
  'LBL_REPORTS_TO_USER_NAME' => 'Hlásenia pre',
  'LBL_RESET_CHECK' => 'Všetky dáta pracovného listu pre zvolené časové obdobie a prihláseného užívateľa, budú odstránené. Pokračovať?',
  'LBL_RESET_WOKSHEET' => 'Zresetovať pracovný list',
  'LBL_SAVE_WOKSHEET' => 'Uložiť pracovný list',
  'LBL_SEARCH' => 'Výber',
  'LBL_SEARCH_LABEL' => 'Výber',
  'LBL_SVFS_CASCADE' => 'Kaskádne k reportom?',
  'LBL_SVFS_FORECASTDATE' => 'Naplánovať čas začatia',
  'LBL_SVFS_HEADER' => 'Plán prognózy:',
  'LBL_SVFS_STATUS' => 'Stav',
  'LBL_SVFS_USER' => 'Pre',
  'LBL_TIMEPERIOD_NAME' => 'Časové obdobie',
  'LBL_USER_NAME' => 'Užívateľské meno',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Zobrazenie histórie prognóz',
  'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
  'LNK_NEW_TIMEPERIOD' => 'Vytvoriť časovú periódu',
  'LNK_QUOTA' => 'Kvóty',
  'LNK_TIMEPERIOD_LIST' => 'Zobraziť časovú periódu',
  'LNK_UPD_FORECAST' => 'Prognostická tabuľka',
);

