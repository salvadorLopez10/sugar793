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
  'CHART_COUNT_PATTERN' => '{count} {module} unde {group_label} este {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} este {numerical_value}{thousands} unde {group_label} este {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} al {currency_symbol}{numerical_value}{thousands} unde {group_label} este {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Previziune Trimestru Curent',
  'DEFAULT_REPORT_TITLE_10' => 'Cazuri noi dupa Luna',
  'DEFAULT_REPORT_TITLE_11' => 'Sursa de Informatii dupa Tip si Echipa',
  'DEFAULT_REPORT_TITLE_12' => 'Sursa de Informatii dupa Echipa si Utilizator',
  'DEFAULT_REPORT_TITLE_13' => 'Sarcini dupa Echipa si Utilizator',
  'DEFAULT_REPORT_TITLE_14' => 'Apeluri dupa Echipa si Utilizator',
  'DEFAULT_REPORT_TITLE_15' => 'Intalniri dupa Echipa si Utilizator',
  'DEFAULT_REPORT_TITLE_16' => 'Conturi dupa Tip si Ramura Industriala',
  'DEFAULT_REPORT_TITLE_17' => 'Oportunitati castigate dupa Sursa Calauzelor',
  'DEFAULT_REPORT_TITLE_18' => 'Calauze dupa Sursa Calauzelor',
  'DEFAULT_REPORT_TITLE_19' => 'Unitatile Mele de Masura Utilizate (Astazi)',
  'DEFAULT_REPORT_TITLE_2' => 'Previziune Detaliata',
  'DEFAULT_REPORT_TITLE_20' => 'Unitatile Mele de Masura Utilizate (Ultimele 7 Zile)',
  'DEFAULT_REPORT_TITLE_21' => 'Unitatile Mele de Masura Utilizate (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_22' => 'Modulul meu Utilizat (Astazi)',
  'DEFAULT_REPORT_TITLE_23' => 'Modulul meu Utilizat (Ultimele 7 Zile)',
  'DEFAULT_REPORT_TITLE_24' => 'Modulul meu Utilizat (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_25' => 'Unitatile de Masura ale Utilizatorilor (Astazi)',
  'DEFAULT_REPORT_TITLE_26' => 'Unitatile de Masura ale Utilizatorilor (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_27' => 'Module Utilizate de catre Rapoartele Mele Directe (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_28' => 'Interogari Lente',
  'DEFAULT_REPORT_TITLE_29' => 'Inregistrarile Mele Modificate (Ultimele 7 Zile)',
  'DEFAULT_REPORT_TITLE_3' => 'Lista Conturi Parteneri',
  'DEFAULT_REPORT_TITLE_31' => 'Inregistrarile Mele Modificate Recent (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_32' => 'Inregistrari Modificate de catre Rapoartele Mele Directe (Ultimele 30 Zile)',
  'DEFAULT_REPORT_TITLE_4' => 'Lista Conturi Clienti',
  'DEFAULT_REPORT_TITLE_41' => 'Sesiuni ale Utilizatorilor Activi (Ultimele 7 Zile)',
  'DEFAULT_REPORT_TITLE_42' => 'Sumar al Sesiunilor Utilizatorilor (Ultimele 7 Zile)',
  'DEFAULT_REPORT_TITLE_43' => 'Posesori ai Conturilor Client',
  'DEFAULT_REPORT_TITLE_44' => 'Noile Mele Conturi Client',
  'DEFAULT_REPORT_TITLE_45' => 'Oportunitati dupa Stadiul Vanzarii',
  'DEFAULT_REPORT_TITLE_46' => 'Oportunitati dupa Tip',
  'DEFAULT_REPORT_TITLE_47' => 'Apeluri Deschise',
  'DEFAULT_REPORT_TITLE_48' => 'Intalniri Deschise',
  'DEFAULT_REPORT_TITLE_49' => 'Sarcini Deschise',
  'DEFAULT_REPORT_TITLE_5' => 'Lista de Apeluri dupa Ultima Data de Contact',
  'DEFAULT_REPORT_TITLE_50' => 'Oportunitati Castigate dupa Cont',
  'DEFAULT_REPORT_TITLE_51' => 'Oportunitati Castigate dupa Utilizator',
  'DEFAULT_REPORT_TITLE_52' => 'Totae Oportunitatile Deschise',
  'DEFAULT_REPORT_TITLE_53' => 'Totae Oportunitatile Inchise',
  'DEFAULT_REPORT_TITLE_56' => 'Oportunități de Defalcare produs pentru trecut, perioada actuală, perioada urmatoare după lună',
  'DEFAULT_REPORT_TITLE_57' => 'Oportunitati de vanzari pt perioada de timp trecuta,actuala si viitoare',
  'DEFAULT_REPORT_TITLE_58' => 'Ultimul /actualul / următorul sfert de prognoza',
  'DEFAULT_REPORT_TITLE_59' => 'Oportunitati de vanzari rapoarte pt perioada actuala',
  'DEFAULT_REPORT_TITLE_6' => 'Oportunitati dpa Sursa Calauzelor',
  'DEFAULT_REPORT_TITLE_7' => 'Cazuri Deschise dupa Utilizator si Status',
  'DEFAULT_REPORT_TITLE_8' => 'Cazuri Deschise dupa Luna si Utilizator',
  'DEFAULT_REPORT_TITLE_9' => 'Cazuri Deschise dupa Prioritate si Utilizator',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'La fiecare Ora',
    21600 => 'La fiecare 6 Ore',
    43200 => 'La fiecare 12 Ore',
    86400 => 'Zilnic',
    604800 => 'Saptamanal',
    1209600 => 'La fiecare 2 Saptamani',
    2419200 => 'La fiecare 4 Saptamani',
  ),
  'ERR_REPORT_INVALID' => 'Definiţia de raport "{0}", conţine câmpurile invalide: {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Raport invalid',
  'ERR_SELECT_COLUMN' => 'Va rugam sa selectati o coloana afisata mai intai',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Raport Pe',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtru',
  'LBL_3_CHOOSE' => '3. Alege Coloanele Vizualizate',
  'LBL_3_GROUP' => '3. Grup',
  'LBL_4_CHOOSE' => '4. Alege Coloanele Vizualizate',
  'LBL_5_CHART_OPTIONS' => '5. Optiuni Diagrama',
  'LBL_ACCOUNT' => 'Conturi',
  'LBL_ACCOUNTS' => 'Conturi',
  'LBL_ACCOUNT_REPORTS' => 'Rapoarte cont',
  'LBL_ACTIVITIES_REPORTS' => 'Raport Activitati',
  'LBL_ADDED_FAVORITES' => 'raport(e) adaugate la Rapoartele Mele Favorite',
  'LBL_ADD_BTN_HELP' => 'Da click pentru a adauga un nou Grup de Filtre. Utilizeaza grupuri pentru a aplica operatori logici SI/SAU in setarea filtrelor.',
  'LBL_ADD_COLUMN' => 'Adauga Coloana',
  'LBL_ADD_FILTER_TO' => 'Adauga Filtru la',
  'LBL_ADD_GROUP' => 'Adauga Grup de Filtre',
  'LBL_ADD_NEW_FILTER' => 'Adauga Filtru Nou',
  'LBL_ADD_RELATE' => 'Adauga Relationat',
  'LBL_ADVANCED_FILTERS' => 'Filtre Avansate',
  'LBL_AFTER' => 'Dupa',
  'LBL_ALERT_CANT_ADD' => 'Nu puteti adauga un modul relationat pana nu selectati un tabel cu care sa-l relationati.\\nSelectati un modul in lista derulanta stanga a butonului "Adauga Relationat" pe care ati dat click.',
  'LBL_ALL' => 'Cel putin',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Toate Rapoartele publicate',
  'LBL_ALL_REPORTS' => 'Vizualizeaza Rapoarte',
  'LBL_ALT_INFORMATION' => 'Informatie',
  'LBL_ALT_SHOW' => 'Arata',
  'LBL_AND' => 'si',
  'LBL_ANY' => 'Oricare',
  'LBL_ANY_ONE_OF' => 'Oricare Din',
  'LBL_ASCENDING' => 'Ascendent',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Selectati cel putin o coloana afisata',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Cel putin o coloana de sumar',
  'LBL_AVAILABLE_FIELDS' => 'Campuri Disponibile',
  'LBL_AVG' => 'MEDIE',
  'LBL_BASIC_FILTERS' => 'Biltre de Baza',
  'LBL_BEFORE' => 'Inainte',
  'LBL_BUG_REPORTS' => 'Rapoarte bug',
  'LBL_BY_DAY' => 'Dupa Zi',
  'LBL_BY_MONTH' => 'Dupa Luna',
  'LBL_BY_QUARTER' => 'Dupa Trimestru',
  'LBL_BY_YEAR' => 'Dupa An',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Lista de apeluri dupa ultima data cand a fost contactat',
  'LBL_CALL_REPORTS' => 'Raporturi Apleuri',
  'LBL_CANCEL' => 'Anulare',
  'LBL_CANNOT_BE_EMPTY' => 'nu poate fi gol.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Diagrama nu poate fi afișata din cauza configurației sale.',
  'LBL_CASE_REPORTS' => 'Rapoarte caz',
  'LBL_CHANGE' => 'Schimba',
  'LBL_CHART_DATA_HELP' => 'Selectati Sumarul care va fi afisat in diagrama.',
  'LBL_CHART_DESCRIPTION' => 'Descriere',
  'LBL_CHART_OPTIONS' => 'Optiuni Diagrama',
  'LBL_CHART_TYPE' => 'Tip Diagrama',
  'LBL_CHOOSE_COLUMNS' => 'Alege coloane pentru vizualizare',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Alege Vizualizare Coloane',
  'LBL_CHOOSE_SUMMARIES' => 'Alege sumare pentru vizualizare',
  'LBL_CLEAR' => 'Sterge',
  'LBL_COLUMN_NAME' => 'Nume Columna',
  'LBL_COMBO_TYPE_AHEAD' => 'Cautare Camp',
  'LBL_CONTACT' => 'Contact',
  'LBL_CONTACTS' => 'Contacte',
  'LBL_CONTACT_REPORTS' => 'Rapoarte contact',
  'LBL_CONTAINS' => 'Contine',
  'LBL_CONTENT' => 'Continut',
  'LBL_CONTRACT_REPORTS' => 'Rapoarte de Contract',
  'LBL_COUNT' => 'Numara',
  'LBL_CREATE_CUSTOM_REPORT' => 'Vrajitorul de Rapoarte',
  'LBL_CREATE_REPORT' => 'Creeaza Raport',
  'LBL_CSV_TIMESTAMP' => 'A_l_z_O_m_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Afaceri Lansate ale Trimestrului Curent',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Previziune pentru Trimestrul Curent',
  'LBL_CURRENT_USER' => 'Utilizator Curent',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Lista Conturi Clienti',
  'LBL_DATE' => 'Data de Start',
  'LBL_DATE_BASED_FILTERS' => 'Filtrele de data sunt legate de zona de timp a raportului utilizatorului Alocat Lui',
  'LBL_DAY' => 'Zi',
  'LBL_DEFINE_FILTERS' => 'Defineste Filtru',
  'LBL_DELETE' => 'Sterge',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Urmatorul camp din acest raport nu mai este valid:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Va rugam sa Editati raportul si sa verificati pentru a va asigura ca ceilalti parametri sunt relevanti inca.',
  'LBL_DELETE_ERROR' => 'Numai posesorii rapoartelor sau Administatorii pot sterge rapoartele.',
  'LBL_DEL_THIS' => 'Inlatura',
  'LBL_DESCENDING' => 'Descendent',
  'LBL_DETAILED_FORECAST' => 'Previziune Detaliata',
  'LBL_DISPLAY_COLS_HELP_DESC' => '1) Faceţi clic pe un modul în panoul aferente Module pe care doriţi să utilizaţi pentru a afişa date în raport. În mod implicit, modul de primar (nod de top în vizualizarea arborescentă), pe care aţi ales în timpul pas "Select Modulul" este selectat.<br /><br />Aveţi posibilitatea să selectaţi câmpurile de la un modul legate de (nodul copil în vizualizarea arborescentă), făcând clic pe modul. Module referitoare la modulele referitoare la modul de primar poate fi, de asemenea, selectate.Modul pe care îl selectaţi determină ce domenii raportabile apar în panoul Câmpuri disponibile.<br /><br />2) Faceţi clic pe câmp în panoul Câmpuri disponibile pentru a afişa datele de câmp din înregistrările din raport. Puteţi căuta, de asemenea, pentru câmp prin tastarea în caseta de text în panou.<br /><br />După ce selectaţi orice număr de domenii de la modulul selectat în panoul aferent Module, puteţi alege un modul diferit de la care puteţi selecta câmpuri suplimentare. Aveţi posibilitatea să selectaţi orice număr de domenii, dar raportul este generat mai lent si devine mai greu de citit, atunci când adăugaţi mai mult de câmpuri necesare în raport.<br /><br />Aveţi posibilitatea să modificaţi câmpurile de ordine prin glisarea şi fixarea acestora în poziţia dorită. Schimbarea ordinii domeniul schimbă ordinea în care coloanele sunt afişate în rezultatele.',
  'LBL_DISPLAY_COLUMNS' => 'Afiseaza Coloane',
  'LBL_DISPLAY_SUMMARIES' => 'Alege Vizualizarea Sumarelor',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '1) Faceţi clic pe modulul în panoul aferente Module pe care doriţi să utilizaţi pentru rezumate în raportul dumneavoastră. În mod implicit, modul de primar (nod de top în vizualizarea arborescentă) este selectată.<br /><br />Aveţi posibilitatea să selectaţi un modul legate de (nodul copil în vizualizarea arborescentă), făcând clic pe modul. Extindeţi nodul pentru a vizualiza modulele suplimentare referitoare la modul aferente.Modul pe care îl selectaţi determină ce domenii raportabile apar în panoul Câmpuri disponibile.<br /><br />2) Faceţi clic pe un câmp din panoul Câmpuri disponibile pentru a selecta rezumate pentru raport. Puteţi căuta, de asemenea, pentru câmp prin tastarea în caseta de text în panoul.<br /><br />După ce selectaţi orice număr de domenii de la modulul selectat în panoul aferente Module, puteţi alege un modul diferit de la care puteţi selecta câmpuri suplimentare pentru rezumate în raportul dumneavoastră.<br /><br />Pentru rapoarte Matrix, puteţi selecta mai mult de un câmp pentru a afişa mai multe valori într-o singură celulă în raportul dumneavoastră.',
  'LBL_DOES_NOT_CONTAIN' => 'Nu Contine',
  'LBL_DOES_NOT_EQUAL' => 'Nu Este Egal',
  'LBL_DOWN' => 'Jos',
  'LBL_DO_ROUND' => 'Numere peste 100000 Rotunjite',
  'LBL_DO_ROUND_HELP' => 'Numere peste 100000 vor fi rotunjite in diagrame.<br />Exemplu: 350000 va fi exprimat ca 350k.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Ca Matrice',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Ca Tipul Original',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Ca Linii si Coloane',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Ca Insumare cu Detalii',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Ca Insumare',
  'LBL_EDIT' => 'Editeaza',
  'LBL_EDITLAYOUT' => 'Editeaza Plan General',
  'LBL_EMAIL_REPORTS' => 'Raporturi Email',
  'LBL_ENDS_WITH' => 'Se Sfarseste Cu',
  'LBL_END_DATE' => 'Data Sfarsit',
  'LBL_EQUALS' => 'Egal',
  'LBL_EXACT' => 'Exact',
  'LBL_EXPORT' => 'Exporta',
  'LBL_FAILURE_REPORT' => 'ESEC: Raport',
  'LBL_FAVORITE' => 'Favorit',
  'LBL_FAVORITES_TITLE' => 'Rapoartele Mele Favorite',
  'LBL_FAVORITE_REPORTS' => 'Favoritele Mele',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Rapoartele Mele Favorite',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Toate campurile raportabile din modulul selectat in cadrul Modulelor Relationate apar aici. Selectati un camp.',
  'LBL_FIELD_NAME' => 'Nume Camp',
  'LBL_FILTER' => 'Filtru',
  'LBL_FILTERS' => 'Filtre',
  'LBL_FILTERS_END' => 'din urmatoarele filtre.',
  'LBL_FILTERS_HELP_DESC' => 'Pasi pentru a Defini Filtre:<br /><br />1) Da click pe Modul in cadrul panoului Module Relationate pe care doresti sa-l utilizezi in definirea filtrelor. In mod implicit, modulul primar (nodul din partea de sus a vizualizarii arborescente) este selectat.<br /><br />Puteti selecta un modul relationat (nodul-copil in vizualizarea arborescenta) dand click pe modul. Extindeti nodul pentru a vizualiza module aditionale relationate cu modulul relationat respectiv. Modulul selectat determina care campuri raportabile apar in panoul Campuri Disponibile.<br /><br />2) Dati click pe un Camp in cadrul panoului Campuri Disponibile pentru a-l adauga la filtre. Poti de asemenea sa cauti campul tastand in caseta de text din cadrul panoului.<br /><br />Dupa ce ati selectionat orice numar de campuri din modulul selectat in cadrul panoului Module Relationate, puteti alege un modul diferit din care puteti selectiona orice numar de campuri pentru a fi utilizate ca filtre.<br /><br />3) Alegeti SI ori SAU pentru a desemna daca toate filtrele sau, respectiv oricare din filtre, sunt utilizate pentru a gasi rezultate pentru raport.<br /><br />4) [Optional] Da click pe Adauga Grup de Filtre pentru a crea grupuri de filtre. Poti avea orice numar de grupuri de filtre si orice numar de de filtre in cadrul grupului pentru a crea filtre cuibarite.<br /><br />5) [Optional] Selecteaza optiunea Ruleaza-Timp pentru un Filtru, pentru a permite utilizatorilor sa foloseasca filtrul in vederea particularizarii ulterioare ale rezultatelor rapoartelor, in timp ce vizualizeaza raportul.',
  'LBL_FILTER_AND' => 'SI',
  'LBL_FILTER_CONDITIONS' => 'Selectati Operator:',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'La',
  'LBL_FILTER_DATE_RANGE_START' => 'De la',
  'LBL_FILTER_OR' => 'SAU',
  'LBL_FORECAST_REPORTS' => 'Raport Previziune',
  'LBL_FUNNEL' => 'Palnie',
  'LBL_GRAND_TOTAL' => 'Total Mare',
  'LBL_GREATER_THAN' => 'Mai Mare Ca',
  'LBL_GREATER_THAN_EQUAL' => 'mai mult sau egal cu',
  'LBL_GROUP_BY' => 'Grupat dupa',
  'LBL_GROUP_BY_HELP_DESC' => 'Pasi pentru Definirea Grupului dupa:<br /><br />1) Dati click pe un Modul, in cadrul panoului Module Relationate, pe care doriti sa-l utilizati pentru a grupa inregistrari in raportul dumneavoastra. In mod implicit, modulul primar (nodul din varf in cadrul vizualizarii arborescente) este selectat.<br /><br />Puteti selecta un modul relationat (nod-copil in cadrul vizualizarii arborescente) dand click pe acest modul. Extindeti nodul pentru a vizualiza module aditionale relationate cu modulul relationat respectiv. Modulul pe care il selectati determina care campuri raportabile apar in panoul Campuri Disponibile.<br /><br />2) Dati click pe Camp, in panoul Campuri Disponibile, pentru a grupa inregistrari dupa camp, in cadrul raportului dumneavoastra. Puteti, de asemenea, sa cautati campul tastand in caseta tip text din cadrul panoului.<br /><br />Dupa selectionarea oricarui numar de campuri din modulul selectat in cadrul panoului Module Relationate, puteti alege un modul diferit din care puteti selecta orice numar de campuri pentru a grupa inregistrari. Totusi, raportul va deveni mai putin lizibil cand gruparea se executa dupa mai mult de cateva campuri.<br /><br />Puteti schimba ordinea campurilor tragandu-le si aruncandu-le in pozitia dorita. Schimbarea ordinii afecteaza felul in care rezultatele sunt afisate.<br /><br />Pentru Rapoarte tip Matrice puteti folosi un numar maxim de trei campuri pentru a grupa inregistrari.',
  'LBL_GROUP_BY_REQUIRED' => 'Cel putin',
  'LBL_HELLO' => 'Buna',
  'LBL_HELP' => 'Ajutor',
  'LBL_HIDE_COLUMNS' => 'Ascunde Coloane',
  'LBL_HIDE_SUMMARIES' => 'Ascunde Sumarele',
  'LBL_HORIZ_BAR' => 'Bara Orizontala',
  'LBL_IS' => 'Este',
  'LBL_IS_BETWEEN' => 'Este Intre',
  'LBL_IS_EMPTY' => 'Este Gol',
  'LBL_IS_NOT' => 'Nu este',
  'LBL_IS_NOT_EMPTY' => 'Nu este Gol',
  'LBL_IS_NOT_ONE_OF' => 'Nu este una din',
  'LBL_IS_PUBLISHED' => 'Este Publicat',
  'LBL_LABEL' => 'Eticheta',
  'LBL_LAST_30_DAYS' => 'Ultimele 30 Zile',
  'LBL_LAST_7_DAYS' => 'Ultimele 7 Zile',
  'LBL_LAST_MONTH' => 'Ultima Luna',
  'LBL_LAST_QUARTER' => 'Ultimul Trimestru',
  'LBL_LAST_WEEK' => 'Ultima Saptamana',
  'LBL_LAST_YEAR' => 'Ultimul An',
  'LBL_LEAD' => 'Prospect',
  'LBL_LEADS' => 'Prospecti',
  'LBL_LEAD_REPORTS' => 'Rapoarte prospect',
  'LBL_LEFT' => 'Stanga',
  'LBL_LESS_THAN' => 'Mai Putin Decat',
  'LBL_LESS_THAN_EQUAL' => 'Mai puțin sau Egal cu',
  'LBL_LINE' => 'Kinie',
  'LBL_LIST_FORM_TITLE' => 'Rapoarte',
  'LBL_LIST_PUBLISHED' => 'Publicat',
  'LBL_MATRIX_LAYOUT' => 'Optiuni Schita:',
  'LBL_MATRIX_REPORT' => 'Raport Matrice',
  'LBL_MATRIX_REPORT_DESC' => 'Creaza un raport de insumare care afiseaza rezultate intr-un format gratar grupat dupa maxim trei campuri.',
  'LBL_MAX' => 'MAXIM',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Un Raport Matrice nu poate avea mai mult de 3 clauze grupate-dupa.',
  'LBL_MEETING_REPORTS' => 'Raporturi Intalniri',
  'LBL_MIN' => 'MINIM',
  'LBL_MINIMUM_2_GROUP_BY' => 'Un Raport Matrice trebuie sa aiba cel putin 2 clauze grupate-dupa.',
  'LBL_MISSING_FIELDS' => 'Campuri lipsa',
  'LBL_MISSING_INPUT_VALUE' => 'lipsa valoare de intrare.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'lipsa a doua valoare de intrare.',
  'LBL_MODULE' => 'modul',
  'LBL_MODULE_CHANGE_PROMPT' => 'Schimbarea modulului selectat va determina pierderea filtrelor, afisarea coloanelor, etc. Mai doriti sa continuati?',
  'LBL_MODULE_NAME' => 'Rapoarte',
  'LBL_MODULE_NAME_SAVED' => 'Nume Modul',
  'LBL_MODULE_NAME_SINGULAR' => 'Raport',
  'LBL_MODULE_TITLE' => 'Rapoarte: Acasa',
  'LBL_MODULE_VIEWER_TITLE' => 'Vizualizator Rapoarte: Acasa',
  'LBL_MONTH' => 'Luna',
  'LBL_MORE' => 'Mai mult...',
  'LBL_MY_ACCOUNT_REPORTS' => 'Rapoartele Contului Meu',
  'LBL_MY_BUG_REPORTS' => 'Rapoartele Disfunctionalitatilor Mele',
  'LBL_MY_CALL_REPORTS' => 'Rapoartele Apelurilor Mele',
  'LBL_MY_CASE_REPORTS' => 'Rapoartele Cazului Meu',
  'LBL_MY_CONTACT_REPORTS' => 'Rapoartele Contului Meu',
  'LBL_MY_CONTRACT_REPORTS' => 'Rapoartele mele de Contract',
  'LBL_MY_EMAIL_REPORTS' => 'Rapoartele Email-urior Mele',
  'LBL_MY_FORECAST_REPORTS' => 'Rapoartele Previziunilor Mele',
  'LBL_MY_LEAD_REPORTS' => 'Rapoartele Calauzelor Mele',
  'LBL_MY_MEETING_REPORTS' => 'Rapoartele Intalnirilor Mele',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Rapoartele Oportunitatilor Mele',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Rapoartele Mele de Sarcini de Proiect',
  'LBL_MY_PROSPECT_REPORTS' => 'Rapoartele Tintelor Mele',
  'LBL_MY_QUOTE_REPORTS' => 'Rapoartele Cotelor Mele',
  'LBL_MY_REPORTS' => 'Rapoartele mele',
  'LBL_MY_SAVED_REPORTS' => 'Rapoartele mele salvate',
  'LBL_MY_TASK_REPORTS' => 'Rapoartele Sarcinilor Mele',
  'LBL_MY_TEAMS_REPORTS' => 'Rapoartele echipei mele',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Raporturile de Conturi ale Echipei Mele',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Rapoartele de Disfunctionalitati ale Echipei Mele',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Rapoartele de Apeluri ale Echipei Mele',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Rapoartele de Caz ale Echipei Mele',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Rapoartele de Contacte ale Echipei Mele',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Rapoartele de Contract ale Echipei Mele',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Rapoartele de Email-uri ale Echipei Mele',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Rapoartele de Previziuni ale Echipei Mele',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Rapoartele de Calauze ale Echipei Mele',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Rapoartele de Intalniri ale Echipei Mele',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Rapoartele de Oportunitati ale Echipei Mele',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Rapoartele de Sarcini de Proiect ale Echipei Mele',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Rapoartele de Tinta ale Echipei Mele',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Rapoartele de Cote ale Echipei Mele',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Rapoartele de Sarcini ale Echipei Mele',
  'LBL_NEXT' => 'Urmatorul>',
  'LBL_NEXT_30_DAYS' => 'Urmatoarele 30 Zile',
  'LBL_NEXT_7_DAYS' => 'Urmatoarele 7 Zile',
  'LBL_NEXT_MONTH' => 'Luna urmatoare',
  'LBL_NEXT_QUARTER' => 'Trimestrul Urmator',
  'LBL_NEXT_RUN' => 'Urmatorul Email',
  'LBL_NEXT_WEEK' => 'Saptamana urmatoare',
  'LBL_NEXT_YEAR' => 'Anul urmator',
  'LBL_NONE' => '-- Niciunul --',
  'LBL_NONE_STRING' => 'Niciunul',
  'LBL_NOTHING_WAS_SELECTED' => 'nu a fost selectat nimic.',
  'LBL_NOT_ON' => 'Nu pe',
  'LBL_NO_ACCESS' => 'Nu poti accesa acest raport din cauza restrictiilor de permisiune.',
  'LBL_NO_CHART' => 'Nu exista Diagrama',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Grafic imposibil de schitat din cauza datelor insuficiente',
  'LBL_NO_FILTERS' => 'nu are filtre.',
  'LBL_NO_IMAGE' => 'Fara Imagine',
  'LBL_NO_REPORTS' => 'Fara rezultate',
  'LBL_OF' => 'din',
  'LBL_ON' => 'Pe',
  'LBL_ONE_OF' => 'Este una din',
  'LBL_OPPORTUNITIES' => 'Oportunitati',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Oportunitati dupa Sursa Calauzitoare',
  'LBL_OPPORTUNITY' => 'Oportunitati',
  'LBL_OPPORTUNITY_REPORTS' => 'Rapoarte oportunitate',
  'LBL_OPTIONAL_HELP' => 'Selectati casutele in care sa se afiseze inregistrarile modulului primar chiar daca modulul de inregsitrari relationat nu exista. Cand casuta nu este selectata, modulul de inregistrari primar va fi afisat numai daca are unul sau mai multe module de inregistrari relationate.',
  'LBL_OPTIONAL_MODULES' => 'Module Optionale',
  'LBL_ORDER_BY' => 'Sortat dupa',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Module Relationate Optionale',
  'LBL_OWNER' => 'Atribuit lui',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Lista Conturi Parteneri',
  'LBL_PDF_TIMESTAMP' => 'A_l_z_O_m',
  'LBL_PIE' => 'Placinta',
  'LBL_PREVIEW_REPORT' => 'Previzualizare',
  'LBL_PREVIOUS' => '<Inapoi',
  'LBL_PROJECT_TASK_REPORTS' => 'Rapoarte de Sarcini de Proiect',
  'LBL_PROSPECT_REPORTS' => 'Rapoarte Tinta',
  'LBL_PUBLISH' => 'publica',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Rapoarte Contabile Publicate',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Rapoarte de Disfunctionalitati Publicate',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Rapoarte de Apeluri Publicate',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Rapoarte de Cazuri Publicate',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Rapoarte de Contate Publicate',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Rapoarte de Contract Publicate',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Rapoarte de Email Publicate',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Rapoarte de Previziuni Publicate',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Rapoarte de Calauza Publicate',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Rapoarte de Intalniri Publicate',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Rapoarte de Oportunitati Publicate',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Rapoarte de Sarcini de Proiect Publicate',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Rapoarte de Tinta Publicate',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'Rapoarte de cota publicate',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Rapoarte de Cote Publicate',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Rapoarte de Sarcini Publicate',
  'LBL_QUARTER' => 'Trimestru',
  'LBL_QUARTER_ABBREVIATION' => 'T',
  'LBL_QUERY' => 'Interogare',
  'LBL_QUOTE_REPORTS' => 'Raporturi Cuote',
  'LBL_RELATED' => 'Relationat:',
  'LBL_RELATED_MODULES' => 'Module Relationate',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Modulul primar si toate modulele relationate cu acesta apar aici. Selectati un modul.',
  'LBL_RELATED_TABLE_BLANK' => 'Va rugam sa selectati un modul la care sa va relationati.',
  'LBL_REMOVE' => 'Sterge',
  'LBL_REMOVED_FAVORITES' => 'raport(e) inalturat din Rapoartele Mele Favorite',
  'LBL_REMOVE_BTN_HELP' => 'Da click pentru a inlatura acest Grup de Filtre.',
  'LBL_REMOVE_GROUP' => 'Inlatura Grup de Filtre',
  'LBL_REPORTS' => 'Rapoarte',
  'LBL_REPORTS_TO' => 'Raporteaza Catre:',
  'LBL_REPORT_ATT_MODULES' => 'Module',
  'LBL_REPORT_ATT_NAME' => 'Nume',
  'LBL_REPORT_COLLAPSE_ALL' => 'Strange Totul',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Acest raport contine date in urmatoarele ordine ale coloanelor:',
  'LBL_REPORT_DETAILS' => 'Detalii Raport',
  'LBL_REPORT_EXPAND_ALL' => 'Extinde Totul',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Filtrele de rapoarte au fost modificate de la ultima rulare.',
  'LBL_REPORT_GRAND_TOTAL' => 'Total Mare',
  'LBL_REPORT_GROUP_BY' => 'Grupat dupa',
  'LBL_REPORT_HIDE_CHART' => 'Ascunde Graficul',
  'LBL_REPORT_HIDE_DETAILS' => 'Ascunde Detalii',
  'LBL_REPORT_LAST_RUN_DATE' => 'Accesat la',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Rapoartele au fost modificate de la ultima rulare.',
  'LBL_REPORT_MODULES' => 'Raportare Module',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Vizualizator Rapoarte',
  'LBL_REPORT_NAME' => 'Nume raport',
  'LBL_REPORT_RESET_FILTER' => 'Reseteaza',
  'LBL_REPORT_RESULTS' => 'Rezultate',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Apasati pe Ruleaza Raport pentu a vizualiza rezultatele.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Aplica',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Orar',
  'LBL_REPORT_SHOW_CHART' => 'Afiseaza Graficul',
  'LBL_REPORT_SHOW_DETAILS' => 'Arata Detalii',
  'LBL_REPORT_TYPE' => 'Tip raport',
  'LBL_REPORT__ATT_TYPE' => 'Tip',
  'LBL_RIGHT' => 'Dreapta',
  'LBL_ROLLOVER' => 'Intoarce o bara pentru detalii',
  'LBL_ROLLOVER_SQUARE' => 'Intoarce un patrat pentru detalii',
  'LBL_ROLLOVER_WEDGE' => 'Intoarce o pana pentru detalii',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Raport tip Linii si Coloane',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Creaza un raport tabular care contine valorile campurilor afisate selectate pentru inregistrari care corespund criteriilor specificate.',
  'LBL_RUNTIME_FILTERS' => 'Filtre Rulare-Timp',
  'LBL_RUNTIME_HELP' => 'Selectati aceasta casuta pentru a permite utilizatorilor sa schimbe valorile filtrului inainte de a rula raportul.',
  'LBL_RUN_BUTTON_TITLE' => 'Ruleaza Raport [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Ruleaza Raport',
  'LBL_RUN_TIME_LABEL' => 'Ruleaza-Timp',
  'LBL_SAVED_SEARCH' => 'Cautari salvate & Aspect',
  'LBL_SAVE_AS' => 'Salveaza Ca',
  'LBL_SAVE_RUN' => 'Salveaza si Ruleaza',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'si salvat cu numele de "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => 'Daca doriti sa schimbati setarile raportului dumneavoastra, conectativa la aplicatia Sugar si dati click pe fila "Rapoarte".',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Atasat se afla un raport auto -generat expediat dumneavoastra de catre aplicatia Sugar. Acest raport a fost creat pe',
  'LBL_SCHEDULE_ACTIVE' => 'Activ',
  'LBL_SCHEDULE_EMAIL' => 'Programeaza Raport',
  'LBL_SCHEDULE_REPORT' => 'Programeaza Raport',
  'LBL_SCHEDULE_TYPE' => 'Tip de Orar',
  'LBL_SEARCH_FORM_TITLE' => 'Raport Lista',
  'LBL_SELECT' => 'Selecteaza',
  'LBL_SELECT_GROUP_BY' => 'Defineste Grup dupa',
  'LBL_SELECT_MODULE' => 'Selectaţi Modulul',
  'LBL_SELECT_MODULE_BUTTON' => 'Da click pe o icoana pentru a selecta un Modul.',
  'LBL_SELECT_RECORD' => 'Selectie Inregistrare',
  'LBL_SELECT_REPORT_TYPE' => 'Da click pe o icoana pentru a selecta un Tip de Raport',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Selecteaza Tip de Raport',
  'LBL_SHOW' => 'Arata',
  'LBL_SHOW_DETAILS' => 'Arata Detalii',
  'LBL_SHOW_QUERY' => 'Arata Interogarea',
  'LBL_SORT' => 'Sorteaza',
  'LBL_STARTS_WITH' => 'Incepe Cu',
  'LBL_START_DATE' => 'Data Inceput:',
  'LBL_STATUS' => 'Statut',
  'LBL_SUBJECT' => 'Subiect',
  'LBL_SUBMIT_QUERY' => 'Expediaza Interogare',
  'LBL_SUCCESS_REPORT' => 'SUCCES: Raport',
  'LBL_SUM' => 'SUMA',
  'LBL_SUMMARY_COLUMNS' => 'Coloane de Sumar',
  'LBL_SUMMATION_REPORT' => 'Raport de Insumare',
  'LBL_SUMMATION_REPORT_DESC' => 'Creaza un raport tabular care asigura date prelucate pentru inregistrari care corespund criteriilor specificate. Datele pot fi reprezentate de asemenea in cadrul unui grafic.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Raport de Insumare Detaliat',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Creaza un raport de insumare care afiseaza date aditionale relationate cu inregistrarile din rezultate.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Insumare cu Detalii',
  'LBL_TABLE_CHANGED' => 'Lista Module a fost modificata, va rugam verificati din nou criteriile introduse in tab-ul Grup.',
  'LBL_TASK_REPORTS' => 'Raporturi Sarcini',
  'LBL_TEAM' => 'Echipe',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Nu exista rapoarte de acest tip',
  'LBL_THIS_MONTH' => 'Acesat Luna',
  'LBL_THIS_QUARTER' => 'Acest Trimestru',
  'LBL_THIS_WEEK' => 'Aceasta Saptamana',
  'LBL_THIS_YEAR' => 'Acest An',
  'LBL_TIME_INTERVAL' => 'Interval de Timp',
  'LBL_TITLE' => 'Titlu',
  'LBL_TODAY' => 'Astazi',
  'LBL_TOMORROW' => 'Maine',
  'LBL_TOTAL' => 'Total',
  'LBL_TOTAL_IS' => 'Totalul este',
  'LBL_TO_PDF' => 'Salveaza ca PDF',
  'LBL_TYPE' => 'Tip',
  'LBL_UNTITLED' => 'fara titlu',
  'LBL_UN_PUBLISH' => 'nepublicat',
  'LBL_UP' => 'Sus',
  'LBL_UPDATE_SCHEDULE' => 'Actualizeaza Orar',
  'LBL_USER_EMPTY_HELP' => 'Pentru a putea vizualiza inregistrarile care nu sunt alocate niciunui Utilizator, bifati casuta "Module Relationate Optionale" in cadrul pasului "Detalii Raport", aditional utilizarii optiunii "Este Gol" pentru filtrul Utilizatorului Alocat.',
  'LBL_USE_COLUMN_FOR' => 'Serii de Date',
  'LBL_VERT_BAR' => 'Bara Verticala',
  'LBL_VIEW' => 'vizualizare',
  'LBL_VIEWER_RUNTIME_HELP' => 'Specificati valori pentru Filtrele Ruleaza-Timp si apasati butonul Aplica Filtre pentru a rula din nou raportul.',
  'LBL_WAS_NOT_SAVED' => 'nu a fost salvat',
  'LBL_WAS_SAVED' => 'a fost salvat',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Cantitate Medie Cantarita',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Cantitate Insumata Cantarita',
  'LBL_WHOSE_MAXIMUM' => 'al carui maxim',
  'LBL_WHOSE_MINIMUM' => 'al carui minim',
  'LBL_WITH_AN_AVERAGE' => 'cu o medie',
  'LBL_WITH_A_TOTAL' => 'cu un total',
  'LBL_WITH_DETAILS' => 'Cu Detalii',
  'LBL_YEAR' => 'An',
  'LBL_YESTERDAY' => 'Ieri',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Nu aveti rapoarte salvate.',
  'LNK_NEW_ACCOUNT' => 'Creeaza Cont',
  'LNK_NEW_CALL' => 'Jurnal Apeluri',
  'LNK_NEW_CASE' => 'Creaza Caz',
  'LNK_NEW_CONTACT' => 'Creaza Contact',
  'LNK_NEW_EMAIL' => 'Arhiva Email',
  'LNK_NEW_MEETING' => 'Orar Intalniri',
  'LNK_NEW_NOTE' => 'Creaza Nota sau Atasament',
  'LNK_NEW_OPPORTUNITY' => 'Creeaza Oportunitate',
  'LNK_NEW_TASK' => 'Creaza sarcina',
  'MSG_NO_PERMISSIONS' => 'Nu aveti permisiunea sa editati acest raport',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Nu se poate publica. Exista un alt Raport publicat cu acelasi nume.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Nu se poate retrage din publicare un Raport care apartine altui utilizator. Detineti un Raport cu acelasi nume.',
);

