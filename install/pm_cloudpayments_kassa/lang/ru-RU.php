<?php
  /*
   * @version      1.0.0
   * @author       DM
   * @package      Jshopping
   * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
   */
  //защита от прямого доступа
  defined('_JEXEC') or die();


  define("_JSHOP_ENABLED_", "Включен");
  define("SALE_HPS_CLOUDPAYMENT", "CloudPayments");
  define("_JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID", "Public ID");
  define("_JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID_DESC", "Ключ доступа (из личного кабинета CloudPayments)");
  define("SALE_HPS_CLOUDPAYMENT_SHOP_KEY", "Пароль для API");
  define("SALE_HPS_CLOUDPAYMENT_SHOP_KEY_DESC", "Пароль доступа (из личного кабинета CloudPayments)");
  define("SALE_HPS_CLOUDPAYMENT_CHECKONLINE", "Использовать функционал онлайн касс");
  define("SALE_HPS_CLOUDPAYMENT_CHECKONLINE_DESC", "Данный функционал должен быть включен на стороне CloudPayments");
  define("SALE_HPS_CLOUDPAYMENT_PAYMENT_TYPE", "Тип платёжной системы");
  define("SALE_HPS_CLOUDPAYMENT_CURRENCY", "Валюта заказа");

  define("SALE_HPS_CLOUDPAYMENT_INN", "ИНН организации");
  define("SALE_HPS_CLOUDPAYMENT_INN_DESC", "ИНН вашей организации или ИП, на который зарегистрирована касса");

  define("SALE_HPS_CLOUDPAYMENT_TYPE_NALOG", "Система налогообложения");
  define("SALE_HPS_CLOUDPAYMENT_TYPE_NALOG_DESC", "Указанная система налогообложения должна совпадать с одним из вариантов, зарегистрированных в ККТ.");

  define("SALE_HPS_NALOG_TYPE_0", "Общая система налогообложения");
  define("SALE_HPS_NALOG_TYPE_1", "Упрощенная система налогообложения (Доход)");
  define("SALE_HPS_NALOG_TYPE_2", "Упрощенная система налогообложения (Доход минус Расход)");
  define("SALE_HPS_NALOG_TYPE_3", "Единый налог на вмененный доход");
  define("SALE_HPS_NALOG_TYPE_4", "Единый сельскохозяйственный налог");
  define("SALE_HPS_NALOG_TYPE_5", "Патентная система налогообложения");

  define("SALE_HPS_CLOUDPAYMENT_TYPE_SYSTEM", "Тип схемы проведения платежей");
  define("SALE_HPS_TYPE_SCHEME_0", "Одностадийная оплата");
  define("SALE_HPS_TYPE_SCHEME_1", "Двухстадийная оплата");

  define("SALE_HPS_CLOUDPAYMENT_SUCCESS_URL", "Success URL");
  define("SALE_HPS_CLOUDPAYMENT_SUCCESS_URL_DESC", "");
  define("SALE_HPS_CLOUDPAYMENT_FAIL_URL", "Fail URL");
  define("SALE_HPS_CLOUDPAYMENT_FAIL_URL_DESC", "");
  define("SALE_HPS_CLOUDPAYMENT_WIDGET_LANG", "Язык виджета");
  define("SALE_HPS_CLOUDPAYMENT_MODULE_LANG", "Язык модуля");
  define("SALE_HPS_CLOUDPAYMENT_WIDGET_LANG_DESC", "");

  define("SALE_HPS_WIDGET_LANG_TYPE_0", "Русский MSK");
  define("SALE_HPS_WIDGET_LANG_TYPE_1", "Английский CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_2", "Латышский CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_3", "Азербайджанский AZT");
  define("SALE_HPS_WIDGET_LANG_TYPE_4", "Русский ALMT");
  define("SALE_HPS_WIDGET_LANG_TYPE_5", "Казахский ALMT");
  define("SALE_HPS_WIDGET_LANG_TYPE_6", "Украинский EET");
  define("SALE_HPS_WIDGET_LANG_TYPE_7", "Польский CET");
  define("SALE_HPS_WIDGET_LANG_TYPE_8", "Португальский CET");

  define("SALE_HPS_CLOUDPAYMENT_VAT_DELIVERY", "Выберите НДС на доставку, если необходимо");
  define("SALE_HPS_CLOUDPAYMENT_VAT_DELIVERY_DESC", "");

  define("VAT", "Выберите НДС на доставку, если необходимо");
  define("NOT_VAT", "Без НДС");

  define("DELIVERY_VAT0", "Без НДС");
  define("DELIVERY_VAT1", "НДС 0%");
  define("DELIVERY_VAT2", "НДС 10%");
  define("DELIVERY_VAT3", "НДС 12%");
  define("DELIVERY_VAT4", "НДС 20%");
  define("DELIVERY_VAT5", "расчетный НДС 10/110");
  define("DELIVERY_VAT6", "расчетный НДС 20/120");


  define("STATUS_GROUP", "Статусы");
  define("STATUS_PAY", "Статус оплаченного заказа");
  define("STATUS_CHANCEL", "Статус возврата платежа");
  define("STATUS_AUTHORIZE", "Статус подтверждения авторизации платежа (двухстадийные платежи)");
  define("STATUS_AU", "Статус авторизованного платежа (двухстадийные платежи)");

  define("STATUS_VOID", "Статус отмена авторизованного платежа (двухстадийные платежи)");


  define("RUB", "Российский рубль");
  define("EUR", "Евро");
  define("USD", "Доллар США");
  define("GBP", "Фунт стерлингов");
  define("UAH", "Украинская гривна");
  define("BYR", "Белорусский рубль (не используется с 1 июля 2016)");
  define("BYN", "Белорусский рубль");
  define("KZT", "Казахский тенге");
  define("AZN", "Азербайджанский манат");
  define("CHF", "Швейцарский франк");
  define("CZK", "Чешская крона");
  define("CAD", "Канадский доллар");
  define("PLN", "Польский злотый");
  define("SEK", "Шведская крона");
  define("TRY_", "Турецкая лира");
  define("CNY", "Китайский юань");
  define("INR", "Индийская рупия");
  define("BRL", "Бразильский реал");
  define("ZAL", "Южноафриканский рэнд");
  define("UZS", "Узбекский сум");

  define("SALE_HPS_CLOUDPAYMENT_NDS", "НДС для заказа");
  define("SALE_HPS_CLOUDPAYMENT_NDS_DESC", "НДС для заказа");

  define("SALE_HPS_NDS_0", "Без НДС");
  define("SALE_HPS_NDS_1", "НДС 0%");
  define("SALE_HPS_NDS_2", "НДС 10%");
  define("SALE_HPS_NDS_3", "НДС 12%");
  define("SALE_HPS_NDS_4", "НДС 20%");
  define("SALE_HPS_NDS_5", "расчетный НДС 10/110");
  define("SALE_HPS_NDS_6", "расчетный НДС 20/120");