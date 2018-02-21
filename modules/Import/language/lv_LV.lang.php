<?php
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

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Importa fails nolasīts veiksmīgi',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Importētais ieraksts ir iesaistīts procesā, un to nevar rediģēt, jo šis process ir bloķējis dažu lauku rediģēšanu.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'ieraksti nav importēti kļūdu dēl',
    'LBL_UPDATE_SUCCESSFULLY' => 'ieraksti veiksmīgi atjaunināti',
    'LBL_SUCCESSFULLY_IMPORTED' => 'ieraksti izveidoti',
    'LBL_STEP_4_TITLE' => '{0} solis: Importē failu',
    'LBL_STEP_5_TITLE' => '{0} solis: Aplūko importēšanas rezultātus',
    'LBL_CUSTOM_ENCLOSURE' => 'Lauki ierobežoti ar:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Nevar nopublicēt. Ir jau publicēts importējamo datu kartējums ar tādu pašu nosaukumu.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Nevar atsaukt datu kartējumu, kurš pieder citam lietotājam. Jums ir datu kartējums ar tādu pašu nosaukumu.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Šim moduļa tipam, Importēšanas iespēja nav uzstādīta',
    'LBL_IMPORT_TYPE' => 'Ko vēlaties darīt ar importētiem datiem?',
    'LBL_IMPORT_BUTTON' => 'Tikai izveidot jaunus ierakstus',
    'LBL_UPDATE_BUTTON' => 'Izveidot jaunus un atjaunināt esošos ierakstus',
    'LBL_CREATE_BUTTON_HELP' => 'Lietojiet šo iespēju lai veidotu jaunus ierakstus. Piezīme: Ieraksti importa, failā kuri satur vērtības, kuras sakrīt ar esošo ierakstu ID, netiks importēti ja šīs vērtības ir kartētas uz ID lauku.',
    'LBL_UPDATE_BUTTON_HELP' => 'Šo iespēju lietojiet, lai atjauninātu esošos ierakstus. Dati no importa faila tiks salīdzināti ar esošiem datiem pēc ID lauka vērtības importa failā.',
    'LBL_NO_ID' => 'ID ir obligāts',
    'LBL_PRE_CHECK_SKIPPED' => 'Sākotnējā pārbaude ir izlaista',
    'LBL_NOLOCALE_NEEDED' => 'Nav nepieciešama lokalizācijas konvertācija',
    'LBL_FIELD_NAME' => 'Lauka nosaukums',
    'LBL_VALUE' => 'Vērtība',
    'LBL_ROW_NUMBER' => 'Rindas numurs',
    'LBL_NONE' => 'Neviens',
    'LBL_REQUIRED_VALUE' => 'Nepieciešama obligātā vērtība',
    'LBL_ERROR_SYNC_USERS' => 'Nederīga vērtība, lai sinhronizētos ar Outlook:',
    'LBL_ID_EXISTS_ALREADY' => 'Šajā tabulā tāds ID jau eksistē',
    'LBL_ASSIGNED_USER' => 'Ja lietotājs neeksistē, tad izmanto pašreizējo lietotāju',
    'LBL_SHOW_HIDDEN' => 'Parādīt laukus, kuri nav normāli importējami',
    'LBL_UPDATE_RECORDS' => 'Atjaunināt esošos ierakstus nevis importēt (nav atceļams)',
    'LBL_TEST'=> 'Testēt importu (nesaglabāt un nemainīt datus)',
    'LBL_TRUNCATE_TABLE' => 'Iztukšot tabulu pirms importa (dzēst visus ierakstus)',
    'LBL_RELATED_ACCOUNTS' => 'Neveidot saistītos uzņēmumus',
    'LBL_NO_DATECHECK' => 'Izlaist datuma pārbaudi (darbosies ātrāk, bet neizdosies, ja kāds datums būs nepareizs)',
    'LBL_NO_WORKFLOW' => 'Neizpildīt darbplūsmas šī importa laikā',
    'LBL_NO_EMAILS' => 'Nesūtīt e-pasta paziņojumus šīs importēšanas laikā',
    'LBL_NO_PRECHECK' => 'Dabiskā formāta režīms',
    'LBL_STRICT_CHECKS' => 'Lietot stingro likumu kopu(pārbaudīt arī e-pasta adreses un tālruņu numurus)',
    'LBL_ERROR_SELECTING_RECORD' => 'Kļūda izvēloties ierakstu:',
    'LBL_ERROR_DELETING_RECORD' => 'Kļūda dzēšot ierakstu:',
    'LBL_NOT_SET_UP' => 'Šim moduļa tipam nav uzstādīta importēšanas iespēja',
    'LBL_ARE_YOU_SURE' => 'Vai esat pārliecināts? Tiks izdzēsti viesi dati šajā modulī.',
    'LBL_NO_RECORD' => 'Ar šādu ID nav ierakstu ko atjaunināt',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Šim moduļa tipam nav uzstādīta importēšanas iespēja',
    'LBL_DEBUG_MODE' => 'Aktivizēt atkļūdošanas režīmu',
    'LBL_ERROR_INVALID_ID' => 'Norādītais ID ir par garu, lai to ievadītu laukā (maksimālais garums ir 36 simboli)',
    'LBL_ERROR_INVALID_PHONE' => 'Nederīgs tālruņa numurs',
    'LBL_ERROR_INVALID_NAME' => 'Teksts par garu, lai to ievadītu laukā',
    'LBL_ERROR_INVALID_VARCHAR' => 'Teksts par garu, lai to ievadītu norādītajā laukā',
    'LBL_ERROR_INVALID_DATETIME' => 'Nederīga datuma laika vērtība',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Nederīga datuma laika vērtība',
    'LBL_ERROR_INVALID_INT' => 'Nederīgs integer vērtība',
    'LBL_ERROR_INVALID_NUM' => 'Nederīgs numurs',
    'LBL_ERROR_INVALID_TIME' => 'Nederīga laika vērtība',
    'LBL_ERROR_INVALID_EMAIL'=>'Nederīga e-pasta adrese',
    'LBL_ERROR_INVALID_BOOL'=>'Nederīga vērtība (jābūt 1 vai 0)',
    'LBL_ERROR_INVALID_DATE'=>'Nederīga datuma vērtība',
    'LBL_ERROR_INVALID_USER'=>'Nederīgs lietotāja vārds vai ID',
    'LBL_ERROR_INVALID_TEAM' => 'Nederīgs darba grupas nosaukums vai ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Nederīgs uzņēmuma nosaukums vai ID',
    'LBL_ERROR_INVALID_RELATE' => 'Nederīgs relācijas lauks',
    'LBL_ERROR_INVALID_CURRENCY' => 'Nederīga valūtas vērtība',
    'LBL_ERROR_INVALID_FLOAT' => 'Nederīgs peldoša punkta(floating point) skaitlis',
    'LBL_ERROR_NOT_IN_ENUM' => 'Vērtība nav nolaižamajā sarakstā. Atļautas sekojošas vērtības:',
    'LBL_ERROR_ENUM_EMPTY' => 'Value not in dropDown list. dropDown list is empty',
    'LBL_NOT_MULTIENUM' => 'Nav MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Šim moduļu veidam importēšanas iespēja nav uzstādīta',
    'LBL_IMPORT_MODULE_NO_USERS' => 'UZMANĪBU: Sistēmā nav nodefinēti lietotāji. Ja importēsiet  neievadot lietotājus visi ieraksti tiks piešķirti sistēmas administratoram.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Nevar nopublicēt. Ir jau publicēts importējamo datu kartējums ar tādu pašu nosaukumu',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Nevar atsaukt datu kartējumu, kas pieder citam lietotājam. Jums ir datu kartējums ar tādu pašu nosaukumu.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Direktorija',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => 'nav vai tajā nevar ierakstīt',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Fails nav veiksmīgi augšupielādēts. Iespējams, ka &#39;upload_max_filesize&#39; iestatījums Jūsu php.ini failā ir iestatīts uz pārāk mazu vērtību.',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fails ir pārāk liels. Maksimālais:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Baiti. Mainīt $sugar_config[&#39;upload_maxsize&#39;] failā config.php',
    'LBL_MODULE_NAME' => 'Importēšana',
    'LBL_MODULE_NAME_SINGULAR' => 'Imports',
    'LBL_TRY_AGAIN' => 'Mēģiniet vēlreiz',
    'LBL_START_OVER' => 'Sākt no jauna',
    'LBL_ERROR' => 'Kļūda:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Importējamajā failā ir {0} rindas. Optimālais rindu skaits ir {1}. Lielāks rindu skaits var palēnināt importa procesu. Spiediet Labi lai turpinātu importu. Spiediet Atcelt, lai pārskatītu importējamo failu un atkārtoti ielādējiet importējamo failu.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Sistēmas administratora lietotāju nevar ieimportēt',
    'ERR_REPORT_LOOP' => 'Konstatēta cilpa norādot tiešo vadītāju. Lietotājs nevar būt pats sev tiešais vadītājs.',
    'ERR_MULTIPLE' => 'Vairāku kolonnu lauku nosaukumi ir vienādi.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Iztrūkst obligātie lauki:',
    'ERR_MISSING_MAP_NAME' => 'Nav norādīts pielāgotās kartēšanas nosaukums',
    'ERR_SELECT_FULL_NAME' => 'Jūs nevarat izvēlēties pilnu vārdu, kad izvēlēts Vārds un Uzvārds.',
    'ERR_SELECT_FILE' => 'Izvēlieties failu augšupielādei.',
    'LBL_SELECT_FILE' => 'Izvēlieties failu:',
    'LBL_CUSTOM' => 'Pielāgots',
    'LBL_CUSTOM_CSV' => 'Pielāgots ar komatu atdalīts fails',
    'LBL_CSV' => 'fails manā datorā',
    'LBL_EXTERNAL_SOURCE' => 'ārējā programma vai pakalpojums',
    'LBL_TAB' => 'Ar cilni ierobežots fails',
    'LBL_CUSTOM_DELIMITED' => 'Pielāgots atdalītais fails',
    'LBL_CUSTOM_DELIMITER' => 'Lauki atdalīti ar:',
    'LBL_FILE_OPTIONS' => 'Faila iespējas',
    'LBL_CUSTOM_TAB' => 'Pielāgots ar cilni ierobežots fails',
    'LBL_DONT_MAP' => '-- Nekartējiet šo lauku --',
    'LBL_STEP_MODULE' => 'Kurā modulī vēlaties importēt datus?',
    'LBL_STEP_1_TITLE' => '1. solis: Izvēlieties datu avotu',
    'LBL_CONFIRM_TITLE' => '{0}. solis: Apstiprināt importa faila īpašības',
    'LBL_CONFIRM_EXT_TITLE' => 'Solis{0}: Apstiprināt ārējā datu avota īpašības',
    'LBL_WHAT_IS' => 'Mani dati ir:',
    'LBL_MICROSOFT_OUTLOOK' => '"Microsoft Outlook"',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlook pielāgotie kartējumi paļaujas ka importa fails ir ar komatu atdalīts fails(.csv). Ja jūsu importa fails ir ar tab atdalīts, kartējumi netiks piemēroti kā ieplānots.',
    'LBL_ACT' => 'Rīkojies!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Saglabātie avoti:',
    'LBL_PUBLISH' => 'publicēt',
    'LBL_DELETE' => 'Dzēst',
    'LBL_PUBLISHED_SOURCES' => 'Lai izmantotu iepriekš uzstādītos importa iestatījumus, izvēlies no sekojošajiem:',
    'LBL_UNPUBLISH' => 'Nepublicēt',
    'LBL_NEXT' => 'Tālāk >',
    'LBL_BACK' => '< Atpakaļ',
    'LBL_STEP_2_TITLE' => '{0}. solis: Augšupielādējiet importa failu',
    'LBL_HAS_HEADER' => 'Galvenes ieraksts:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Piezīmes:',
    'LBL_NOW_CHOOSE' => 'Tagad izvēlieties to failu, kuru importēt:',
    'LBL_IMPORT_OUTLOOK_TITLE' => '"Microsoft Outlook 98" un 2000 var eksportēt datus <b> ar komatu atdalītas vērtības</b> formātā, kuru var izmantot, lai importētu datus sistēmā. Lai eksportētu "Outlook" programmas datus, veiciet sekojošus soļus:',
    'LBL_OUTLOOK_NUM_1' => 'Atveriet <b>"Outlook"</b>',
    'LBL_OUTLOOK_NUM_2' => 'Izvēlieties <b>Faila</b> izvēlni, pēc tam <b>Importēt un eksportēt ...</b> izvēlnes opciju',
    'LBL_OUTLOOK_NUM_3' => 'Izvēlieties <b>Eksportēt uz failu</b> un klikšķiniet "Nākamais"',
    'LBL_OUTLOOK_NUM_4' => 'Izvēlieties <b>Ar komatu atdalītas vērtības (Windows)</b> un klikšķiniet <b>"Nākamais" </b>.</br>.  Piezīme: Iespējams, ka Jums pieprasīs uzstādīt eksportēšanas komponentus',
    'LBL_OUTLOOK_NUM_5' => 'Izvēlieties <b>Kontaktu</b> katalogu un klikšķiniet <b> "Nākamais" </b>. Varat izvēlēties dažādus kontaktu katalogus, ja Jūsu kontakti ir saglabāti dažādos katalogos',
    'LBL_OUTLOOK_NUM_6' => 'Izvēlieties faila nosaukumu un klikšķiniet <b>"Nākamais" </b>',
    'LBL_OUTLOOK_NUM_7' => 'Klikšķiniet <b> "Beigt" </b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com var eksportēt datus <b>Ar komatu atdalītas vērtības</b> formātā, kuru var izmantot, lai importētu datus sistēmā. Lai eksportētu Salesforce. com datus, veiciet sekojošus soļusi:',
    'LBL_SF_NUM_1' => 'Atveriet pārlūkprogrammu, ieejiet http://www.salesforce.com un piesakieties, izmantojot savu e-pasta adresi un paroli',
    'LBL_SF_NUM_2' => 'Klikšķiniet <b> "Atskaites" </b> cilni augšējā izvēlnē',
    'LBL_SF_NUM_3' => '<b>Lai eksportētu uzņēmumus:</b> klikšķiniet uz <b> "Aktīvie uzņēmumi"</b> saiti</br><b>.Lai eksportētu kontaktpersonas:</b>, klikšķiniet uz <b>"Adresātu saraksts"</b> saiti.',
    'LBL_SF_NUM_4' => '<b>1. solī: Izvēlieties savas atskaites veidu </b>, izvēlieties <b> "Tabulveida atskaiti" </b> un klikšķiniet <b> "Nākamais"</b>.',
    'LBL_SF_NUM_5' => '<b>2. solī: Izvēlieties atskaites kolonnas</b>, izvēlieties kolonnas, kuras vēlaties eksportēt, un klikšķiniet <b> "Nākamais"</b>.',
    'LBL_SF_NUM_6' => '<b>3. solī: Izvēlieties informāciju, ko vēlaties apkopot</b>, pēc tam klikšķiniet <b> "Nākamais" </b>.',
    'LBL_SF_NUM_7' => '<b>4. solī: Sakārtojiet atskaites kolonnas</b>, pēc tam klikšķiniet <b> "Nākamais" </b>.',
    'LBL_SF_NUM_8' => '<b>5. solī: Izvēlieties atskaites kritēriju</b>, <b>"Sākuma datumā"</b> izvēlieties pietiekami senu datumu, lai iekļautu visus Jūsu Uzņēmumus. Izmantojot paplašinātos kritērijus, varat eksportēt arī Uzņēmumu apakškopas. Kad esat pabeidzis, klikšķiniet <b> "Izpildīt atskaiti" </b>',
    'LBL_SF_NUM_9' => 'Atskaite tiek izveidota, un parādās <b>Atskaites izveidošanas statuss: Pabeigta.</b> Tagad klikšķiniet <b> "Eksportēt uz Excel" </b>.',
    'LBL_SF_NUM_10' => 'Uz <b>Eksportēt atskaiti:</b>, lai <b>Eksportēt faila formātu:</b>, izvēlieties <b>Ar komatu ierobežots .csv</b>. Klikšķiniet <b> "Eksportēt" </b>.',
    'LBL_SF_NUM_11' => 'Uznirst dialoglodziņš, lai datorā varētu saglabāt ekspotēšanas failu.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! var eksportēt datus  <b>ar komatu atdalītas vērtības</b> formātā, kurus var izmantot datu importam sistēmā. Lai eksportētu datus no Act!, veiciet sekojošus soļus:',
    'LBL_ACT_NUM_1' => 'Palaist <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Izvēlieties <b>Faila</b> izvēlnē <b>Datu Apmaiņas</b> iespēju, tad iepēju  <b>Eksportēt...</b>',
    'LBL_ACT_NUM_3' => 'Izvēlieties faila tipu <b>Text-Delimited</b>',
    'LBL_ACT_NUM_4' => 'Izvēlies faila nosaukumu un eksportēto datu atrašanās vietu un klikšķini <b>Tālāk</b>',
    'LBL_ACT_NUM_5' => 'Atzīmē <b>Tikai kontaktu ierakstus</b>',
    'LBL_ACT_NUM_6' => 'Klikšķini pogu <b>Iespējas...</b>',
    'LBL_ACT_NUM_7' => 'Atzīmē <b>Komats</b> kā lauku atdalīšanas simbolu',
    'LBL_ACT_NUM_8' => 'Atzīmē <b>Jā, eksportēt lauku nosaukumus</b>, izvēles rūtiņu un klikšķini <b>Labi</b>',
    'LBL_ACT_NUM_9' => 'Klikšķini <b>Tālāk</b>',
    'LBL_ACT_NUM_10' => 'Atzīmējiet <b>Visi ieraksti</b> un klikšķiniet <b>Pabeigt</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Daudzas lietojumprogrammas ļauj eksportēt datus <b> ar komatu ierobežotā teksta failā (.csv)</b>, veicot šādus soļus:',
    'LBL_CUSTOM_NUM_1' => 'Sāciet lietojumprogrammas darbību un atverat datu failu',
    'LBL_CUSTOM_NUM_2' => 'Izvēlieties <b>"Saglabāt kā..."</b> vai <b> "Eksportēt..."</b> izvēlnes opciju',
    'LBL_CUSTOM_NUM_3' => 'Saglabājiet failu <b>CSV</b> vai <b>ar komatu atdalītas vērtības</b> formātā',
    'LBL_IMPORT_TAB_TITLE' => 'Daudzas lietojumprogrammas sniedz iespēju eksportēt datus <b>Ar zīmotni ierobežotā teksta failā (.tsv vai .tab)</b>, veicot sekojošus soļus:',
    'LBL_TAB_NUM_1' => 'Sāciet lietojumprogrammas darbību un atveriet datu failu',
    'LBL_TAB_NUM_2' => 'Izvēlieties <b> "Saglabāt kā..."</b> vai <b> "Eksportēt..." </b> izvēlnes iespēju.',
    'LBL_TAB_NUM_3' => 'Saglabājiet failu <b>TSV</b> vai <b>Ar cilni atdalītas vērtības</b> formātā.',
    'LBL_STEP_3_TITLE' => '{0}. solis: Apstipriniet lauku kartēšanu',
    'LBL_STEP_DUP_TITLE' => '{0}. solis: Pārbaudiet iespējamos dublikātus',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Zemāk redzamajā sarakstā izvēlieties laukus  importēšanas failam, kuri jāimportē katrā sistēmas laukā. Kad esi pabeidzis, klikšķini <b>"Tālāk"</b>:',
    'LBL_DATABASE_FIELD' => 'Moduļa lauks',
    'LBL_HEADER_ROW' => 'Galvenes ieraksts',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Norādīt vai importējamā faila pirmā rinda ir galvenes ieraksts, kurš satur lauku etiķetes.',
    'LBL_ROW' => 'Ieraksts',
    'LBL_SAVE_AS_CUSTOM' => 'Saglabāt kā pielāgotu kartēšanu:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Pielāgotā kartējuma nosaukums:',
    'LBL_CONTACTS_NOTE_1' => 'Jābūt kartētam Uzvārdam vai pilnam vārdam.',
    'LBL_CONTACTS_NOTE_2' => 'Ja ir kartēts Pilns Vārds, tad lauki Vārds un Uzvārds tiek ignorēti.',
    'LBL_CONTACTS_NOTE_3' => 'Ja ir kartēts Pilns Vārds, tad, ievadot datu bāzē, dati laukā Pilns Vārds tiek sadalīti uz laukiem Vārds un Uzvārds.',
    'LBL_CONTACTS_NOTE_4' => 'Ievadot datu bāzē, Lauki Adrese - iela 2 un Adrese - iela 3 tiek apvienoti kopā laukā Adrese iela.',
    'LBL_ACCOUNTS_NOTE_1' => 'Ievadot datu bāzē, Lauki Adrese - iela 2 un Adrese - iela 3 tiek apvienoti kopā laukā Adrese iela.',
    'LBL_REQUIRED_NOTE' => 'Obligātais(ie) lauks(i):',
    'LBL_IMPORT_NOW' => 'Importēt tagad',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Importēto failu nevar atvērt nolasīšanai.',
    'LBL_NOT_SAME_NUMBER' => 'Jūsu failā visās rindās nav vienāds ierakstu skaits',
    'LBL_NO_LINES' => 'Importēšanas failā nebija rindu. Pārbaudi vai failā nav tukšu rindu, un mēģini vēl.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Importēšanas fails ir jau apstrādāts vai neeksistē.',
    'LBL_SUCCESS' => 'Paveikts:',
	'LBL_FAILURE' => 'Imports neizdevās:',
    'LBL_SUCCESSFULLY' => 'Veiksmīgi importēts',
    'LBL_LAST_IMPORT_UNDONE' => 'Importēšana ir atcelta',
    'LBL_NO_IMPORT_TO_UNDO' => 'Nav importēšanas procesa, kuru atcelt.',
    'LBL_FAIL' => 'Neizdevās:',
    'LBL_RECORDS_SKIPPED' => 'Ieraksti izlaisti, jo tajos trūkst viens vai vairāki obligātie lauki',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Ieraksti izlaisti, jo identifikatori jau eksistē vai arī bija garāki par 36 simboliem',
    'LBL_RESULTS' => 'Rezultāti',
    'LBL_CREATED_TAB' => 'Izveidotie ieraksti',
    'LBL_DUPLICATE_TAB' => 'Dublikāti',
    'LBL_ERROR_TAB' => 'Kļūdas',
    'LBL_IMPORT_MORE' => 'Importēt vēlreiz',
    'LBL_FINISHED' => 'Pabeigts',
    'LBL_UNDO_LAST_IMPORT' => 'Atcelt Importēšanu',
    'LBL_LAST_IMPORTED'=>'Izveidots',
    'ERR_MULTIPLE_PARENTS' => 'Var nodefinēt tikai vienu Priekšteča ID',
    'LBL_DUPLICATES' => 'Atrasti dublikāti',
    'LNK_DUPLICATE_LIST' => 'Lejuplādēt dublikātu sarakstu',
    'LNK_ERROR_LIST' => 'Lejuplādēt kļūdu sarakstu',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Lejuplādēt sarakstu ar ierakstiem, kuri netika importēti',
    'LBL_UNIQUE_INDEX' => 'Izvēlieties indeksu dublikātu salīdzināšanai',
    'LBL_VERIFY_DUPS' => 'Lai pārbaudītu ar esošajiem ierakstiem sakrītošus datus importa failā, atlasiet laukus, kurus pārbaudīt:',
    'LBL_INDEX_USED' => 'Lauki, kurus pārbaudīt:',
    'LBL_INDEX_NOT_USED' => 'Pieejamie lauki:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Fails nav veiksmīgi augšupielādēts.  "Sugar" instalācijas kešdirektorijā pārbaudiet faila atļaujas.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Unikāls ID numurs',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nosaukums vai ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Tālruņa numurs',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Darba grupas nosaukums vai ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Jebkurš teksts',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Jebkurš teksts',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Jebkurš teksts',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Laiks',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Datums',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Datums/laiks',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Lietotājvārds vai ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '&#39;0&#39; vai &#39;1&#39;',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Saraksts',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-pasta adrese',
    'LBL_IMPORT_FIELDDEF_INT' => 'Skaitlis (bez decimāldaļām)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Skaitlis (bez decimāldaļām)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Skaitlis (bez decimāldaļām)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Skaitlis (var būt ar decimāldaļām)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Skaitlis (var būt ar decimāldaļām)',
    'LBL_DATE_FORMAT' => 'Datuma formāts:',
    'LBL_TIME_FORMAT' => 'Laika formāts:',
    'LBL_TIMEZONE' => 'Laika zona:',
    'LBL_ADD_ROW' => 'Pievienot lauku',
    'LBL_REMOVE_ROW' => 'Noņemt lauku',
    'LBL_DEFAULT_VALUE' => 'Noklusētā vērtība',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Aplūkot importa faila īpašības',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Slēpt importa faila īpašības',
    'LBL_SHOW_NOTES' => 'Aplūkot piezīmes',
    'LBL_HIDE_NOTES' => 'Slēpt piezīmes',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Aplūkot priekšapskates kolonnas',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Slēpt priekšapskates kolonnas',
    'LBL_SAVE_MAPPING_AS' => 'Lai saglabātu importa uzstādījumus, ievadiet nosaukumu:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Parastas pēdiņas ($#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Dubultas pēdiņas (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Neviens',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Cits:',
    'LBL_IMPORT_COMPLETE' => 'Iziet',
    'LBL_IMPORT_COMPLETED' => 'Importēšana pabeigta',
    'LBL_IMPORT_ERROR' => 'Importējot radās kļūdas',
    'LBL_IMPORT_RECORDS' => 'Importē ierakstus',
    'LBL_IMPORT_RECORDS_OF' => 'no',
    'LBL_IMPORT_RECORDS_TO' => 'līdz',
    'LBL_CURRENCY' => 'Valūta:',
    'LBL_SYSTEM_SIG_DIGITS' => 'Zīmju skaits aiz komata',
    'LBL_NUMBER_GROUPING_SEP' => 'Tūkstošu atdalītājs:',
    'LBL_DECIMAL_SEP' => 'Decimālais simbols:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Vārda attēlošanas formāts',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Piemērs',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Uzruna, "f" Vārds, "l" Uzvārds</i>',
    'LBL_CHARSET' => 'Faila kodējums:',
    'LBL_MY_SAVED_HELP' => 'Izmanto šo iespēju, lai piemērotu iepriekš uzstādītus importēšanas iestatījumus, tādus kā īpašības, kartējumus un dublikātu pārbaudi. <br><br>Klikšķini, <b>Dzēst</b>, lai dzēstu kartējumu visiem lietotājiem.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Izmanto šo iespēju, lai piemērotu iepriekš uzstādītus importēšanas iestatījumus, tādus kā īpašības, kartēšanas un dublikātu pārbaudi.<br><br>Klikšķini <b>Publicēt</b>, lai kartēšanas būtu pieejamas citiem lietotājiem.<br>Klikšķini <b>Nepublicēt</b>, lai šīs kartēšanas nebūtu pieejams citiem lietotājiem.<br>Klikšķini<b>Dzēst</b>lai dzēstu kartējumus visiem lietotājiem.',
    'LBL_MY_PUBLISHED_HELP' => 'Izmanto šo iespēju, lai piemērotu iepriekš uzstādītus importēšanas iestatījumus, tādus kā īpašības, kartēšanas un dublikātu pārbaudi.',
    'LBL_ENCLOSURE_HELP' => '<p><b>Ierobežotāja rakstu zīme</b> tiek lietota, lai ierobežotu paredzētā lauka saturu, ieskaitot simbolus, kuri lietoti, kā atdalītāji.<br><br>Piemērs:Ja atdalītājs ir komats (,), un Ierobežotāja rakstu zīme ir pēdiņas ("),<br><b>"Cupertino, California"</b> ir importēts vienā laukā lietojumprogrammā un parādās kā <b>Cupertino, California</b>.<br>Ja nav Ierobežotāja rakstu zīmes, vai Ierobežotāja rakstu zīme ir cits simbols,<br><b>"Cupertino, California"</b> ir importēts divos blakus laukos kā <b>"Cupertino</b> un <b>"California"</b>.<br><br>Piezīme: Importa fails var arī nesaturēt Ierobežotāja rakstu zīmes.<br>Noklusētā Ierobežotāja rakstu zīme ar komatu un tab atdalītajiem failiem, kuri izveidoti Excel ir pēdiņas </p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Izmantojiet šo iespēju, lai atlasītu un augšupielādētu izklājlapu failu, kurš satur datus, ar importējamajiem datiem. Piemēri: ar komatu atdalīts .csv fails vai eksportēts fails no Microsoft Outlook.',
    'LBL_DELIMITER_TAB_HELP' => 'Atzīmē šo izvēli, ja simbols, kurš atdala laukus importa failā ir <b>TAB</b>, un faila paplašinājums ir .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Atzīmē šo iespēju ja rakstuzīme, kura atdala laukus importa failā nav komats vai TAB un ievadi šo rakstuzīmi blakus laukā.',
    'LBL_DATABASE_FIELD_HELP' => 'Šī kolonna attēlo visus moduļa laukus. Atlasi laukus uz kuriem kartēt importa faila ierakstus.',
    'LBL_HEADER_ROW_HELP' => 'Šī kolonna attēlo etiķetes importa faila galvenes ierakstā.',
    'LBL_DEFAULT_VALUE_HELP' => 'Norādi vērtību, kuru izmantot, ja izveidotajam vai atjauninātajam ierakstam importa failā nav datu.',
    'LBL_ROW_HELP' => 'Šī kolonna attēlo pirmā ieraksta, kurš nav galvenes ieraksts datus. Ja galvenes ieraksta iezīmes parādās šajā kolonnā, klikšķini Atpakaļ, lai norādītu galvenes ierakstu Importa faila īpašībās.',
    'LBL_SAVE_MAPPING_HELP' => 'Ievadi nosaukumu, lai saglabātu importēšanas iestatījumus, tādus kā lauku kartēšana un indeksus dublikātu pārbaudi. Saglabātie importēšanas iestatījumi var tikt izmantoti turpmāk veicot importēšanu.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Importa faila augšupielādes laikā, dažas faila īpašības tika noteiktas automātiski. Aplūko un izmaini šīs īpašības ja <br> nepieciešams. Piezīme: Šie iestatījumi attiecas tikai uz šo importēšanas operāciju un neizmainīs vispārīgos Lietotāja iestatījumus.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Meklē sistēmā esošus ierakstus kurus var uzskatīt par importēto ierakstu dublikātiem, veicot dublikātu pārbaudi sakrītošajiem datiem. Lauki, kuri ir nomesti kolonnā "Pārbaudīt datus" tiks izmantoti dublikātu pārbaudei. Importa faila ieraksti, kuri satur sakrītošus datus tiks izvadīti nākamajā lapā, un jūs varēsiet izvēlēties kurus ierakstus importēt.',
    'LBL_IMPORT_STARTED' => 'Imports uzsākts:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Importa faila uzstādījumi',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Ierakstu nevar atjaunināt, jo ir nepietiekamas pieejas tiesības',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Vai tiešām vēlaties dzēst šos saglabātos importa uzstādījumus?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Ja importa fails ir eksportēts no kāda no sekojošiem avotiem, norādiet šo avotu.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Atzīmē avotu, lai automātiski piemērotu pielāgotos kartējumus, tādējādi vienkāršojot kartēšanas procesu (nākamais solis)',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Izmantojiet šo izvēli, lai importētu datus tieši no ārējās lietojumprogrammas vai pakalpojuma, piemēram, Gmail.',
    'LBL_EXAMPLE_FILE' => 'Lejupielādēt importa faila veidni',
    'LBL_CONFIRM_IMPORT' => 'Jūs esat izvēlējies atjaunināt ierakstus importēšanas procesā. Atjauninājumus esošajiem ierakstiem nevar atcelt. Ierakstus, kuri ir izveidoti importēšanas procesā var izdzēst, ja nepieciešams. Klikšķini Atcelt, lai veidotu tikai jaunus ierakstus, vai klikšķini OK, lai turpinātu.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Brīdinājums: Jūs jau esat izvēlējies pielāgoto kartēšanu šim importam, vai vēlies turpināt?',
    'LBL_EXTERNAL_FIELD' => 'Ārējais lauks',
    'LBL_SAMPLE_URL_HELP' => 'Lejupielādē importa faila paraugu, kurš satur moduļa lauku galvenes ierakstu. Šo failu var izmantot kā veidni importa faila veidošanai.',
    'LBL_AUTO_DETECT_ERROR' => 'Lauku atdalītājs un noteicējs importa failā netika atrasts. Lūdzu pārbaudi iestatījumus Importa faila īpašībās.',
    'LBL_MIME_TYPE_ERROR_1' => 'Izvēlētais fails nesatur atdalītu sarakstu. Lūdzu pārbaudiet faila tipu. Rekomendētais faila tips ir ar komatu atdalīts fails(.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Lai turpinātu izvēlētā faila importēšanu, uzklikšķiniet uz Labi. Lai augšupielādētu jaunu failu, uzklikšķiniet uz Mēģināt vēlreiz',
    'LBL_FIELD_DELIMETED_HELP' => 'Lauka atdalītājs nosaka, kādu simbolu izmantot, lai atdalītu lauku kolonnas.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Atlasi failu kurš satur datus kuros ieraksti ir atdalīti ar atdalītāju, piemēram komats vai tab. Ieteicamais faila formāts ir .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Nevar piekļūt datu avota adapterim, mēģiniet vēlreiz vēlāk.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Nevar piekļūt ārējai barotnei, mēģiniet vēlreiz vēlāk.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Importa keša direktorija nav pieejama rakstīšanai.',
    'LBL_ADD_FIELD_HELP' => 'Izmanto šo izvēli, lai pievienotu vērtību visiem izveidotajiem un/vai atjauninātajiem laukiem. Atlasi lauku un tad ievadi, vai atlasi vērtību šim laukam, kolonnā Noklusētā vērtība.',
    'LBL_MISSING_HEADER_ROW' => 'Nav atrasts galvenes ieraksts',
    'LBL_CANCEL' => 'Atcelt',
    'LBL_SELECT_DS_INSTRUCTION' => 'Esat gatavi sākt importēšanu? Izvēlieties datu avotu, no kura vēlaties importēt.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Atlasiet failu Jūsu datorā, kurš satur datus, kurus vēlaties importēt, vai lejupielādējiet veidni, lai sāktu veidot importa failu.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Šeit attēlots, kā pirmie ieraksti importēšanas failā tiek attēloti ar atrastajām faila īpašībām. Ja galvenes ieraksts ir atrasts, tas ir parādīts tabulas pirmajā rindā. Aplūkojiet importēšanas faila īpašības un, ja nepieciešams, veiciet izmaiņas un izveidojiet papildus īpašības. Šo iestatījumu atjaunināšanas rezultātā tiks atjaunināti dati, kuri parādās tabulā.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Zemāk redzamajā tabulā ir visi moduļa lauki, uz kuriem var kartēt datus no importēšanas faila. Ja failā ir galvenes ieraksti, kolonnas failā ir kartētas uz atbilstošiem laukiem. Pārliecinieties, vai kartējumi ir pareizi, un, ja nepieciešams, veiciet izmaiņas. Lai palīdzētu pārbaudīt kartējumus, pirmā rinda attēlo datus no faila. Pārliecinieties, ka ir veikti kartējumi uz visiem obligātajiem laukiem (atzīmēti ar zvaigznīti).',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Lai izvairītos no ierakstu dublikātiem, atlasiet, kuri lauki importēšanas laikā tiks izmantoti dublikātu pārbaudei. Importēšanas faila ieraksti tiks salīdzināti ar esošajiem ierakstiem, izmantojot atlasītos laukus. Ja ierakstu dublikāti tiks atrasti, tie tiks attēloti kopā ar importēšanas rezultātiem (nākamajā lapā). Tad varēsiet izvēlēties, kurus no šiem ierakstiem turpināt importēt.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Pieteikties',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Izrakstīties',
    'LBL_DUP_HELP' => 'Šeit ir ieraksti importa failā kuri netika importēti, jo satur datus, kuri sakrīt ar esošiem ierakstiem, balstoties uz dublikātu pārbaudi. Dati, kuri sakrīt ir iezīmēti. Lai atkārtoti importētu šos ierakstus, lejupielādē sarakstu, veic izmaiņas un klikšķini <b>Importēt atkārtoti</b>.',
    'LBL_DESELECT' => 'neatlasīt',
    'LBL_SUMMARY' => 'Kopsavilkums',
    'LBL_OK' => 'Labi',
    'LBL_ERROR_HELP' => 'Šeit norādīti ieraksti importa failā, kuri netika importēti kļūdas dēļ. Lai atkārtoti importētu šos ierakstus, lejupielādē sarakstu, veic izmaiņas un klikšķini <b>Importēt atkārtoti</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Zemāk esošā tabula satur laukus ārējā avotā un moduļu laukus uz kuriem tie tiks kartēti. Pārbaudi kartējumu, lai pārliecinātos ka tie ir pareizi un ja nepieciešams veic izmaiņas. Pārliecinies, ka ir veiktas kartēšanas uz visiem obligāti aizpildāmajiem laukiem(atzīmēti ar zvaigznīti)',
    'LBL_EXTERNAL_MAP_NOTE' => 'Importēšana tiks veikta kontaktiem caur visām Google Contacts grupām.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Pēc noklusējuma Lietotājvārdi jaunizveidotajiem lietotājiem, būs Google Contacts Pilnie vārdi. Lietotājvārdus pēc izveidošanas var nomainīt.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Klikšķini<b>Importēt tagad</b> lai sāktu importēšanu. Ieraksti tiks izveidoti tikai tiem ierakstiem, kuri satur uzvārdu. Ieraksti netiks izveidoti datiem, kuri tiks identificēti kā dublikāti balstoties uz vārdiem un/vai e-pasta adresēm esošajos ierakstos.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Šī kolonna attēlo laukus ārējajā avotā, kuri satur datus, kuri tiks izmantoti, lai izveidotu jaunus ierakstus.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Nosaka vērtību, kuru izmantot izveidotajam ierakstam, ja ārējais avots nesatur datus.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Lai piešķirtu jaunos ierakstus citam lietotājam, izmanto Noklusētās vērtības kolonnu ,lai norādītu citu lietotāju.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Lai piešķirtu jaunos ierakstus citām darba grupām, nevis savai darba grupai, izmanto kolonnu Noklusētā vērtība, lai atlasītu citas darba grupas.',
    'LBL_SIGN_IN_HELP' => 'Lai aktivizētu šo servisu, lūdzu pieraksties Ārējo kontu cilnē , Lietotāju iestatījumu lapā.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Mēģina apstrādāt e-pasta adreses modulī, kas to neatbalsta.",
);
