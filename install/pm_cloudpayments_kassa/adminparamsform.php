<?php
  /**
   * @version      4.12.2 05.11.2013
   * @author       MAXXmarketing GmbH
   * @package      Jshopping
   * @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
   * @license      GNU/GPL
   */
  defined('_JEXEC') or die();

  $nds_list = array();
/*  $nds_list[] = JHTML::_('select.option', '1',SALE_HPS_NDS_0, 'id', 'name');
  $nds_list[] = JHTML::_('select.option', '2',SALE_HPS_NDS_1, 'id', 'name');
  $nds_list[] = JHTML::_('select.option', '3',SALE_HPS_NDS_2, 'id', 'name');
  $nds_list[] = JHTML::_('select.option', '4',SALE_HPS_NDS_3, 'id', 'name');
  $nds_list[] = JHTML::_('select.option', '5',SALE_HPS_NDS_4, 'id', 'name');
  $nds_list[] = JHTML::_('select.option', '6',SALE_HPS_NDS_5, 'id', 'name');*/
 // $nds_list[] =    JHTML::_('select.option', $value = '1', "jjj", 'value', 'text', $disable=true );
  $nds_list[] = JHTML::_('select.option', '',SALE_HPS_NDS_0, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '0',SALE_HPS_NDS_1, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '10',SALE_HPS_NDS_2, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '12',SALE_HPS_NDS_3, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '20',SALE_HPS_NDS_4, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '110',SALE_HPS_NDS_5, 'value', 'text');
  $nds_list[] = JHTML::_('select.option', '120',SALE_HPS_NDS_6, 'value', 'text');




  $lang_list = array();
  $lang_list[] = JHTML::_('select.option', 'ru-RU',SALE_HPS_WIDGET_LANG_TYPE_0, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'en-US',SALE_HPS_WIDGET_LANG_TYPE_1, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'lv',SALE_HPS_WIDGET_LANG_TYPE_2, 'id', 'name');

  $lang_list[] = JHTML::_('select.option', 'az',SALE_HPS_WIDGET_LANG_TYPE_3, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'kk',SALE_HPS_WIDGET_LANG_TYPE_4, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'kk-KZ',SALE_HPS_WIDGET_LANG_TYPE_5, 'id', 'name');

  $lang_list[] = JHTML::_('select.option', 'uk',SALE_HPS_WIDGET_LANG_TYPE_6, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'pl',SALE_HPS_WIDGET_LANG_TYPE_7, 'id', 'name');
  $lang_list[] = JHTML::_('select.option', 'pt',SALE_HPS_WIDGET_LANG_TYPE_8, 'id', 'name');

  $currency_list = array();

  $currency_list[] = JHTML::_('select.option', 'RUB',RUB, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'EUR',EUR, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'USD',USD, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'GBP',GBP, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'UAH',UAH, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'BYN',BYN, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'KZT',KZT, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'AZN',AZN, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'CHF',CHF, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'CZK',CZK, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'CAD',CAD, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'PLN',PLN, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'SEK',SEK, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'TRY',TRY_, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'CNY',CNY, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'INR',INR, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'BRL',BRL, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'ZAL',ZAL, 'id', 'name');
  $currency_list[] = JHTML::_('select.option', 'UZS',UZS, 'id', 'name');


  $nalog_type = array();
  $nalog_type[] = JHTML::_('select.option', '0','Общая система налогообложения', 'value', 'text');
  $nalog_type[] = JHTML::_('select.option', '1','Упрощенная система налогообложения (Доход)', 'value', 'text');
  $nalog_type[] = JHTML::_('select.option', '2','Упрощенная система налогообложения (Доход минус Расход)', 'value', 'text');
  $nalog_type[] = JHTML::_('select.option', '3','Единый налог на вмененный доход', 'value', 'text');
  $nalog_type[] = JHTML::_('select.option', '4','Единый сельскохозяйственный налог', 'value', 'text');
  $nalog_type[] = JHTML::_('select.option', '5','Патентная система налогообложения', 'value', 'text');
