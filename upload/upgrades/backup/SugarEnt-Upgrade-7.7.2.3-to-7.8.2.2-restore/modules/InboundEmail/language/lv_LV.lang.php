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

	'LBL_ASSIGN_TEAM'		=> 'Piešķirt darba grupām',

	'LBL_RE'					=> 'Atb:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Pieteikšanās vārds vai parole nav pareiza',
	'ERR_BODY_TOO_LONG'		=> '\r Ķermeņa teksts ir pārāk garš lai attēlotu PILNU e-pastu. Apgriezts.',
	'ERR_INI_ZLIB'			=> 'Pagaidām nevar izslēgt "Zlib" kompresiju.  "Iestatījumu pārbaude" var neizdoties.',
	'ERR_MAILBOX_FAIL'		=> 'Nevar izgūt nevienu pasta kontu.',
	'ERR_NO_IMAP'			=> 'Nav atrastas IMAP bibliotēkas.  Atrisiniet šo problēmu pirms ienākošo e-pastu procedūras turpināšanas',
	'ERR_NO_OPTS_SAVED'		=> 'Ienākošo e-pastu konti nav saglabāti ar optimāliem iestatījumiem.  Pārbaudiet iestatījumus',
	'ERR_TEST_MAILBOX'		=> 'Pārbaudiet iestatījumus un mēģiniet vēlreiz.',
    'ERR_DELETE_FOLDER' => 'Nevar izdzēst katalogu.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Nevar atrakstīties no kataloga pirms dzēšanas.',

	'LBL_APPLY_OPTIMUMS'	=> 'Piemērot optimālos iestatījumus',
	'LBL_ASSIGN_TO_USER'	=> 'Piešķirt lietotājam',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Automātiskās atbildes iespējas',
	'LBL_AUTOREPLY'			=> 'automātiskās atbildes veidne',
	'LBL_AUTOREPLY_HELP'	=> 'Izvēlies automātisko atbildi, lai informētu e-pasta sūtītājus, ka viņu atbilde ir saņemta.',
	'LBL_BASIC'				=> 'Pasta konta informācija',
	'LBL_CASE_MACRO'		=> 'Pieteikumu Makro',
	'LBL_CASE_MACRO_DESC'	=> 'Iestatiet makro, kas tiks analizēts un lietots, lai importēto e-pastu saistītu ar Pieteikumu.',
	'LBL_CASE_MACRO_DESC2'	=> 'Iestatiet to uz jebkādu vērtībai, bet saglabājiet <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Piespiest pasta servera Drošības sertifikāta validāciju - neizmanto ja pats paraksti.',
	'LBL_CERT'				=> 'Apstiprināt sertifikātu',
	'LBL_CLOSE_POPUP'		=> 'Aizvērt logu',
	'LBL_CREATE_NEW_GROUP'	=> '--Izveidot grupu saglabājot--',
	'LBL_CREATE_TEMPLATE'	=> 'Izveidot',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Abonēt katalogus',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Noklusēts:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Noklusēts:',
	'LBL_DELETE_SEEN'		=> 'Pēc importēšanas dzēst izlasītos e-pastus',
	'LBL_EDIT_TEMPLATE'		=> 'Rediģēt',
	'LBL_EMAIL_OPTIONS'		=> 'E-pasta apstrādes iespējas',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Noraidīto e-pastu iespējas',
	'LBL_FILTER_DOMAIN_DESC'=> 'Norādi domēnu uz kuru nesūtīt automātiskās atbildes.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Izvēlies, lai automātiski izveidotu e-pasta ierakstus Sugar sistēmā, priekš visiem ienākošajiem e-pastiem.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Pieteikumu izveidošanas izvēlei, jānorāda Grupas katalogs',
	'LBL_FILTER_DOMAIN'		=> 'Nav automātiskās atbildes šim domēnam',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '</br>Optimālu savienojuma mainīgo meklēšana.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Atrast optimālu konfigurāciju',
	'LBL_FIND_SSL_WARN'		=> '</br>SSL pārbaude var norisināties ilgu laiku.  Esiet pacietīgi!</br>',
	'LBL_FORCE_DESC'		=> 'Dažiem IMAP/POP3 serveriem nepieciešami īpaši slēdži. Pievienojot, pārbaudiet negatīvo slēdzi, to piespiežot (t.i., /notls)',
	'LBL_FORCE'				=> 'Uzspiest negatīvo',
	'LBL_FOUND_MAILBOXES'	=> 'Atrastas sekojošas izmantojamās mapes.</br>Klikšķiniet uz vienu, lai izvēlētos to:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '</br>Atrasti optimālie iestatījumi.  Nospiediet taustiņu zemāk, lai izmantotu tos Jūsu pasta kontam.',
	'LBL_FROM_ADDR'			=> '"No" adrese',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "Šeit norādītā e-pasta adrese var neparādīties e-apsta sūtītāja ailītē, sakarā ar e-pasta servisa piegādātāja noteiktajiem ierobežojumiem. Tādā gadījumā tiks  lietota izejošā pasta serverī norādīt e-pasta adrese.",
	'LBL_FROM_NAME_ADDR'	=> 'No vārds/e-pasts',
	'LBL_FROM_NAME'			=> '"No" vārds',
	'LBL_GROUP_QUEUE'		=> 'Piešķirt grupai',
    'LBL_HOME'              => 'Sākums',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Pasta konta lietojums',
	'LBL_LIST_NAME'			=> 'Nosaukums:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Tips',
	'LBL_LIST_SERVER_URL'	=> 'Pasta serveris:',
	'LBL_LIST_STATUS'		=> 'Statuss:',
	'LBL_LOGIN'				=> 'Lietotāja vārds',
	'LBL_MAILBOX_DEFAULT'	=> 'IESŪTNE',
	'LBL_MAILBOX_SSL_DESC'	=> 'Pieslēdzot, lietojiet SSL. Ja tas nedarbojas, pārbaudiet, vai Jūsu PHP instalācija konfigurācijā iekļāva  "--with-imap-ssl" .',
	'LBL_MAILBOX_SSL'		=> 'Lietojiet SSL',
	'LBL_MAILBOX_TYPE'		=> 'Iespējamās darbības',
	'LBL_DISTRIBUTION_METHOD' => 'Izplatīšanas metode',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Jauna pieteikuma automātiskās atbildes veidne',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Izvēlies automātisko atbildi, lai paziņotu e-pasta sūtītājam, ka pieteikums ir izveidots. E-pasts satur pieteikuma numuru Tēmas sadaļā, kurš atbilst Pieteikumu Makro iestatījumiem. Šis atbildes ziņojums tiek nosūtīts tikai, kad pirmais e-pasts tiek saņemts.',
	'LBL_MAILBOX'			=> 'Kontrolētas mapes',
	'LBL_TRASH_FOLDER'		=> 'Atkritnes mape',
	'LBL_GET_TRASH_FOLDER'	=> 'Iegūt atkritnes mapi',
	'LBL_SENT_FOLDER'		=> 'Nosūtīto ziņu mape',
	'LBL_GET_SENT_FOLDER'	=> 'Iegūt nosūtīto ziņu mapi',
	'LBL_SELECT'				=> 'Atzīmēt',
	'LBL_MARK_READ_DESC'	=> 'Importējot atzīmēt pasta servera ziņojumus kā izlasītus ; nedzēst.',
	'LBL_MARK_READ_NO'		=> 'Atzīmētais e-pasts pēc importēšanas tika dzēsts',
	'LBL_MARK_READ_YES'		=> 'E-pasts pēc importēšanas atstāts uz servera',
	'LBL_MARK_READ'			=> 'Atstāt ziņojumus uz servera',
	'LBL_MAX_AUTO_REPLIES'	=> 'Automātisko atbilžu skaits',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Ievadiet automātisko atbilžu maksimālo skaitu, kuru var 24 stundu laikā nosūtīt uz noteiktu e-pasta adresi.',
	'LBL_PERSONAL_MODULE_NAME' => 'Personīgais pasta konts',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Personīgā e-pasta konts',
	'LBL_CREATE_CASE'      => 'Veidot pieteikumu no e-pasta',
	'LBL_CREATE_CASE_HELP'  => 'Izvēlies, lai automātiski izveidotu pieteikumu Sugar, no ienākošajiem e-pastiem.',
	'LBL_MODULE_NAME'		=> 'Grupas Pasta konts',
	'LBL_MODULE_NAME_SINGULAR' => 'Grupas e-pasta konts',
	'LBL_BOUNCE_MODULE_NAME' => 'Noraidīto e-pastu pastkaste',
	'LBL_MODULE_TITLE'		=> 'Ienākošais e-pasts',
	'LBL_NAME'				=> 'Nosaukums',
    'LBL_NONE'              => 'Nav',
	'LBL_NO_OPTIMUMS'		=> 'Nevar atrast optimālos iestatījumus.  Pārbaudiet iestatījumus un mēģiniet vēlreiz.',
	'LBL_ONLY_SINCE_DESC'	=> 'Izmantojot POP3, PHP, nevar filtrēt jaunus/neizlasītus ziņojumus.  Šis karodziņš pieprasa pārbaudīt ziņojumus kopš pēdējās pasta konta reģistrācijas.  Tādējādi var ievērojami uzlabot darbspēju, ja pasta serveris nevar atbalstīt IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Nē. Pārbaudīt, salīdzinot ar visiem pasta servera e-pastiem.',
	'LBL_ONLY_SINCE_YES'	=> 'Jā.',
	'LBL_ONLY_SINCE'		=> 'Importēt tikai kopš pēdējās pārbaudes:',
	'LBL_OUTBOUND_SERVER'	=> 'Izejošā pasta serveris',
	'LBL_PASSWORD_CHECK'	=> 'Paroles pārbaude',
	'LBL_PASSWORD'			=> 'Parole',
	'LBL_POP3_SUCCESS'		=> 'Jūsu POP3 pārbaudes pieslēgums bija veiksmīgs.',
	'LBL_POPUP_FAILURE'		=> 'Testa savienojums neizdevās. Kļūda ir parādīta zemāk.',
	'LBL_POPUP_SUCCESS'		=> 'Testa savienojums veiksmīgs. Jūsu iestatījumi darbojas.',
	'LBL_POPUP_TITLE'		=> 'Pārbaudīt iestatījumus',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Iegūst direktoriju sarakstu',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Izvēlēties abonēto katalogu',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Izvēlies atkritnes mapi',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Izvēlies nosūtīto ziņu mapi',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Sekojošie katalogi %s neeksistē vai ir izdzēsti no servera',
	'LBL_PORT'				=> 'Pasta servera ports',
	'LBL_QUEUE'				=> 'Pasta konta rinda',
	'LBL_REPLY_NAME_ADDR'	=> 'Atbildes vārds/e-pasts',
	'LBL_REPLY_TO_NAME'		=> '"Atbildēt - kam" vārds',
	'LBL_REPLY_TO_ADDR'		=> '"Atbildēt - kam" adrese',
	'LBL_SAME_AS_ABOVE'		=> 'Lietojot no vārda/adreses',
	'LBL_SAVE_RAW'			=> 'Saglabāt neapstrādāto avotu',
	'LBL_SAVE_RAW_DESC_1'	=> 'Izvēlieties "Jā", ja vēlaties saglabāt neapstrādāto avotu katram importētajam e-pastam.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Lieli pielikumi var radīt traucējumus konservatīvi vai nepareizi konfigurētām datu bāzēm.',
	'LBL_SERVER_OPTIONS'	=> 'Paplašinātā iestatīšana',
	'LBL_SERVER_TYPE'		=> 'Pasta servera protokols',
	'LBL_SERVER_URL'		=> 'Pasta servera adrese',
	'LBL_SSL_DESC'			=> 'Ja Jūsu pasta serveris atbalsta drošos soketa pieslēgumus, tad, aktivējot to, tiks iespaidoti SSL savienojumi.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Izvēlētajai darba grupai ir pieeja pasta kontam.',
	'LBL_SSL'				=> 'Lietojiet SSL',
	'LBL_STATUS'			=> 'Statuss',
	'LBL_SYSTEM_DEFAULT'	=> 'Sistēmas noklusējums',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Tests',
	'LBL_TEST_SETTINGS'		=> 'Iestatījumu pārbaude',
	'LBL_TEST_SUCCESSFUL'	=> 'Savienojums ir veiksmīgi pabeigts.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Uzgaidiet, lūdzu...',
	'LBL_TLS_DESC'			=> 'Kad pieslēdzaties pasta serverim, izmantojiet transporta slāņa drošību - lietojiet tikai tad, ja pasta serveris atbalsta šo protokolu.',
	'LBL_TLS'				=> 'Lietot TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Deaktivēts ienākošais e-pasts',
	'LBL_WARN_IMAP'			=> 'Brīdinājumi:',
	'LBL_WARN_NO_IMAP'		=> 'Ienākošais e-pasts <b>nevar</b> darboties, ja IMAP c-klienta bibliotēkas nav aktivētas/saskaņotas ar PHP moduli.  Sazinieties ar savu administratoru, lai atrisinātu šo problēmu.',

	'LNK_CREATE_GROUP'		=> 'Izveidot jaunu grupu',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Jauns grupas e-pasta konts',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Jauns noraidīto e-pastu konts',
	'LNK_LIST_MAILBOXES'	=> 'Visi pastu konti',
	'LNK_LIST_QUEUES'		=> 'Visas rindas',
	'LNK_LIST_SCHEDULER'	=> 'Plānotāji',
	'LNK_LIST_TEST_IMPORT'	=> 'Pārbaudīt E-pastu importu',
	'LNK_NEW_QUEUES'		=> 'Izveidot jaunu rindu',
	'LNK_SEED_QUEUES'		=> 'Atdaliet rindas no darba grupām',
	'LBL_GROUPFOLDER_ID'	=> 'Grupas mapes id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Piešķirt grupu mapei',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Atļaut lietotājiem izmanto kā atbildes adresi sūtītāja vārdu un adresi',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Ja opcija tiks atzīmēta, tad lietotājiem, kuriem ir pieeja grupas e-pasta konta, veidojot jaunus e-pastu, kā sūtītāja vārds un adrese var tikt izmantots grupas parametros norādītais sūtītāja vārds un adrese.',
    'LBL_STATUS_ACTIVE'     => 'Aktīvs',
    'LBL_STATUS_INACTIVE'   => 'Neaktīvs',
    'LBL_IS_PERSONAL' => 'Privāts',
    'LBL_IS_GROUP' => 'grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importēt e-pastus automātiski',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Brīdinājums: Tu modificē automātiskās importēšanas iestatījumus, kas var novest pie datu pazaudēšanas.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Brīdinājums: Jābūt atļautam automātiskajam importam, kad tiek automātiski izveidoti pieteikumi.',
	'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
);
?>
