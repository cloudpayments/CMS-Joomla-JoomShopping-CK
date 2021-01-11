<?php
/*
 * @version      1.0.0
 * @author       DM
 * @package      Jshopping
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */
//защита от прямого доступа
defined('_JEXEC') or die();

  define("_JSHOP_ENABLED", "Enable");
  define("SALE_HPS_CLOUDPAYMENT", "CloudPayments");
  define("_JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID", "Public ID");
  define("_JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID_DESC", "Access Key (from CloudPayments personal account)");
  define("SALE_HPS_CLOUDPAYMENT_SHOP_KEY", "Password for API");
  define("SALE_HPS_CLOUDPAYMENT_SHOP_KEY_DESC", "Access password (from CloudPayments personal account)");
  define("SALE_HPS_CLOUDPAYMENT_CHECKONLINE", "Use online cash desk functionality");
  define("SALE_HPS_CLOUDPAYMENT_CHECKONLINE_DESC", "This functionality must be enabled on the side of CloudPayments");
  define("SALE_HPS_CLOUDPAYMENT_PAYMENT_TYPE", "Type of payment system");
  define("SALE_HPS_CLOUDPAYMENT_CURRENCY", "Order Currency");

  define("SALE_HPS_CLOUDPAYMENT_INN", "TIN of the organization");
  define("SALE_HPS_CLOUDPAYMENT_INN_DESC", "TIN of your organization or SP, on which the cash register is registered");

  define("SALE_HPS_CLOUDPAYMENT_TYPE_NALOG", "Type of tax system");
  define("SALE_HPS_CLOUDPAYMENT_TYPE_NALOG_DESC", "This tax system must match one of the options registered in the CCP.");

  define("SALE_HPS_NALOG_TYPE_0", "General taxation system");
  define("SALE_HPS_NALOG_TYPE_1", "Simplified Tax System (Income)");
  define("SALE_HPS_NALOG_TYPE_2", "Simplified tax system (Income minus Expense)");
  define("SALE_HPS_NALOG_TYPE_3", "Single tax on imputed income");
  define("SALE_HPS_NALOG_TYPE_4", "Uniform agricultural tax");
  define("SALE_HPS_NALOG_TYPE_5", "Patent taxation system");

  define("SALE_HPS_CLOUDPAYMENT_TYPE_SYSTEM", "Type of payment scheme");
  define("SALE_HPS_TYPE_SCHEME_0", "One-Step Payment");
  define("SALE_HPS_TYPE_SCHEME_1", "Two-Step Payment");

  define("SALE_HPS_CLOUDPAYMENT_SUCCESS_URL", "Success URL");
  define("SALE_HPS_CLOUDPAYMENT_SUCCESS_URL_DESC", "");
  define("SALE_HPS_CLOUDPAYMENT_FAIL_URL", "Fail URL");
  define("SALE_HPS_CLOUDPAYMENT_FAIL_URL_DESC", "");
  define("SALE_HPS_CLOUDPAYMENT_WIDGET_LANG", "Widget language");
  define("SALE_HPS_CLOUDPAYMENT_MODULE_LANG", "Module Language");
  define("SALE_HPS_CLOUDPAYMENT_WIDGET_LANG_DESC", "");

  define("SALE_HPS_WIDGET_LANG_TYPE_0", "Russian MSK");
  define("SALE_HPS_WIDGET_LANG_TYPE_1", "English CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_2", "Latvian CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_3", "Azerbaijani AZT");
  define("SALE_HPS_WIDGET_LANG_TYPE_4", "Russian ALMT");
  define("SALE_HPS_WIDGET_LANG_TYPE_5", "Kazakh ALMT");
  define("SALE_HPS_WIDGET_LANG_TYPE_6", "Ukrainian EET");
  define("SALE_HPS_WIDGET_LANG_TYPE_7", "Polish CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_8", "Portuguese CET");

  define("SALE_HPS_CLOUDPAYMENT_VAT_DELIVERY", "Select VAT on delivery if necessary");
  define("SALE_HPS_CLOUDPAYMENT_VAT_DELIVERY_DESC", "");

  define("VAT", "Select VAT on delivery, if necessary");
  define("NOT_VAT", "Without VAT");

  define("DELIVERY_VAT0", "Without VAT");
  define("DELIVERY_VAT1", "VAT 0%");
  define("DELIVERY_VAT2", "VAT 10%");
  define("DELIVERY_VAT3", "VAT 12%");
  define("DELIVERY_VAT4", "VAT 20%");
  define("DELIVERY_VAT5", "settlement VAT 10/110");
  define("DELIVERY_VAT6", "settlement VAT 20/120");


  define("STATUS_GROUP", "Statuses");
  define("STATUS_PAY", "Status paid");
  define("STATUS_CHANCEL", "Payment refund status");
  define("STATUS_AUTHORIZE", "Status of confirmation of authorization of payment (two-stage payments)");
  define("STATUS_AU", "Status of authorized payment (two-step payments)");

  define("STATUS_VOID", "Status cancel authorized payment (two-stage payments)");


  define("RUB", "Russian ruble");
  define("EUR", "Euro");
  define("USD", "US dollar");
  define("GBP", "Pound Sterling");
  define("UAH", "Ukrainian hryvnia");
  define("BYR", "Belarusian ruble (not used since July 1, 2016)");
  define("BYN", "Belarusian Ruble");
  define("KZT", "Kazakh tenge");
  define("AZN", "Azerbaijani manat");
  define("CHF", "Swiss franc");
  define("CZK", "Czech Koruna");
  define("CAD", "Canadian dollar");
  define("PLN", "Polish Zloty");
  define("SEK", "Swedish Krona");
  define("TRY_", "Turkish Lira");
  define("CNY", "Chinese yuan");
  define("INR", "Indian Rupee");
  define("BRL", "Brazilian Real");
  define("ZAL", "South African Rand");
  define("UZS", "Uzbek sum");

  define("SALE_HPS_CLOUDPAYMENT_NDS", "VAT for the order");
  define("SALE_HPS_CLOUDPAYMENT_NDS_DELIVERY", "VAT for delivery");

  define("SALE_HPS_NDS_0", "Without VAT");
  define("SALE_HPS_NDS_1", "0% VAT");
  define("SALE_HPS_NDS_2", "10% VAT");
  define("SALE_HPS_NDS_3", "12% VAT");
  define("SALE_HPS_NDS_4", "20% VAT");
  define("SALE_HPS_NDS_5", "calculated VAT 10/110");
  define("SALE_HPS_NDS_6", "calculated VAT 20/120");