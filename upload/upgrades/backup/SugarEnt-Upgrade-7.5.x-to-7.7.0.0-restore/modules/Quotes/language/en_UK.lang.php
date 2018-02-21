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
  'ERR_DELETE_RECORD' => 'A record number must be specified to delete the quote.',
  'LBL_ACCOUNT_ID' => 'Account Id',
  'LBL_ACCOUNT_NAME' => 'Account Name:',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
  'LBL_ADDRESS_INFORMATION' => 'Address Information',
  'LBL_ADD_COMMENT' => 'Add Comment',
  'LBL_ADD_GROUP' => 'Add Group',
  'LBL_ADD_ROW' => 'Add Row',
  'LBL_AMOUNT' => 'Quote Amount:',
  'LBL_AMOUNT_USDOLLAR' => 'Amount:',
  'LBL_ANY_ADDRESS' => 'Any Address:',
  'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
  'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
  'LBL_ATTACHMENT' => 'Attachment',
  'LBL_BILLING_ACCOUNT' => 'Account:',
  'LBL_BILLING_ACCOUNT_NAME' => 'Billing Account Name:',
  'LBL_BILLING_ADDRESS' => 'Billing Address:',
  'LBL_BILLING_ADDRESS_CITY' => 'Billing Town/City',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country',
  'LBL_BILLING_ADDRESS_POSTAL_CODE' => 'Billing Postal Code',
  'LBL_BILLING_ADDRESS_STATE' => 'Billing County',
  'LBL_BILLING_ADDRESS_STREET' => 'Billing Address',
  'LBL_BILLING_CONTACT' => 'Contact:',
  'LBL_BILLING_CONTACT_ID' => 'Billing Contact Id:',
  'LBL_BILLING_CONTACT_NAME' => 'Billing Contact Name:',
  'LBL_BILL_TO' => 'Bill to',
  'LBL_BUNDLE_DISCOUNT' => 'Discount:',
  'LBL_BUNDLE_NAME' => 'Group Name:',
  'LBL_BUNDLE_STAGE' => 'Group Stage:',
  'LBL_CALC_GRAND' => 'Display Grand&nbsp;Total:',
  'LBL_CHECK_DATA' => 'Invalid Data Input: please check your data and make sure you have valid numbers (0-9 or &#39;.&#39;)',
  'LBL_CITY' => 'Town/City:',
  'LBL_CONTACT_NAME' => 'Contact Name:',
  'LBL_CONTACT_QUOTE_FORM_TITLE' => 'Contact-Quote:',
  'LBL_CONTACT_ROLE' => 'Contact Role:',
  'LBL_CONTRACTS' => 'Contracts',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contracts',
  'LBL_COUNTRY' => 'Country:',
  'LBL_CREATED_BY' => 'Created By',
  'LBL_CURRENCY' => 'Currency:',
  'LBL_CURRENCY_RATE' => 'Currency Rate',
  'LBL_DATE_QUOTE_CLOSED' => 'Actual Close Date:',
  'LBL_DATE_QUOTE_EXPECTED_CLOSED' => 'Valid Until:',
  'LBL_DEAL_TOT' => 'discount total',
  'LBL_DEAL_TOT_USDOLLAR' => 'discount total (Default Currency)',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Quotes',
  'LBL_DELETE_GROUP' => 'Delete Group',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
  'LBL_DISCOUNT_TOTAL' => 'Discount:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_DUPLICATE' => 'Possible Duplicate Quote',
  'LBL_EDITLAYOUT' => 'Edit Layout',
  'LBL_EMAIL_ATTACHMENT' => 'Email Attachment :',
  'LBL_EMAIL_DEFAULT_DESCRIPTION' => 'Here is the quote you requested (You can change this text)',
  'LBL_EMAIL_QUOTE_FOR' => 'Quote for:',
  'LBL_HISOTRY_SUBPANEL_TITLE' => 'History',
  'LBL_INVITEE' => 'Contacts',
  'LBL_INVOICE' => 'Invoice',
  'LBL_LEAD_SOURCE' => 'Lead Source:',
  'LBL_LINE_ITEM_INFORMATION' => 'Line Items',
  'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
  'LBL_LIST_AMOUNT' => 'Quote Amount',
  'LBL_LIST_AMOUNT_USDOLLAR' => 'Total Amount',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
  'LBL_LIST_COST_PRICE' => 'Cost',
  'LBL_LIST_DATE_QUOTE_CLOSED' => 'Actual Close',
  'LBL_LIST_DATE_QUOTE_EXPECTED_CLOSED' => 'Valid Until',
  'LBL_LIST_DEAL_TOT' => 'Total Discount',
  'LBL_LIST_DISCOUNT_PRICE' => 'Unit Price',
  'LBL_LIST_FORM_TITLE' => 'Quote List',
  'LBL_LIST_GRAND_TOTAL' => 'Grand Total',
  'LBL_LIST_LIST_PRICE' => 'List',
  'LBL_LIST_MANUFACTURER_PART_NUM' => 'Mft Num',
  'LBL_LIST_MY_QUOTES' => 'My Quotes',
  'LBL_LIST_PRICING_FACTOR' => 'Factor',
  'LBL_LIST_PRICING_FORMULA' => 'Pricing Formula',
  'LBL_LIST_PRODUCT_NAME' => '',
  'LBL_LIST_QUANTITY' => 'Quantity',
  'LBL_LIST_QUOTE_NAME' => 'Subject',
  'LBL_LIST_QUOTE_NUM' => 'Number',
  'LBL_LIST_QUOTE_STAGE' => 'Stage',
  'LBL_LIST_TAXCLASS' => 'VAT Class',
  'LBL_MODIFIED_BY' => 'Modified By',
  'LBL_MODULE_NAME' => 'Quotes',
  'LBL_MODULE_NAME_SINGULAR' => 'Quote',
  'LBL_MODULE_TITLE' => 'Quotes: Home',
  'LBL_NAME' => 'Quote Name',
  'LBL_NEW_FORM_TITLE' => 'Create Quote',
  'LBL_NEW_SUB' => 'Discounted Subtotal:',
  'LBL_NEXT_STEP' => 'Next Step:',
  'LBL_NON_TAXABLE' => 'Non-Taxable',
  'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
  'LBL_ORDER_STAGE' => 'Order Stage',
  'LBL_ORIGINAL_PO_DATE' => 'Original P.O. Date:',
  'LBL_PAYMENT_TERMS' => 'Payment Terms:',
  'LBL_PDF_BILLING_ADDRESS' => 'Bill To',
  'LBL_PDF_CURRENCY' => 'Currency:',
  'LBL_PDF_DISCOUNT' => 'Discount:',
  'LBL_PDF_GRAND_TOTAL' => 'Grand Total',
  'LBL_PDF_INVOICE_NUMBER' => 'Invoice Number',
  'LBL_PDF_INVOICE_TITLE' => 'Invoice',
  'LBL_PDF_ITEM_DISCOUNT' => 'Discount',
  'LBL_PDF_ITEM_EXT_PRICE' => 'Ext. Price',
  'LBL_PDF_ITEM_LIST_PRICE' => 'List Price',
  'LBL_PDF_ITEM_PRODUCT' => '',
  'LBL_PDF_ITEM_QUANTITY' => 'Quantity',
  'LBL_PDF_ITEM_SELECT_DISCOUNT' => ' ',
  'LBL_PDF_ITEM_UNIT_PRICE' => 'Unit Price',
  'LBL_PDF_NEW_SUB' => 'Discounted Subtotal:',
  'LBL_PDF_PART_NUMBER' => 'Part Number:',
  'LBL_PDF_QUOTE_CLOSE' => 'Valid Until:',
  'LBL_PDF_QUOTE_DATE' => 'Date:',
  'LBL_PDF_QUOTE_NUMBER' => 'Quote Number:',
  'LBL_PDF_QUOTE_TITLE' => 'Quote',
  'LBL_PDF_SALES_PERSON' => 'Sales Person:',
  'LBL_PDF_SHIPPING' => 'Shipping:',
  'LBL_PDF_SHIPPING_ADDRESS' => 'Ship To',
  'LBL_PDF_SHIPPING_COMPANY' => 'Shipping Provider:',
  'LBL_PDF_SUBTOTAL' => 'Subtotal:',
  'LBL_PDF_TAX' => 'VAT:',
  'LBL_PDF_TAX_RATE' => 'VAT Rate:',
  'LBL_PDF_TOTAL' => 'Total:',
  'LBL_POSTAL_CODE' => 'Postal Code:',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
  'LBL_PROPOSAL' => 'Quote',
  'LBL_PURCHASE_ORDER_NUM' => 'Purchase Order Num:',
  'LBL_QUOTE' => 'Quote:',
  'LBL_QUOTE_INFORMATION' => 'Quote Overview',
  'LBL_QUOTE_LAYOUT_DOES_NOT_EXIST_ERROR' => 'quote layout file does not exist: $layout',
  'LBL_QUOTE_LAYOUT_REGISTERED_ERROR' => 'quote layout is not registered in modules/Quotes/Layouts.php',
  'LBL_QUOTE_NAME' => 'Quote Subject:',
  'LBL_QUOTE_NUM' => 'Quote Number:',
  'LBL_QUOTE_STAGE' => 'Quote Stage:',
  'LBL_QUOTE_TYPE' => 'Quote Type',
  'LBL_REMOVE_COMMENT' => 'Remove Comment',
  'LBL_REMOVE_ROW' => 'Remove Row',
  'LBL_RENAME_ERROR' => 'ERROR: can&#39;t move_pdf to $destination. You should try making the directory writable by the webserver',
  'LBL_REVENUELINEITEMS' => 'Revenue Line Items',
  'LBL_SALES_STAGE' => 'Quote Stage:',
  'LBL_SEARCH_FORM_TITLE' => 'Quote Search',
  'LBL_SHIPPING' => 'Shipping:',
  'LBL_SHIPPING_ACCOUNT' => 'Account:',
  'LBL_SHIPPING_ACCOUNT_NAME' => 'Shipping Account Name:',
  'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping Town/City',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country',
  'LBL_SHIPPING_ADDRESS_POSTAL_CODE' => 'Shipping Postal Code',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping County',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Address',
  'LBL_SHIPPING_CONTACT' => 'Contact:',
  'LBL_SHIPPING_CONTACT_ID' => 'Shipping Contact Id:',
  'LBL_SHIPPING_CONTACT_NAME' => 'Shipping Contact Name:',
  'LBL_SHIPPING_PROVIDER' => 'Shipping Provider:',
  'LBL_SHIPPING_USDOLLAR' => 'Shipping (Default Currency)',
  'LBL_SHIP_TO' => 'Ship to',
  'LBL_SHOW_LINE_NUMS' => 'Display Line&nbsp;Numbers:',
  'LBL_STATE' => 'County:',
  'LBL_SUBTOTAL' => 'Subtotal:',
  'LBL_SUBTOTAL_USDOLLAR' => 'Subtotal (Default Currency)',
  'LBL_SYSTEM_ID' => 'System ID',
  'LBL_TAX' => 'VAT:',
  'LBL_TAXABLE' => 'Taxable',
  'LBL_TAXRATE' => 'VAT Rate:',
  'LBL_TAX_USDOLLAR' => 'Tax (Default Currency)',
  'LBL_TOTAL' => 'Total:',
  'LBL_TOTAL_USDOLLAR' => 'Total (Default Currency)',
  'LBL_TYPE' => 'Type:',
  'LNK_NEW_QUOTE' => 'Create Quote',
  'LNK_QUOTE_LIST' => 'View Quotes',
  'LNK_QUOTE_REPORTS' => 'View Quote Reports',
  'MSG_DUPLICATE' => 'You are creating a duplicate quote. You can either select an quote from the list below or you can click on Save to duplicate the quote.',
  'NTC_COPY_BILLING_ADDRESS' => 'Copy billing address to shipping address',
  'NTC_COPY_BILLING_ADDRESS2' => 'Copy to shipping',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copy shipping address to billing address',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Copy to billing',
  'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'This record currently contains values in the Address fields. To overwrite these values with the following Address of the Account that you selected, click "OK". To keep the current values, click "Cancel".',
  'NTC_REMOVE_COMMENT_CONFIRMATION' => 'Are you sure you want to remove this comment from the quote?',
  'NTC_REMOVE_GROUP_CONFIRMATION' => 'Are you sure you want to remove this group from the quote?',
  'NTC_REMOVE_PRODUCT_CONFIRMATION' => 'Are you sure you want to remove this line item from the quote?',
  'NTC_REMOVE_QUOTE_CONFIRMATION' => 'Are you sure you want to remove this contact from the quote?',
  'QUOTE_REMOVE_PROJECT_CONFIRM' => 'Are you sure you want to remove this quote from the project?',
);

