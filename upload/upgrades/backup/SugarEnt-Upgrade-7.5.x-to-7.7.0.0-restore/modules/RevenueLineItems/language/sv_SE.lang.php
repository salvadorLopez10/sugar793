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
  'ERR_DELETE_RECORD' => 'Ett postnummer måste specificeras för att kunna radera produkten.',
  'LBL_ACCOUNT_ID' => 'Account ID',
  'LBL_ACCOUNT_NAME' => 'Account namn:',
  'LBL_ASSET_NUMBER' => 'Inventarienummer:',
  'LBL_ASSIGNED_TO' => 'Tilldelat användarnamn',
  'LBL_ASSIGNED_TO_ID' => 'Tilldelad användar ID',
  'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till:',
  'LBL_ASSIGNED_USER_ID' => 'Tilldelad användar ID',
  'LBL_ASSOCIATED_QUOTE' => 'Associerad offert:',
  'LBL_BOOK_VALUE' => 'Bokfört värde:',
  'LBL_BOOK_VALUE_DATE' => 'Datum för bokfört värde:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Bokfört värde (US Dollar):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Beräknat produkt belopp',
  'LBL_CAMPAIGN_ID' => 'Kampanj ID',
  'LBL_CAMPAIGN_PRODUCT' => 'Kampanj produkt',
  'LBL_CATEGORY' => 'Produktkategori:',
  'LBL_CATEGORY_NAME' => 'Produkt kategori:',
  'LBL_COMMIT_STAGE' => 'Commit fas',
  'LBL_COMMIT_STAGE_FORECAST' => 'Prognos',
  'LBL_CONTACT' => 'Kontakt',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONTACT_ID' => 'Kontakt ID',
  'LBL_CONTACT_NAME' => 'Kontaktnamn:',
  'LBL_CONTRACTS' => 'Kontrakter',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Kontakter',
  'LBL_CONVERT_INVALID_RLI' => 'En eller flera av intäktsposter som du valt kan inte omvandlas till ett offert:',
  'LBL_CONVERT_INVALID_RLI_ALREADYQUOTED_PLURAL' => 'En eller flera av de valda intäktsposter är redan offererad.',
  'LBL_CONVERT_INVALID_RLI_PRODUCT' => 'Intäktsposten behöver en produkt från produktkatalogen innan en offert kan genereras.',
  'LBL_CONVERT_INVALID_RLI_PRODUCT_PLURAL' => 'En eller flera av intäktsposterna behöver en produkt från produktkatalogen innan en offert kan genereras.',
  'LBL_CONVERT_TO_QUOTE' => 'Generera offert',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Fel:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Ett fel uppstod vid konvertering av intäktspost til en offert',
  'LBL_CONVERT_TO_QUOTE_INFO' => 'Vänligen vänta',
  'LBL_CONVERT_TO_QUOTE_INFO_MESSAGE' => 'Generera offert från intäktspost',
  'LBL_COST_PRICE' => 'Kostnad:',
  'LBL_COST_USDOLLAR' => 'Kostnad (US Dollar)',
  'LBL_CREATED_USER' => 'Skapad användare',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_CURRENCY_ID' => 'Valuta ID:',
  'LBL_CURRENCY_NAME' => 'Valutanamn',
  'LBL_CURRENCY_RATE' => 'Valutakurs',
  'LBL_CURRENCY_SYMBOL' => 'Valuta symbol',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Valutasymbol',
  'LBL_DATE_CLOSED' => 'Förväntat slutdatum',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Förväntad slutdatum tidsstämpel',
  'LBL_DATE_PURCHASED' => 'Köpt:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Support upphör:',
  'LBL_DATE_SUPPORT_STARTS' => 'Supporten startar:',
  'LBL_DEAL_TOT' => 'Rabatt:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Intäktsposter',
  'LBL_DESCRIPTION' => 'Beskrivning',
  'LBL_DISCOUNT_AMOUNT' => 'Rabatt belopp',
  'LBL_DISCOUNT_AS_PERCENT' => 'Rabatt i %',
  'LBL_DISCOUNT_PRICE' => 'Enhetspris:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Datum för rabatterat pris:',
  'LBL_DISCOUNT_RATE' => 'Rabatt kurs',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Rabatt kurs (US dollar)',
  'LBL_DISCOUNT_TOTAL' => 'Rabatt totalt',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Rabatt (US Dollar)',
  'LBL_DISCOUNT_USDOLLAR' => 'Enhetspris (US Dollar)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenter',
  'LBL_EDITLAYOUT' => 'Redigera layout',
  'LBL_EXPERT_ID' => 'Produkt expert',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Tilldelad användar ID',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Tilldelat användarnamn',
  'LBL_EXPORT_CURRENCY_ID' => 'Valuta ID',
  'LBL_EXT_PRICE' => 'Externt pris',
  'LBL_FORECAST' => 'Inkludera i prognos',
  'LBL_HELP_CREATE' => '{{plural_module_name}}-modulen består av enskilda rader med produkter som är relaterade till en {{opportunities_singular_module}}-post och följer livscykeln för sälj. {{opportunities_singular_module}} posten agerar som förälder till en eller flera {{module_name}}-poster. För att skapa en {{module_name}}: 1. Ange de värden som önskas. - Fält markerade som obligatoriska måste fyllas i innan man sparar. - Klicka "Visa mer" för att visa ytterligare fält. 2. Klicka på "Spara" för att färdigställa den nya posten och återgå till föregående sida. - Välj "Spara och visa" för att öppna och se den nya {{module_name}} i post-vyn. - Välj "Spara och skapa ny" för att omedelbart skapa en ny post.',
  'LBL_HELP_RECORD' => '{{plural_module_name}}-modulen består av enskilda rader med produkter som är relaterade till en {{opportunities_singular_module}}-post och följer livscykeln för sälj. {{opportunities_singular_module}} posten agerar som förälder till en eller flera {{module_name}}-poster. - Redigera den här posten genom att klicka på ett fält eller på Redigera-kanppen. - Se eller modifiera länkar till andra poster i subpanelen genom att växla den nedre panelen till "Data View". - Skapa och se användarkommentarer och post-ändringar i {{activitystream_singular_module}} genom att växla i nedre vänstra panelen till "Activity Stream". - Följ eller gör posten till en favorit med hjälp av ikonerna till höger om namnet för posten. - Ytterligare val finns under rullgardinsmenyn bredvid Redigera-knappen.',
  'LBL_HELP_RECORDS' => '{{plural_module_name}}-modulen består av enskilda rader med produkter som är relaterade till en {{opportunities_singular_module}}-post och följer livscykeln för sälj. {{opportunities_singular_module}} posten agerar som förälder till en eller flera {{module_name}}-poster. Detta tillåter att mer detaljer finns med när man arbetar med {{opportunities_module}} och {{forecasts_singular_module}}ing då varje produktrad i en {{opportunities_singular_module}} kan ha sin egen Säljfas och Sannolikhet samt om den skall vara inkluderad eller exkluderad från en säljares {{forecasts_singular_module}}ing {{worksheet_module}} individuellt. Varje {{module_name}} kan vara relaterad till en produkt från din Organisations Produktkatalog. Genom att anända produktkatalogen så populeras fälten automatiskt i {{module_name}}.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_SOURCE' => 'Lead källa',
  'LBL_LIST_ACCOUNT_NAME' => 'Företagsnamn',
  'LBL_LIST_COMMIT_STAGE' => 'Commit fas',
  'LBL_LIST_CONTACT_NAME' => 'Kontaktnamn',
  'LBL_LIST_COST_PRICE' => 'Kostnad',
  'LBL_LIST_DATE_CLOSED' => 'Förväntat slutdatum',
  'LBL_LIST_DATE_PURCHASED' => 'Köpt',
  'LBL_LIST_DISCOUNT_PRICE' => 'Pris',
  'LBL_LIST_FORM_TITLE' => 'Intäktsposter lista',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Tillverkningsnummer',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_MANUFACTURER' => 'Tillverkare',
  'LBL_LIST_NAME' => 'Intäktspost',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Namn på affärsmöjligheten',
  'LBL_LIST_PRICE' => 'Listpris:',
  'LBL_LIST_PROBABILITY' => 'Sannolikhet',
  'LBL_LIST_PRODUCT_TEMPLATE' => 'Produkt mall',
  'LBL_LIST_QUANTITY' => 'Kvantitet',
  'LBL_LIST_QUOTE_NAME' => 'Offertnamn',
  'LBL_LIST_SALES_STAGE' => 'Säljnivå',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Utgår',
  'LBL_LIST_USDOLLAR' => 'Listpris (US Dollar)',
  'LBL_MANUFACTURER' => 'Tillverkare:',
  'LBL_MANUFACTURERS' => 'Tillverkare',
  'LBL_MANUFACTURER_NAME' => 'Tillverkarens namn:',
  'LBL_MEMBER_OF' => 'Medlem av:',
  'LBL_MFT_PART_NUM' => 'Tillverkarens artikelnummer:',
  'LBL_MODIFIED_USER' => 'Ändrad användare',
  'LBL_MODULE_NAME' => 'Intäktsposter',
  'LBL_MODULE_NAME_SINGULAR' => 'Intäktspost',
  'LBL_MODULE_TITLE' => 'Intäktsposter: Hem',
  'LBL_NAME' => 'Intäktspost',
  'LBL_NEW_FORM_TITLE' => 'Skapa intäktsposter',
  'LBL_NEXT_STEP' => 'Nästa steg:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Anteckningar',
  'LBL_NOT_QUOTED' => 'Inte offererad',
  'LBL_OPPORTUNITY' => 'Affärsmöjlighet',
  'LBL_OPPORTUNITY_ID' => 'Affärsmöjlighet ID',
  'LBL_PRICING_FACTOR' => 'Prisfaktor',
  'LBL_PRICING_FORMULA' => 'Prisberäkningsformel:',
  'LBL_PROBABILITY' => 'Sannolikhet (%)',
  'LBL_PRODUCT' => 'Produkt:',
  'LBL_PRODUCT_CATEGORIES' => 'Produktkategorier',
  'LBL_PRODUCT_TEMPLATE' => 'Produkt mall:',
  'LBL_PRODUCT_TEMPLATES' => 'Produkt mallar',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Produkt mall ID:',
  'LBL_PRODUCT_TYPE' => 'Produkttyp:',
  'LBL_PRODUCT_TYPES' => 'Produkttyper',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
  'LBL_QUANTITY' => 'Kvantitet:',
  'LBL_QUOTE' => 'Offert',
  'LBL_QUOTED' => 'Offererad',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Offerter',
  'LBL_QUOTE_ID' => 'Offert ID',
  'LBL_QUOTE_NAME' => 'Offertnamn:',
  'LBL_RELATED_PRODUCTS' => 'Relaterade intäktersposter',
  'LBL_RELATED_PRODUCTS_TITLE' => 'Intäkts produkter',
  'LBL_RLI_SUBPANEL_TITLE' => 'Intäktsposter',
  'LBL_SALES_STAGE' => 'Säljnivå',
  'LBL_SALES_STATUS' => 'Intäktsposter',
  'LBL_SEARCH_FORM_TITLE' => 'Sök intäktsposter',
  'LBL_SELECT_DISCOUNT' => 'Rabatt i %',
  'LBL_SERIAL_NUMBER' => 'Serienummer:',
  'LBL_STATUS' => 'Status:',
  'LBL_SUPPORT_CONTACT' => 'Support kontakt:',
  'LBL_SUPPORT_DESCRIPTION' => 'Support beskrivning:',
  'LBL_SUPPORT_NAME' => 'Supporttitel:',
  'LBL_SUPPORT_TERM' => 'Support term:',
  'LBL_TAX_CLASS' => 'Skatteklass:',
  'LBL_TOTAL_DISCOUNT_AMOUNT' => 'Total rabatt belopp',
  'LBL_TYPE' => 'Typ:',
  'LBL_URL' => 'Produkt URL:',
  'LBL_VENDOR_PART_NUM' => 'Leverantörens artikelnummer:',
  'LBL_WEBSITE' => 'Websida',
  'LBL_WEIGHT' => 'Vikt:',
  'LNK_IMPORT_REVENUELINEITEMS' => 'Importera intäktsposter',
  'LNK_NEW_REVENUELINEITEM' => 'Skapa intäktsposter',
  'LNK_REVENUELINEITEM_LIST' => 'Visa intäktsposter',
  'NTC_DELETE_CONFIRMATION' => 'Är du säker på att du vill radera posten?',
  'NTC_REMOVE_CONFIRMATION' => 'Är du säker på att du vill ta bort produktens relationer?',
  'SAVE_RLI_QUOTE_NOTICE' => 'Denna post har redan konverterats till offert. Dina ändringar kommer inte att uppdateras i motsvarande offert.',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_1' => 'En eller flera poster ingick i en',
  'WARNING_DELETED_RECORD_LIST_RECOMMIT_2' => 'De kommer att tas bort och du kommer att behöva återuppta din',
  'WARNING_DELETED_RECORD_RECOMMIT_1' => 'Denna post ingick i en',
  'WARNING_DELETED_RECORD_RECOMMIT_2' => 'Det kommer att tas bort och du kommer att behöva återuppta din',
  'WARNING_MERGE_RLIS_WITH_DIFFERENT_OPPORTUNITIES' => 'En eller flera av de poster som du har valt kan inte slås ihop, eftersom de tillhör olika affärsmöjligheter',
);

