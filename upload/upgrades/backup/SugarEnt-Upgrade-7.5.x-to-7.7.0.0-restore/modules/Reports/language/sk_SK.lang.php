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
  'CHART_COUNT_PATTERN' => '{count} {module} kde {group_label} je {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} je {numerical_value}{thousands} kde {group_label} je {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} z {currency_symbol}{numerical_value}{thousands} kde {group_label} je {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Prognóza na aktuálny štvťrok',
  'DEFAULT_REPORT_TITLE_10' => 'Nové prípady, podľa mesiaca',
  'DEFAULT_REPORT_TITLE_11' => '"Pipeline" - Zreťazenie podľa typu a tímu',
  'DEFAULT_REPORT_TITLE_12' => '"Pipeline" - Zreťazenie podľa užívateľa',
  'DEFAULT_REPORT_TITLE_13' => 'Úlohy, podľa tímu a užívateľa',
  'DEFAULT_REPORT_TITLE_14' => 'Volania, podľa tímu a užívateľa',
  'DEFAULT_REPORT_TITLE_15' => 'Schôdzky, podľa tímu a užívateľa',
  'DEFAULT_REPORT_TITLE_16' => 'Účty, podľa typu a priemyslu',
  'DEFAULT_REPORT_TITLE_17' => 'Uskutočnené obchody podľa zdroja príležitosti',
  'DEFAULT_REPORT_TITLE_18' => 'Príležitosti, podľa zdroja príležitosti',
  'DEFAULT_REPORT_TITLE_19' => 'Moje štatistiky používania (Dnes)',
  'DEFAULT_REPORT_TITLE_2' => 'Podrobná prognóza',
  'DEFAULT_REPORT_TITLE_20' => 'Moje štatistiky používania (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_21' => 'Moje štatistiky používania (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_22' => 'Moje využitie modulu (Dnes)',
  'DEFAULT_REPORT_TITLE_23' => 'Moje využitie modulu (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_24' => 'Moje využitie modulu (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_25' => 'Štatistiky využitia užívateľom (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_26' => 'Štatistiky využitia užívateľom (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_27' => 'Moduly využívané mojimi podriadenými  (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_28' => 'Pomalé dotazy',
  'DEFAULT_REPORT_TITLE_29' => 'Moje zmenené záznamy  (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_3' => 'Zoznam partnerských účtov',
  'DEFAULT_REPORT_TITLE_31' => 'Moje nedávno zmenené záznamy  (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_32' => 'Záznamy, zmenené mojimi podriadenými  (Posledných 30 dní)',
  'DEFAULT_REPORT_TITLE_4' => 'Zoznam zákazníckych účtov',
  'DEFAULT_REPORT_TITLE_41' => 'Aktívne uživateľské pripojenia  (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_42' => 'Súhrn uživateľských pripojení  (Posledných 7 dní)',
  'DEFAULT_REPORT_TITLE_43' => 'Vlastníci zákazníckeho účtu',
  'DEFAULT_REPORT_TITLE_44' => 'Môj nový zákaznícky účet',
  'DEFAULT_REPORT_TITLE_45' => 'Obchody, podľa etapy predaja',
  'DEFAULT_REPORT_TITLE_46' => 'Obchody, podľa typu',
  'DEFAULT_REPORT_TITLE_47' => 'Otvorené volania',
  'DEFAULT_REPORT_TITLE_48' => 'Otvorené schôdzky',
  'DEFAULT_REPORT_TITLE_49' => 'Otvorené úlohy',
  'DEFAULT_REPORT_TITLE_5' => 'Zoznam hovorov, podľa posledného volaného',
  'DEFAULT_REPORT_TITLE_50' => 'Uskutočnené obchody, podľa účtu',
  'DEFAULT_REPORT_TITLE_51' => 'Uskutočnené obchody, podľa užívateľa',
  'DEFAULT_REPORT_TITLE_52' => 'Všetky otvorené obchody',
  'DEFAULT_REPORT_TITLE_53' => 'Všetky zatvorené obchody',
  'DEFAULT_REPORT_TITLE_56' => 'Príležitosti produkt členené pre minulé, súčasné, nasledujúce časové obdobie podľa mesiaca',
  'DEFAULT_REPORT_TITLE_57' => 'Príležitosti fázy predaja pre minulé, súčasné, nasledujúce časové obdobie podľa mesiaca',
  'DEFAULT_REPORT_TITLE_58' => 'Minulá/súčasná/budúca štvrťročná prognóza',
  'DEFAULT_REPORT_TITLE_59' => 'Príležitosti podľa fázy predaja pre správy v súčasnom období',
  'DEFAULT_REPORT_TITLE_6' => 'Obchody, podľa zdroja príležitosti',
  'DEFAULT_REPORT_TITLE_7' => 'Otvorené prípady, podľa užívateľa a stavu',
  'DEFAULT_REPORT_TITLE_8' => 'Otvorené prípady, podľa mesiaca a užívateľa',
  'DEFAULT_REPORT_TITLE_9' => 'Otvorené prípady podľa priority a užívateľa',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Hodinový',
    21600 => 'Každých 6 hodín',
    43200 => 'Každých 23 hodín',
    86400 => 'Denne',
    604800 => 'Týždenne',
    1209600 => 'Každé 2 týždne',
    2419200 => 'Každé 4 týždne',
  ),
  'ERR_REPORT_INVALID' => 'Definícia správy "{0}" obsahuje neplatné pole: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Správa je neplatná',
  'ERR_SELECT_COLUMN' => 'Prosím, najpr vyberte zobrazovaný stĺpev',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Hlásenie o',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filter',
  'LBL_3_CHOOSE' => '3. Zvoľte zobrazenie stĺpcov',
  'LBL_3_GROUP' => '3. Skupina',
  'LBL_4_CHOOSE' => '4 Zvoliť zobrazované stĺpce',
  'LBL_5_CHART_OPTIONS' => '5 Možnosti grafu',
  'LBL_ACCOUNT' => 'Účet',
  'LBL_ACCOUNTS' => 'Účty',
  'LBL_ACCOUNT_REPORTS' => 'Hlásenia o účtoch',
  'LBL_ACTIVITIES_REPORTS' => 'Hlásenia o aktivitách',
  'LBL_ADDED_FAVORITES' => 'report(y) pridané do Mojich obľúbených reportov.',
  'LBL_ADD_BTN_HELP' => 'Kliknite na pridanie nového filtra skupiny. Použite skupiny pre aplikáciu AND/OR (a/alebo) logiky na sadu fitltrov',
  'LBL_ADD_COLUMN' => 'Pridať stĺpec',
  'LBL_ADD_FILTER_TO' => 'Pridať filter k',
  'LBL_ADD_GROUP' => 'Pridať skupinu fitrov',
  'LBL_ADD_NEW_FILTER' => 'Pridať nový filter',
  'LBL_ADD_RELATE' => 'Pridať súvisiace',
  'LBL_ADVANCED_FILTERS' => 'Rozšírené filtre',
  'LBL_AFTER' => 'Za',
  'LBL_ALERT_CANT_ADD' => 'Nemôžete pridať súvisiaci modul, pokiaľ neoznačíte tabuľky, týkajúce sa .\\nSelect modulu v predošlom rozbaľovacom zozname "Pridať súvisiace"',
  'LBL_ALL' => 'Najmenej',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Všetky zverejnéné hlásenia',
  'LBL_ALL_REPORTS' => 'Zobraziť hlásenia',
  'LBL_ALT_INFORMATION' => 'Informácia',
  'LBL_ALT_SHOW' => 'Zobraziť',
  'LBL_AND' => 'a',
  'LBL_ANY' => 'Nejaký',
  'LBL_ANY_ONE_OF' => 'Niektorý z',
  'LBL_ASCENDING' => 'Vzostupne',
  'LBL_ASSIGNED_TO_NAME' => 'Pridelený k:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Vyberte zobrazenie aspoň jedného stĺpca.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Apoň jeden súhrnný stĺpec.',
  'LBL_AVAILABLE_FIELDS' => 'Dostupné polia',
  'LBL_AVG' => 'Aritmetický priemer',
  'LBL_BASIC_FILTERS' => 'Základné filtre',
  'LBL_BEFORE' => 'Pred',
  'LBL_BUG_REPORTS' => 'Hlásenia o chybách',
  'LBL_BY_DAY' => 'Podľa dňa',
  'LBL_BY_FISCAL_QUARTER' => 'Podľa fiškálneho štvrťroka',
  'LBL_BY_FISCAL_YEAR' => 'Podľa fiškálneho roka',
  'LBL_BY_MONTH' => 'Podľa mesiaca',
  'LBL_BY_QUARTER' => 'Podľa štvrťroka',
  'LBL_BY_YEAR' => 'Podľa roka',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Zoznam volání od posledného kontaktu',
  'LBL_CALL_REPORTS' => 'Hlásenia o volaniach',
  'LBL_CANCEL' => 'Zrušiť',
  'LBL_CANNOT_BE_EMPTY' => 'nemôže byť prázdne.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Graf nemôže byť zobrazený vzhľadom k jeho konfigurácii.',
  'LBL_CASE_REPORTS' => 'Hlásenia o udalostiach',
  'LBL_CHANGE' => 'Zmena',
  'LBL_CHART_DATA_HELP' => 'Výber súhrnu, ktorý má byť zobrazený v grafe.',
  'LBL_CHART_DESCRIPTION' => 'Popis',
  'LBL_CHART_OPTIONS' => 'Možnosti grafu',
  'LBL_CHART_TYPE' => 'Typ grafu',
  'LBL_CHOOSE_COLUMNS' => 'Vyberte stĺpec k zobrazeniu',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Výber zobrazenia stĺpcov',
  'LBL_CHOOSE_SUMMARIES' => 'Vyberte súhrn k zobrazeniu',
  'LBL_CLEAR' => 'Zmazať',
  'LBL_COLUMN_NAME' => 'Názov stĺpca',
  'LBL_COMBO_TYPE_AHEAD' => 'Hľadanie poľa',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS' => 'Kontakty',
  'LBL_CONTACT_REPORTS' => 'Hlásenia o kontaktoch',
  'LBL_CONTAINS' => 'Obsahuje',
  'LBL_CONTENT' => 'Obsah',
  'LBL_CONTRACT_REPORTS' => 'Výkazy kontraktov',
  'LBL_COUNT' => 'Počet',
  'LBL_CREATE_CUSTOM_REPORT' => 'Sprievodca hlásením',
  'LBL_CREATE_REPORT' => 'Vytvoriť výkaz',
  'LBL_CSV_TIMESTAMP' => 'Y_m_d_H_i_s',
  'LBL_CURRENT_FISCAL_QUARTER' => 'Súčasný fiškálny štvrťrok',
  'LBL_CURRENT_FISCAL_YEAR' => 'Súčasný fiškálny rok',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Odsúhlasené obchody aktuálneho štvrťroku',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Prognóza na aktuálny štvťrok',
  'LBL_CURRENT_USER' => 'Aktuálny užívateľ',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Zoznam zákazníckych účtov',
  'LBL_DATE' => 'Dátum zahájenia',
  'LBL_DATE_BASED_FILTERS' => '<i>Filtre údajov sa vzťahujú k časovej zóne výkazu <b>Priradeného </b>užívateľovi</i>',
  'LBL_DAY' => 'Deň',
  'LBL_DEFINE_FILTERS' => 'Definovať filtre',
  'LBL_DELETE' => 'Vymazať',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Nasledoné pole v tomto reporte už ďalej nie je platné:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Prosím, upravte tento report a skontrolujte či ostatné parametre sú stále zodpovedajúce.',
  'LBL_DELETE_ERROR' => 'Len vlastníci hlásení a Administrátori-Správcovia, môžu vymazať hlásenia',
  'LBL_DEL_THIS' => 'Odstrániť',
  'LBL_DESCENDING' => 'Zostupne',
  'LBL_DETAILED_FORECAST' => 'Podrobná prognóza',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Kroky k výberu zobrazenia stĺpcov:</b><br/><br/>1) Kliknite na modul v table <b>Prepojené moduly</b>, ktoré by ste chceli použiť k zobrazeniu údajov vo vašom reporte. Ako predvolený, je nastavený primárny modul (vrcholový uzol v stromovom zobrazení), ktorý ste si zvolili v kroku &#39;Výber modulu&#39;.<br/><br/>Môžete vybrať polia z prepojeného modulu (následnícky uzol v stromovom zobrazení)kliknutím na modul. Moduly, naviazané na moduly, prepojené s primárnym modulom, tiež môžu byť vybraté. Modul, ktorý ste vybrali, určuje ktoré reportovateľné polia sa objavia v table <b>Dostupné polia</b>.<br/><br/>	2) Kliknite na pole v table <b>Dostupné polia</b>, k zobrazeniu údajov poľa v záznamoch vo vašom reporte. Tiež možno vyhľadávať pole zadaním do textového políčka v table.<br/><br/>Po výbere ľubovoľného počtu polí z modulu, vybratého v table  <b>Related Modules</b> môžete zvoliť iný modul, z ktorého môžete vybrať rozširujúce polia. Môžete vybrať ľubovoľný počet polí, ale report je generovaný omnoho pomalšie a je neprehľadnejší, keď pridáte viac polí, než je potrebné.<br/><br/>Môžete zmeniť poradie polí ich pretiahnutím na žiadanú pozíciu. Zmenou poradia polí sa zmení aj poradie, v ktorom budú stĺpce zobrazené vo výsledku.',
  'LBL_DISPLAY_COLUMNS' => 'Zobraziť stĺpce',
  'LBL_DISPLAY_SUMMARIES' => 'Zvoľte zobrazenie súhrnov',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Kroky k výberu zobrazenia súhrnov:</b><br/><br/>1) Kliknite na modul v table <b>Prepojené moduly</b>, ktorý by ste chceli použiť na zoskupenie záznamov vo vašom reporte. Ako predvolený, je nastavený primárny modul (vrcholový uzol v stromovom zobrazení).<br/><br/> Môžete <br />	Môžete vybrať prepojený modul (následnícky uzol v stromovom zobrazení) kliknutím na modul. Rozbaľte uzol k zobrazeniu rozširujúcich modulov, naviazaných na prepojený modul. Vybratý modul určuje ktoré reportovateľné polia sa objavia v table <b>Dostupné polia</b>.<br/><br/>	2) Kliknite na pole v table<b>Dostupné polia</b>, k výberu súhrnov pre váš report. Tiež možno vyhľadávať pole zadaním do textového políčka v table..<br/><br/> Po vybratí ľubovoľného počtu polí z modulu, vybratého v table <b>Prepojené moduly</b> môžete zvoliť iný modul, z ktorého môžete vybrať rozširujúce polia pre súhrny vo vašom reporte.<br/><br/>Pre maticový report môžete vybrať viac ako jedno pole, k zobrazeniu viacerých hodnôt, v rámci jednej bunky vo vašom reporte.',
  'LBL_DOES_NOT_CONTAIN' => 'Neobsahuje',
  'LBL_DOES_NOT_EQUAL' => 'Nezhoduje sa',
  'LBL_DOWN' => 'Dole',
  'LBL_DO_ROUND' => 'Zaokrúhlenie čísel nad 100000',
  'LBL_DO_ROUND_HELP' => 'Čísla nad 100000 budú v grafe zaokrúhlené.<br>Napríklad: 350000 bude zobrazené ako 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Ako matica',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Ako pôvodný typ',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Ako riadky a stĺpce',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Ako súhrn s podrobnosťami',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Ako súhrn',
  'LBL_EDIT' => 'Upraviť',
  'LBL_EDITLAYOUT' => 'Upraviť rozloženie',
  'LBL_EMAIL_REPORTS' => 'Hlásenia o Emailoch',
  'LBL_ENDS_WITH' => 'Končí',
  'LBL_END_DATE' => 'Dátum ukončenia',
  'LBL_EQUALS' => 'Zhody',
  'LBL_EXACT' => 'Presne',
  'LBL_EXPORT' => 'Export',
  'LBL_FAILURE_REPORT' => 'ZLYHANIE: Hlásenie',
  'LBL_FAVORITE' => 'Obľúbené',
  'LBL_FAVORITES_TITLE' => 'Moje obľúbené reporty',
  'LBL_FAVORITE_REPORTS' => 'Moje obľúbené reporty',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Moje obľúbené reporty',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Všetky reportovateľné polia z vybraného modulu v  <B>Prepojených moduloch</B> sa objavia tu. Vyberte modul.',
  'LBL_FIELD_NAME' => 'Názov poľa',
  'LBL_FILTER' => 'Filter',
  'LBL_FILTERS' => 'Filtre',
  'LBL_FILTERS_END' => 'nasledovných filtrov',
  'LBL_FILTERS_HELP_DESC' => '<b>Kroky k definícii filtrov:</b><br/><br/>1) Kliklite na modul v <b>Prepojené moduly</b>, ktoré by ste chceli použiť k definícii filtrov. Ako východzí bol vybratý primárny modul (vrchol v stromovom zobrazení). <br/><br/><br />Môžete vybrať prepojený modul (následnícky uzol v stromovom zobrazení), kliknutím na modul.<br />Rozbaľte uzol k zobrazeniu rozširujúcich modulov, prepojených v súvisiacom module. Ten modul, ktorý ste vybrali určuje ktoré reportovateľné polia sa objavia v <b>Dostupné polia</b>.<br/><br/><br /><br />	2) Kliknite na pole v<b>Dostupné polia</b>, k jeho pridaniu do filtrov. Môžete tiež vyhľadať pole zadaním do textového políčka v table.<br/><br/><br />Po výbere ľubovoľného počtu polí z modulu, vybratého v table <b>Prepojené moduly</b>, môžete vybrať iný modul, z ktorého môžete vybrať ľubovoľný počet polí, k použitiu ako filtre.<br/><br/><br />	3) Vyberte <b>AND - A</b> alebo <b>OR - ALEBO</b> k určeniu, či všetky filtre alebo ľubovoľný filter jednotlivo, budú použité k nájdeniu výsledkov pre tento report.<br/><br/><br />	4) [Nepovinný] Kliknite na<b>Pridať filter skupiny</b> k vytváraniu skupiny filtov. Môžete mať ľubovoľný počet skupín filtrov a ľubovoľný počet filtrov v skupinách a ľubovoľný počet filtrov v skupine, k vytváraniu vnorených filtrov.<br/><br/><br />	5) [Nepovinný] Vyberte možnosti Run-time, pre filter, k umožneniu uživateľom použitie filtra k ďalšiemu prispôsobeniu výsledkov reportu, počas prezerania reportu.',
  'LBL_FILTER_AND' => 'A',
  'LBL_FILTER_CONDITIONS' => 'Vyberte operátor:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Komu',
  'LBL_FILTER_DATE_RANGE_START' => 'Od',
  'LBL_FILTER_OR' => 'ALEBO',
  'LBL_FISCAL_QUARTER' => 'Fiškálny štvrťrok',
  'LBL_FISCAL_YEAR' => 'Fiškálny rok',
  'LBL_FORECAST_REPORTS' => 'Reporty predpovedí',
  'LBL_FUNNEL' => 'Lievik',
  'LBL_GRAND_TOTAL' => 'Celkový súčet',
  'LBL_GREATER_THAN' => 'Váčší ako',
  'LBL_GREATER_THAN_EQUAL' => 'Viac ako rovná',
  'LBL_GROUP_BY' => 'Zoskupiť podľa',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Kroky k definícii Skupina podľa:</b><br></br>1) Kliknite na modul v table <b>Prepojené moduly</b>, ktorý by ste chceli použiť na zoskupenie záznamov vo vašom reporte. Ako predvolený, je nastavený primárny modul (vrcholový uzol v stromovom zobrazení) <br/><br/>Môžete vybrať prepojený modul (následnícky uzol v stromovom zobrazení) kliknutím na modul. Rozbaľte uzol k zobrazeniu rozširujúcich modulov, naviazaných na prepojený modul. Vybratý modul určuje ktoré reportovateľné polia sa objavia v table <b>Dostupné polia</b>.<br/><br/><br />	2) Kliknite na pole <b>Dostupné polia</b>, k zoskupeniu záznamov podľa poľa vo vašom reporte. Tiež možno vyhľadať pole zadaním do textového políčka v table.<br/><br/><br />Po výbere ľubovoľného počtu polí z modulu, vybratého v table <b>Related Modules</b>, môžete vybrať iný modul, z ktorého môžete vybrať ľubovoľný počet polí k zoskupeniu záznamov. Report sa však stáva horšie čitateľný, keď zoskupujete podľa viacerých polí.<br/><br/><br />Môžete zmeniť poradie polí ich pretiahnutím na želanú pozíciu. Zmena poradia ovplyvňuje spôsob zobrazenia výsledkov.<br/><br/> Pre maticový report môžete použiť maximálne tri polia k zoskupeniu záznamov.',
  'LBL_GROUP_BY_REQUIRED' => 'K vykresleniu grafu je potrebné aspoň jedno Zoskupenie podľa a jeden súhrnný stĺpec.<br>',
  'LBL_HELLO' => 'Hello',
  'LBL_HELP' => 'Pomoc',
  'LBL_HIDE_COLUMNS' => 'Skryť stĺpce',
  'LBL_HIDE_SUMMARIES' => 'Skryť súhrny',
  'LBL_HORIZ_BAR' => 'Horizontálna lišta',
  'LBL_IS' => 'je',
  'LBL_IS_BETWEEN' => 'Je medzi',
  'LBL_IS_EMPTY' => 'Je prázdny',
  'LBL_IS_NOT' => 'Nie je',
  'LBL_IS_NOT_EMPTY' => 'Nie je prázdny',
  'LBL_IS_NOT_ONE_OF' => 'Nie je jeden z',
  'LBL_IS_PUBLISHED' => 'Je zverejnený',
  'LBL_LABEL' => 'Etiketa',
  'LBL_LAST_30_DAYS' => 'Posledných 30 dní',
  'LBL_LAST_7_DAYS' => 'Posledných 7 dní',
  'LBL_LAST_MONTH' => 'Posledný mesiac',
  'LBL_LAST_QUARTER' => 'Posledný štvrťrok',
  'LBL_LAST_WEEK' => 'Posledný týždeň',
  'LBL_LAST_YEAR' => 'Posledný rok',
  'LBL_LEAD' => 'Príležitosť',
  'LBL_LEADS' => 'Príležitosti',
  'LBL_LEAD_REPORTS' => 'Reporty príležitostí',
  'LBL_LEFT' => 'Vľavo',
  'LBL_LESS_THAN' => 'Menej než',
  'LBL_LESS_THAN_EQUAL' => 'Menej ako rovná',
  'LBL_LINE' => 'Čiara',
  'LBL_LIST_FORM_TITLE' => 'Hlásenia',
  'LBL_LIST_PUBLISHED' => 'Uverejnená',
  'LBL_MATRIX_LAYOUT' => 'Možnosti rozvrhnutia:',
  'LBL_MATRIX_REPORT' => 'Maticový report',
  'LBL_MATRIX_REPORT_DESC' => 'Vytvoriť súhrnné hlásenie, ktoré ukáže výsledky v tabuľke a zoskupí podľa, max. troch polí.',
  'LBL_MAX' => 'Maximum',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Maticový report nemôže mať viac ako 3 klazule zoskupovania',
  'LBL_MEETING_REPORTS' => 'Hlásenia o rokovaniach',
  'LBL_MIN' => 'Minimum',
  'LBL_MINIMUM_2_GROUP_BY' => 'Maticový report musí mať najmenej 2 klazule zoskupovania',
  'LBL_MISSING_FIELDS' => 'Chýbajúce polia',
  'LBL_MISSING_INPUT_VALUE' => 'chýba vstupná hodnota.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'chýba druhá vstupná hodnota.',
  'LBL_MODULE' => 'Modul',
  'LBL_MODULE_CHANGE_PROMPT' => 'Zmena vybraného modulu povedie k strate filtrov, zobrazení stĺpcov, atď. Skutočne si prajete pokračovať?',
  'LBL_MODULE_NAME' => 'Hlásenia',
  'LBL_MODULE_NAME_SAVED' => 'Názov modulu',
  'LBL_MODULE_NAME_SINGULAR' => 'Hlásenie',
  'LBL_MODULE_TITLE' => 'Reporty: Domov',
  'LBL_MODULE_VIEWER_TITLE' => 'Prehliadač reportov: Domov',
  'LBL_MONTH' => 'Mesiac',
  'LBL_MORE' => 'Viac',
  'LBL_MY_ACCOUNT_REPORTS' => 'Výkazy Mojich účtov',
  'LBL_MY_BUG_REPORTS' => 'Výkazy Mojich chýb',
  'LBL_MY_CALL_REPORTS' => 'Výkazy Mojich volaní',
  'LBL_MY_CASE_REPORTS' => 'Výkazy Mojich udalostí',
  'LBL_MY_CONTACT_REPORTS' => 'Výkazy Mojich kontaktov',
  'LBL_MY_CONTRACT_REPORTS' => 'Výkazy Moje kontrakty',
  'LBL_MY_EMAIL_REPORTS' => 'Výkazy Mojich Emailov',
  'LBL_MY_FORECAST_REPORTS' => 'Výkazy Mojich prognóz',
  'LBL_MY_LEAD_REPORTS' => 'Reporty mojich príležitostí',
  'LBL_MY_MEETING_REPORTS' => 'Výkazy Mojich rokovaní',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Výkazy Mojich príležitostí',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Výkazy Mojich projektových úloh',
  'LBL_MY_PROSPECT_REPORTS' => 'Výkazy Mojich cieľov',
  'LBL_MY_QUOTE_REPORTS' => 'Výkazy Mojich Kvót',
  'LBL_MY_REPORTS' => 'Moje hlásenia',
  'LBL_MY_SAVED_REPORTS' => 'Moje uložené hlásenie',
  'LBL_MY_TASK_REPORTS' => 'Výkazy Mojich úloh',
  'LBL_MY_TEAMS_REPORTS' => 'Moje tímové hlásenie',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Výkazy Mojich tímových účtov',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Výkazy Mojich tímových chýb',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Výkazy Mojich tímových volaní',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Výkazy Mojich tímových udalostí',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Výkazy Mojich tímových kontaktov',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Výkazy Mojich tímových kontraktov',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Výkazy Mojich tímových Emailov',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Výkazy Mojich tímových prognóz',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Reporty príležitostí môjho tímu',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Výkazy Mojich tímových rokovaní',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Výkazy Mojich tímových príležitostí',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Výkazy Mojich tímových Projektových úloh',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Výkazy Mojich tímových cieľov',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Výkazy Mojich tímových Kvót',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Výkazy Mojich tímových úloh',
  'LBL_NEXT' => 'Ďalší >',
  'LBL_NEXT_30_DAYS' => 'Ďalších 30 dní',
  'LBL_NEXT_7_DAYS' => 'Ďalších 7 dní',
  'LBL_NEXT_FISCAL_QUARTER' => 'Nasledujúci fiškálny štvrťrok',
  'LBL_NEXT_FISCAL_YEAR' => 'Nasledujúci fiškálny rok',
  'LBL_NEXT_MONTH' => 'Ďalší mesiac',
  'LBL_NEXT_QUARTER' => 'Nasledujúci štvrťrok',
  'LBL_NEXT_RUN' => 'Ďalší Email',
  'LBL_NEXT_WEEK' => 'Ďalší týždeň',
  'LBL_NEXT_YEAR' => 'Ďalší rok',
  'LBL_NONE' => '--žiadny--',
  'LBL_NONE_STRING' => 'Nič',
  'LBL_NOTHING_WAS_SELECTED' => 'nebolo nič vybraté.',
  'LBL_NOT_ON' => 'Nie na',
  'LBL_NO_ACCESS' => 'Nemáte povolený prístup, z dôvodu obmedzenia oprávnení.',
  'LBL_NO_CHART' => 'Žiadny graf',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Graf nemožno vytvoriť z dôvodu nedostatatočných údajov',
  'LBL_NO_FILTERS' => 'nemá žiadne filtre',
  'LBL_NO_IMAGE' => 'Žiadny obrázok',
  'LBL_NO_REPORTS' => 'Bez výsledku.',
  'LBL_OF' => 'z',
  'LBL_ON' => 'Na',
  'LBL_ONE_OF' => 'Je jeden z',
  'LBL_OPPORTUNITIES' => 'Príležitosti',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Obchody podľa zdrojov príležitostí',
  'LBL_OPPORTUNITY' => 'Príležitosť',
  'LBL_OPPORTUNITY_REPORTS' => 'Hlásenia o príležitostiach',
  'LBL_OPTIONAL_HELP' => 'Vyberte políčka k zobrazeniu záznamov primárneho modulu, aj keď záznamy súvisiaceho modulu neexistujú. Keď políčko nie je vybratézáznamy primárneho modulu budú zobrazené len ak majú jeden alebo viaceré prepojené záznamy modulu.',
  'LBL_OPTIONAL_MODULES' => 'Voliteľné moduly',
  'LBL_ORDER_BY' => 'Triediť podľa',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Súvisiace voliteľné moduly',
  'LBL_OWNER' => 'Pridelený k',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Zoznam partnerských účtov',
  'LBL_PDF_TIMESTAMP' => 'Y_m_d_H_i',
  'LBL_PIE' => 'Koláč',
  'LBL_PREVIEW_REPORT' => 'Náhľad',
  'LBL_PREVIOUS' => '< Späť',
  'LBL_PREVIOUS_FISCAL_QUARTER' => 'Predchádzajúci fiškálny štvrťrok',
  'LBL_PREVIOUS_FISCAL_YEAR' => 'Predchádzajúci fiškálny rok',
  'LBL_PROJECT_TASK_REPORTS' => 'Výkazy projektových úloh',
  'LBL_PROSPECT_REPORTS' => 'Výkazy cieľov',
  'LBL_PUBLISH' => 'zverejniť',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Zverejnené hlásenia účtov',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Výkazy verejných chýb',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Výkazy verejných volaní',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Publikované reporty prípadov',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Výkazy verejných kontaktov',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Reporty zverejnených kontraktov',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Výkazy verejných Emailov',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Výkazy verejných prognóz',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Výkazy verejných Lead',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Výkazy verejných rokovaní',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Výkazy verejných príležitostí',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Výkazy Publikovaných projektových úloh',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Výkazy verejných cieľov',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'Publikované správy kvót',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Výkazy verejných kvót',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Výkazy verejných úloh',
  'LBL_QUARTER' => 'Štvrťrok',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Otázka',
  'LBL_QUOTE_REPORTS' => 'Hlásenia o kvótach',
  'LBL_RELATED' => 'Súvisiaci:',
  'LBL_RELATED_MODULES' => 'Prepojené moduly',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Primárny modul a všetky moduly, súvisiace s primárnym modulom, sa objavia tu. Vyberte modul.',
  'LBL_RELATED_TABLE_BLANK' => 'Prosím, vyberte modul k spojeniu',
  'LBL_REMOVE' => 'Odstrániť',
  'LBL_REMOVED_FAVORITES' => 'report(y) odstránené z Mojich obľúbených reportov',
  'LBL_REMOVE_BTN_HELP' => 'Kliknite na odstránenie filtra skupiny',
  'LBL_REMOVE_GROUP' => 'Odstrániť skupinu filtrov',
  'LBL_REPORTS' => 'Hlásenia',
  'LBL_REPORTS_TO' => 'Reporty pre',
  'LBL_REPORT_ATT_MODULES' => 'Moduly',
  'LBL_REPORT_ATT_NAME' => 'Názov',
  'LBL_REPORT_COLLAPSE_ALL' => 'Zbaliť všetko',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Tento report obsahuje údaje v nasledovnom poradí stĺpcov:',
  'LBL_REPORT_DETAILS' => 'Podrobnosti reportu',
  'LBL_REPORT_EXPAND_ALL' => 'Rozbaliť všetky',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Od posledného spustenia boli filtre hlásení upravené.',
  'LBL_REPORT_GRAND_TOTAL' => 'Celkový súčet',
  'LBL_REPORT_GROUP_BY' => 'Zoskupiť podľa',
  'LBL_REPORT_HIDE_CHART' => 'Skryť graf',
  'LBL_REPORT_HIDE_DETAILS' => 'Skryť detaily',
  'LBL_REPORT_LAST_RUN_DATE' => 'Sprístupnené na',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Od posledného spustenia boli zostavy hlásení upravené.',
  'LBL_REPORT_MODULES' => 'Moduly hlásení',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Prehliadač reportov',
  'LBL_REPORT_NAME' => 'Názov hlásenia',
  'LBL_REPORT_RESET_FILTER' => 'Reset',
  'LBL_REPORT_RESULTS' => 'Výsledky',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Kliknúť na Spustiť zostavu k zobrazeniu výsledkov.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Aplikovať',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Plán',
  'LBL_REPORT_SHOW_CHART' => 'Zobraziť graf',
  'LBL_REPORT_SHOW_DETAILS' => 'Zobraziť detaily',
  'LBL_REPORT_TYPE' => 'Typ reportu',
  'LBL_REPORT__ATT_TYPE' => 'Typ',
  'LBL_RIGHT' => 'Vpravo',
  'LBL_ROLLOVER' => 'Rolovacia lišta pre detaily',
  'LBL_ROLLOVER_SQUARE' => 'K zobrazeniu podrobností prejdite nad štvorec',
  'LBL_ROLLOVER_WEDGE' => 'K zobrazeniu podrobností prejdite nad trojuholník',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Riadky a stĺpce hlásenia',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Vytvorenie prehľadného hlásenia, ktorá obsahuje hodnoty vybraných zobrazení polí pre záznamy, zodpovedajúce zadaným kritériám.',
  'LBL_RUNTIME_FILTERS' => 'Run-time filtre',
  'LBL_RUNTIME_HELP' => 'Vyberte toto políčko pre umožnenie uživateľom zmeniť hodnoty filtra pred spustením reportu.',
  'LBL_RUN_BUTTON_TITLE' => 'Spustiť report',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Spustiť report',
  'LBL_RUN_TIME_LABEL' => 'Run-time',
  'LBL_SAVED_SEARCH' => 'Uložené vyhľadávania a rozloženia',
  'LBL_SAVE_AS' => 'Uložiť ako',
  'LBL_SAVE_RUN' => 'Uložiť a spustiť',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'a uložena pod menom "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Ak chcete zmeniť nastavenia reportu, prihláste sa do aplikácie Sugar a kliknite na záložku "Reporty"',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Toto je vygenerovaný report poslaný vám z aplikácie Sugar. Táto správa bola vytvorená na',
  'LBL_SCHEDULE_ACTIVE' => 'Aktívny',
  'LBL_SCHEDULE_EMAIL' => 'Naplánovať reporty',
  'LBL_SCHEDULE_REPORT' => 'Výkaz plánu',
  'LBL_SCHEDULE_TYPE' => 'Typ plánu',
  'LBL_SEARCH_FORM_TITLE' => 'Zoznam reportov',
  'LBL_SELECT' => 'Výber',
  'LBL_SELECT_GROUP_BY' => 'Definovať skupinu, podľa',
  'LBL_SELECT_MODULE' => 'Vybrať modul',
  'LBL_SELECT_MODULE_BUTTON' => 'Kliknutím na ikonu k výberu modulu',
  'LBL_SELECT_RECORD' => 'Výber záznamu',
  'LBL_SELECT_REPORT_TYPE' => 'Kliknite na ikonu, k výberu typu reportu.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Výber typu reportu',
  'LBL_SHOW' => '<i>Zobraziť</i>',
  'LBL_SHOW_DETAILS' => 'Zobraziť detaily',
  'LBL_SHOW_QUERY' => 'Ukáž otázku',
  'LBL_SORT' => 'Triedenie',
  'LBL_STARTS_WITH' => 'Začína sa',
  'LBL_START_DATE' => 'Dátum začiatku:',
  'LBL_STATUS' => 'Stav',
  'LBL_SUBJECT' => 'Predmet',
  'LBL_SUBMIT_QUERY' => 'Odoslať otázku',
  'LBL_SUCCESS_REPORT' => 'ÚSPECH: Hlásenie',
  'LBL_SUM' => 'Súčet',
  'LBL_SUMMARY_COLUMNS' => 'Súhrn stĺpcov',
  'LBL_SUMMATION_REPORT' => 'Súhrnné hlásenie',
  'LBL_SUMMATION_REPORT_DESC' => 'Vytvorenie prehľadného hlásenia, poskytujúceho vypočítané údaje, pre záznamy, zodpovedajúce špecifikovaným kritériám. Údaje môžu byť tieť reprezentované v grafe.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Súhrnné hlásenie s detailami.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Vytvoriť súhrnné hlásenie, ktoré ukáže rozšírené údaje, zodpovedajúce záznamom vo výsledkoch.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Súhrn s podrobnosťami',
  'LBL_TABLE_CHANGED' => 'Zoznam modulov bol zmenený, prosím poriadne skontrolujte kritériá vložené v záložke Skupina.',
  'LBL_TASK_REPORTS' => 'Hlásenia o úlohách',
  'LBL_TEAM' => 'Tímy',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Neexistujú žiadne reporty tohoto typu',
  'LBL_THIS_MONTH' => 'Tento mesiac',
  'LBL_THIS_QUARTER' => 'Tento štvrťrok',
  'LBL_THIS_WEEK' => 'Tento týždeň',
  'LBL_THIS_YEAR' => 'Tento rok',
  'LBL_TIME_INTERVAL' => 'Časový interval',
  'LBL_TITLE' => 'Názov',
  'LBL_TODAY' => 'Dnes',
  'LBL_TOMORROW' => 'Zajtra',
  'LBL_TOTAL' => 'Celkom',
  'LBL_TOTAL_IS' => 'Celkom je',
  'LBL_TO_PDF' => 'Uložiť ako PDF',
  'LBL_TYPE' => 'Typ:',
  'LBL_UNTITLED' => 'neoznačený',
  'LBL_UN_PUBLISH' => 'nezverejniť',
  'LBL_UP' => 'Hore',
  'LBL_UPDATE_SCHEDULE' => 'Aktualizácia plánu',
  'LBL_USER_EMPTY_HELP' => 'Pre potrebu zobrazenia záznamov nie je priradený žiaden užívateľ, zaškrtnite políčko &#39;Voliteľné previazania modulov&#39;, v kroku &#39;Podrobnosti reportu&#39;,  pre prípad použitia voľby &#39;Nie je definovaný&#39;, pre filter &#39;Priradený užívateľ&#39;. Toto zobrazí všetky záznamy, ktoré nie sú naviazané na Užívateľa.',
  'LBL_USE_COLUMN_FOR' => 'Rada údajov',
  'LBL_VERT_BAR' => 'Vertikálna lišta',
  'LBL_VIEW' => 'zobrazenie',
  'LBL_VIEWER_RUNTIME_HELP' => 'Špecifikovať hodnoty pre <b>Run-time filtre</b> a kliknúť na tlačítko <b>Aplikovať filtre</b> k opätovnému spusteniu zostavy.',
  'LBL_WAS_NOT_SAVED' => 'nebol uložený',
  'LBL_WAS_SAVED' => 'bol uložený',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Čiastka váženého aritmetického priemeru',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Čiastka váženého sumáru',
  'LBL_WHOSE_MAXIMUM' => 'ktorých maximum',
  'LBL_WHOSE_MINIMUM' => 'ktorých minimum',
  'LBL_WITH_AN_AVERAGE' => 's priemerom',
  'LBL_WITH_A_TOTAL' => 's celkom',
  'LBL_WITH_DETAILS' => 'S podrobnosťami',
  'LBL_YEAR' => 'Rok',
  'LBL_YESTERDAY' => 'Včera',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Nemáte žiadne uložené hlásenia.',
  'LNK_ADVANCED_REPORTING' => 'Správa pokročilých prehľadov',
  'LNK_NEW_ACCOUNT' => 'Vytvoriť účet',
  'LNK_NEW_CALL' => 'Záznam volania',
  'LNK_NEW_CASE' => 'Vytvoriť udalosť',
  'LNK_NEW_CONTACT' => 'Vytvoriť kontakt',
  'LNK_NEW_EMAIL' => 'Archivovať Email',
  'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
  'LNK_NEW_NOTE' => 'Vytvoriť poznámku alebo prílohu',
  'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
  'LNK_NEW_TASK' => 'Vytvoriť úlohu',
  'MSG_NO_PERMISSIONS' => 'Nemáte oprávnenia k úprave tohto výkazu',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nemožno publikovať. Je tam iný výkaz s rovnakým názvom.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nemožno zrušiť publikáciu hlásenia, ktoré vlastní iný užívateľ. Vy vlastníte hlásenie s tým istým názvom.',
);

