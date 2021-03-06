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
  'ERR_DELETE_RECORD' => 'Du må oppgi postens nummer for å slette kontoen.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Den ansattes navn',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'finnes allerede. Dubletter er ikke lov. Lag nytt navn.',
  'ERR_LAST_ADMIN_1' => 'Den ansattes navn "',
  'ERR_LAST_ADMIN_2' => '" er siste ansatt med adm.tilgang. Minst én ansatt må være administrator.',
  'LBL_ADDRESS' => 'Adresse:',
  'LBL_ADDRESS_CITY' => 'Adresse By',
  'LBL_ADDRESS_COUNTRY' => 'Adresse Land',
  'LBL_ADDRESS_INFORMATION' => 'Adresseinformasjon',
  'LBL_ADDRESS_POSTALCODE' => 'Adresse Postkode',
  'LBL_ADDRESS_STATE' => 'Adresse Stat',
  'LBL_ADDRESS_STREET' => 'Adresse Gate',
  'LBL_ADMIN' => 'Administrator:',
  'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
  'LBL_ANY_EMAIL' => 'En e-postadresse:',
  'LBL_ANY_PHONE' => 'Et telefonnummer:',
  'LBL_AUTHENTICATE_ID' => 'Godkjenning ID',
  'LBL_CITY' => 'By:',
  'LBL_COUNTRY' => 'Land:',
  'LBL_CREATED_BY_NAME' => 'Opprettet av',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Opprett bruker',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Opprett bruker [Alt+N]',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_ENTERED' => 'Opprettet Dato',
  'LBL_DATE_FORMAT' => 'Datoformat',
  'LBL_DATE_MODIFIED' => 'Endret Dato',
  'LBL_DEFAULT_TEAM' => 'Standard Team:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Velg default team for ny oppføring',
  'LBL_DELETED' => 'Slettet',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Er du sikker på at du vil slette denne ansatte?',
  'LBL_DELETE_USER_CONFIRM' => 'Den ansatte er også en bruker. Ved å slette ansatteposten vil også brukerposten bli slettet, og brukeren vil ikke lenger ha tilgang til programmet. Vil du fortsette med å slette denne posten?',
  'LBL_DEPARTMENT' => 'Avdeling:',
  'LBL_DESCRIPTION' => 'Beskrivelse',
  'LBL_EMAIL' => 'E-post:',
  'LBL_EMAIL_ADDRESS' => 'E-postadresse',
  'LBL_EMAIL_LINK_TYPE' => 'Epost-klient',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Sugar Mail-klient: Send epost med epost-klienten i SugarCRM.',
  'LBL_EMPLOYEE' => 'Ansatte:',
  'LBL_EMPLOYEE_INFORMATION' => 'Ansattinformasjon',
  'LBL_EMPLOYEE_NAME' => 'Ansattnavn:',
  'LBL_EMPLOYEE_SETTINGS' => 'Ansattinnstillinger',
  'LBL_EMPLOYEE_STATUS' => 'Ansattstatus:',
  'LBL_ERROR' => 'Feil:',
  'LBL_EXT_AUTHENTICATE' => 'Ekstern godkjenning',
  'LBL_FAVORITE_COLOR' => 'Yndlingsfarge:',
  'LBL_FAX' => 'Faks:',
  'LBL_FAX_PHONE' => 'Faks',
  'LBL_FF_CLEAR' => 'Fjern',
  'LBL_FIRST_NAME' => 'Fornavn:',
  'LBL_GROUP' => 'Gruppebruker?',
  'LBL_GROUP_USER' => 'Gruppebruker',
  'LBL_HOME_PHONE' => 'Hjem:',
  'LBL_IS_ADMIN' => 'Er administrator?',
  'LBL_LANGUAGE' => 'Språk:',
  'LBL_LAST_NAME' => 'Etternavn:',
  'LBL_LIST_ACCEPT_STATUS' => 'Akseptér Status',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Avdeling',
  'LBL_LIST_DESCRIPTION' => 'Beskrivelse',
  'LBL_LIST_EMAIL' => 'E-post',
  'LBL_LIST_EMPLOYEE_NAME' => 'Ansattnavn',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Status',
  'LBL_LIST_FORM_TITLE' => 'Ansatte',
  'LBL_LIST_LAST_NAME' => 'Etternavn',
  'LBL_LIST_NAME' => 'Navn',
  'LBL_LIST_PRIMARY_PHONE' => 'Hovedtelefon',
  'LBL_LIST_REPORTS_TO_NAME' => 'Rapporterer til',
  'LBL_LIST_USER_NAME' => 'Brukernavn',
  'LBL_LOGIN' => 'Innlogging',
  'LBL_MESSENGER_ID' => 'Inst. Msg-navn:',
  'LBL_MESSENGER_TYPE' => 'Inst. Msg-type:',
  'LBL_MOBILE_PHONE' => 'Mobil:',
  'LBL_MODIFIED_BY' => 'Endret av',
  'LBL_MODIFIED_BY_ID' => 'Endret av ID',
  'LBL_MODULE_NAME' => 'Ansatte',
  'LBL_MODULE_NAME_SINGULAR' => 'Medarbeider',
  'LBL_MODULE_TITLE' => 'Ansatte: Hovedside',
  'LBL_MY_TEAMS' => 'Mine Teams',
  'LBL_NAME' => 'Navn:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Ny ansatt',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Ny ansatt [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Ny ansatt',
  'LBL_NOTES' => 'Notater:',
  'LBL_OFFICE_PHONE' => 'Tlf, kontor',
  'LBL_ONLY_ACTIVE' => 'Aktive Ansatte',
  'LBL_OTHER' => 'Annen:',
  'LBL_OTHER_EMAIL' => 'Alt. e-post:',
  'LBL_OTHER_PHONE' => 'Alternativ:',
  'LBL_PASSWORD' => 'Passord:',
  'LBL_PHOTO' => 'Foto',
  'LBL_PICTURE_FILE' => 'Bilde',
  'LBL_PORTAL_ONLY' => 'Bare portalbruker?',
  'LBL_PORTAL_ONLY_USER' => 'Portal API-Bruker',
  'LBL_POSTAL_CODE' => 'Postnummer:',
  'LBL_PRIMARY_ADDRESS' => 'Hovedadresse:',
  'LBL_PSW_MODIFIED' => 'Passord Sist Endret',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Gi beskjed ved tildeling?',
  'LBL_REPORTS_TO' => 'Rapporterer til:',
  'LBL_REPORTS_TO_NAME' => 'Rapporterer til',
  'LBL_RESET_PREFERENCES' => 'Tilbakestill til startverdier',
  'LBL_SAVED_SEARCH' => 'Layout alternativer',
  'LBL_SEARCH_FORM_TITLE' => 'Ansattsøk',
  'LBL_SELECT' => 'Velg',
  'LBL_SHOW_ON_EMPLOYEES' => 'Vis Ansatt-profil',
  'LBL_STATE' => 'Poststed:',
  'LBL_STATUS' => 'Status',
  'LBL_SUGAR_LOGIN' => 'Er Sugar-bruker?',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenerert Passord',
  'LBL_THEME' => 'Tema:',
  'LBL_TIMEZONE' => 'Klokkeslett:',
  'LBL_TIME_FORMAT' => 'Tidsformat',
  'LBL_TITLE' => 'Tittel:',
  'LBL_USER_HASH' => 'Passord',
  'LBL_USER_NAME' => 'Brukernavn:',
  'LBL_USER_TYPE' => 'Brukertype',
  'LBL_WORK_PHONE' => 'Telefon arbeid:',
  'LNK_EDIT_TABS' => 'Endre Tabs',
  'LNK_EMPLOYEE_LIST' => 'Ansatte',
  'LNK_NEW_EMPLOYEE' => 'Opprett ansatt',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Are you sure you want to remove this employee$#39;s membership?',
);