?>
<div class = "col100">
   <fieldset class = "adminform">
      <table class = "admintable" width = "100%">
         <tr>
            <td style = "width:250px;" class = "key">
              <?php echo _JSHOP_ENABLED_; ?>
            </td>
            <td>
              <?php
                print JHTML::_('select.booleanlist', 'pm_params[enabled_]', 'class = "inputbox" size = "1"', $params['enabled_']);
                echo " " . JHTML::tooltip(_JSHOP_PAYPAL_ENABLED_DESCRIPTION);
              ?>
            </td>
         </tr>
         <!--
            - PublicID
            - SecretAPI;
            отображать урлы для обработки уведомлений;
            - Настройку параметров/выбор статусов  для обработчика уведомлений ;
            - выбор НДС для товаров и НДС для доставки отдельно(опционально);
            - выбор системы налогообложения;
            - выбор локализации модуля;
            - выбор языка виджета;
            - выбор валюты (опционально);
            - чекбокс включения отправки чеков.
            - Выбор валюты(если глобальный список валют меньше, чем список поддерживаемых валют CP)
          -->
         <tr>
            <td class = "key">
              <?php echo _JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID; ?>
            </td>
            <td>
               <input type = "text" class = "inputbox" name = "pm_params[publicId]" size = "45" value = "<?php echo $params['publicId'] ?>"/>
              <?php echo JHTML::tooltip(_JSHOP_SALE_HPS_CLOUDPAYMENT_SHOP_ID_DESC); ?>
            </td>
         </tr>
         <tr>
            <td class = "key">
              <?php echo SALE_HPS_CLOUDPAYMENT_SHOP_KEY; ?>
            </td>
            <td>
               <input type = "text" class = "inputbox" name = "pm_params[secret_api]" size = "45" value = "<?php echo $params['secret_api'] ?>"/>
              <?php echo JHTML::tooltip(SALE_HPS_CLOUDPAYMENT_SHOP_KEY_DESC); ?>
            </td>
         </tr>
         <tr>
            <td class = "key">
              <?php echo SALE_HPS_CLOUDPAYMENT_INN; ?>
            </td>
            <td>
               <input type = "text" class = "inputbox" name = "pm_params[INN]" size = "45" value = "<?php echo $params['INN'] ?>"/>
              <?php echo JHTML::tooltip(SALE_HPS_CLOUDPAYMENT_INN_DESC); ?>
            </td>
         </tr>
         <tr>
            <td class = "key">
              <?php echo SALE_HPS_CLOUDPAYMENT_NDS; ?>
            </td>
            <td>
              <?php
            //    print JHTML::_('select.genericlist', $nds_list, 'pm_params[nds_product]', 'class = "inputbox" size = "1"', 'status_id', 'name', $params['nds_product']);
                  print JHTML::_('select.genericlist', $nds_list, $name = 'pm_params[nds_product]', $attribs = null, $key = 'value', $text = 'text', $params['nds_product'], $idtag = false, $translate = false);
                echo " " . JHTML::tooltip(SALE_HPS_CLOUDPAYMENT_NDS_DESC);
              ?>
            </td>
         </tr>
         <tr>
            <td class = "key">
              <?php echo SALE_HPS_CLOUDPAYMENT_NDS_DELIVERY; ?>
            </td>
            <td>
              <?php
                print JHTML::_('select.genericlist', $nds_list, $name = 'pm_params[nds_delivery]', $attribs = null, $key = 'value', $text = 'text', $params['nds_delivery'], $idtag = false, $translate = false);
                echo " " . JHTML::tooltip(SALE_HPS_CLOUDPAYMENT_VAT_DELIVERY_DESC);
              ?>
            </td>
         </tr>
         <tr>
            <td class = "key">
              <?php echo SALE_HPS_CLOUDPAYMENT_TYPE_NALOG; ?>
            </td>
            <td>
              <?php

                print JHTML::_('select.genericlist', $nalog_type, $name = 'pm_params[TYPE_NALOG]', $attribs = null, $key = 'value', $text = 'text', $params['TYPE_NALOG'], $idtag = false, $translate = false);
                echo " " . JHTML::tooltip(SALE_HPS_CLOUDPAYMENT_TYPE_NALOG_DESC);
              ?>
            </td>
         </tr>
      </table>
   </fieldset>
</div>
<div class = "clr"></div>