<?php

  //$text = JHtml::_('content.onAfterChangeOrderStatus', $text);
  //print_r($text);die();
  /**
   * @version      4.13.0 05.11.2013
   * @author       MAXXmarketing GmbH
   * @package      Jshopping
   * @copyright    Copyright (C) 2010 webdesigner-profi.de. All rights reserved.
   * @license      GNU/GPL
   */
  defined('_JEXEC') or die();

  class pm_cloudpayments_kassa extends PaymentRoot
  {

    function showEndForm($params, $order)
    {

    }

    function showPaymentForm($params, $pmconfigs)
    {
     // include(dirname(__FILE__) . "/paymentform.php");
    }

    function loadLanguageFile()
    {
      $lang = JFactory::getLanguage();
      $lang_tag = $lang->getTag();
      $lang_dir = JPATH_ROOT . '/components/com_jshopping/payments/pm_cloudpayments_cp/lang/';
      $lang_file = $lang_dir . $lang_tag . '.php';
      if (file_exists($lang_file))
        require_once $lang_file;
      else
        require_once $lang_dir . 'en-GB.php';
    }///ok

    //function call in admin
    function showAdminFormParams($params)
    {
      $array_params = array('testmode', 'email_received', 'transaction_end_status', 'transaction_pending_status', 'transaction_failed_status');
      foreach ($array_params as $key) {
        if (!isset($params[$key]))
          $params[$key] = '';
      }
      if (!isset($params['use_ssl']))
        $params['use_ssl'] = 0;
      if (!isset($params['address_override']))
        $params['address_override'] = 0;

      $ssl_options = array();
      $ssl_options[] = JHTML::_('select.option', 4, 'TLSv1_0', 'id', 'name');
      $ssl_options[] = JHTML::_('select.option', 5, 'TLSv1_1', 'id', 'name');
      $ssl_options[] = JHTML::_('select.option', 6, 'TLSv1_2', 'id', 'name');


      //$lang_list[] = JHTML::_("select.genericlist", $params, $value, $text, $attribs);

      $orders = JSFactory::getModel('orders', 'JshoppingModel'); //admin model
      self::loadLanguageFile();
      include(dirname(__FILE__) . "/adminparamsform.php");
    }///ok

    function getUrlParams($pmconfigs)
    {

    }

    function checkTransaction($pmconfigs, $order, $act)
    {
    }


  }