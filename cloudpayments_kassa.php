<?php

  // Запрет прямого доступа.
  defined('_JEXEC') or die;

  class plgJshoppingAdminCloudpayments_Kassa extends JPlugin
  {
    public function onBeforeChangeOrderStatusAdmin($order_id, $status, $status_id, $notify, $comments, $include_comment, $view_order)
    {
      self::addError("onBeforeChangeOrderStatusAdmin");
      self::check_order($order_id, $status);
    }

    public function onBeforeChangeOrderStatus($order_id, $status, $sendmessage, $comments)
    {
      self::addError("onBeforeChangeOrderStatus");
      self::check_order($order_id, $status);
    }


    function check_order($order_id, $status)
    {
      $params = self::getPaymentParams_();
      if ($params['enabled_'] == 1):
        $this->addError('update_order_statuskassa');
        $request['InvoiceId'] = $order_id;
        $order = self::get_order($order_id);
        $this->addError($status);
        if ($status == 6): //PAY
          self::addError("Send kkt Income!");
          $this->addError('request');
          $this->addError($request);
          self::SendReceipt($order, 'Income', $params);

        elseif ($status == 3):
          self::addError("Send kkt IncomeReturn!");
          self::SendReceipt($order, 'IncomeReturn', $params);

        elseif ($status == 4):
          self::addError("Send kkt IncomeReturn!");
          self::SendReceipt($order, 'IncomeReturn', $params);
        endif;
      endif;
    }

    public function SendReceipt($order, $type, $params)   ///
    {
      self::addError('SendReceipt!!');
/*      echo '<pre>';
      print_r($order);
      echo '</pre>';
      die();*/
      $OrderItems = self::getOrderItems($order['order_id']);
      if ($OrderItems && count($OrderItems) > 0):

        foreach ($OrderItems as $item):
          $items[] = array(
            'label' => $item['product_name'],
            'price' => number_format($item['product_item_price'], 2, ".", ''),
            'quantity' => $item['product_quantity'],
            'amount' => number_format(floatval($item['product_item_price'] * $item['product_quantity']), 2, ".", ''),
            'vat' => $params['nds_product'],
          );
        endforeach;

        if ($order['order_shipping'] && $order['order_shipping'] > 0):
          $items[] = array(
            'label' => "Доставка",
            'price' => number_format($order['order_shipping'], 2, ".", ''),
            'quantity' => 1,
            'amount' => number_format($order['order_shipping'], 2, ".", ''),
            'vat' => $params['nds_delivery'],
          );
        endif;

        if ($order['order_payment'] && $order['order_payment'] > 0):
          $items[] = array(
            'label' => "Стоимость способа оплаты",
            'price' => number_format($order['order_payment'], 2, ".", ''),
            'quantity' => 1,
            'amount' => number_format($order['order_payment'], 2, ".", ''),
            'vat' => $params['nds_product'],
          );
        endif;

        if ($order['order_package'] && $order['order_package'] > 0):
          $items[] = array(
            'label' => "Стоимость упаковки",
            'price' => number_format($order['order_package'], 2, ".", ''),
            'quantity' => 1,
            'amount' => number_format($order['order_package'], 2, ".", ''),
            'vat' => $params['nds_product'],
          );
        endif;

        $data['cloudPayments']['customerReceipt']['Items'] = $items;
        $data['cloudPayments']['customerReceipt']['taxationSystem'] = $params['TYPE_NALOG'];
        $data['cloudPayments']['customerReceipt']['email'] = $order['email'];
        $data['cloudPayments']['customerReceipt']['phone'] = $order['phone'];
      endif;

      $aData = array(
        'Inn' => $params['INN'],
        'InvoiceId' => $order['order_id'], //номер заказа, необязательный
        'Type' => $type,
        'CustomerReceipt' => $data['cloudPayments']['customerReceipt']
      );
      $API_URL = 'https://api.cloudpayments.ru/kkt/receipt';
      self::send_request($API_URL, $aData);
      self::addError("kkt/receipt");
    }

    public function send_request($API_URL, $request)  ///
    {
      $params = self::getPaymentParams_();
      if ($curl = curl_init()):
        self::addError("send_request111");
        self::addError($request);
        $request2 = self::cur_json_encode($request);

        $str = date("d-m-Y H:i:s") . $request['Type'] . $request['InvoiceId'] . $request['AccountId'] . $request['CustomerReceipt']['email'];
        $reque = md5($str);
        $ch = curl_init($API_URL);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, $params['publicId'] . ":" . $params['secret_api']);
        curl_setopt($ch, CURLOPT_URL, $API_URL);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json", "X-Request-ID:" . $reque));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $request2);
        $content = curl_exec($ch);
        self::addError($content);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlError = curl_error($ch);
        curl_close($ch);
      endif;
    }


    public function addError($str)
    {
      $file = $_SERVER['DOCUMENT_ROOT'] . '/log_cloud_kassa.txt';
      $current = file_get_contents($file);
      $current .= print_r($str, 1) . "\n";
      file_put_contents($file, $current);
    }

    public function Object_to_array($data)      ///OK
    {
      if (is_array($data) || is_object($data)) {
        $result = array();
        foreach ($data as $key => $value) {
          $result[$key] = self::Object_to_array($value);
        }
        return $result;
      }
      return $data;
    }

    function get_order($order_id)
    {
      if (!$order_id)
        return false;

      $db =& JFactory::getDBO();
      $q = "SELECT * FROM `#__jshopping_orders` where `order_id`=" . $order_id;
      $db->setQuery($q);
      $data_rows_assoc_list = $db->loadAssocList();

      return $data_rows_assoc_list[0];
    }//ok

    function getOrderItems($ORDER_ID)
    {
      if (!$ORDER_ID)
        return false;

      $db =& JFactory::getDBO();
      $q = "SELECT * FROM `#__jshopping_order_item` where `order_id`=" . $ORDER_ID;
      $db->setQuery($q);
      $data_rows_assoc_list = $db->loadAssocList();

      return $data_rows_assoc_list;
    }

    function getPaymentParams_()
    {
      $db =& JFactory::getDBO();
      $q = "SELECT * FROM `#__jshopping_payment_method` where `payment_code`='cloudkassir'";
      $db->setQuery($q);
      $data_rows_assoc_list = $db->loadAssocList();
      $params_tmp = str_replace(array("\r\n", "\r", "\n"), '+---+', $data_rows_assoc_list[0]['payment_params']);
      $params_ = explode("+---+", $params_tmp);
      foreach ($params_ as $value):
        $tmp_1 = explode("=", $value);
        $pm_params[$tmp_1[0]] = $tmp_1[1];
      endforeach;
      return $pm_params;
    }

    function cur_json_encode($a = false)      /////ok
    {
      if (is_null($a) || is_resource($a)) {
        return 'null';
      }
      if ($a === false) {
        return 'false';
      }
      if ($a === true) {
        return 'true';
      }

      if (is_scalar($a)) {
        if (is_float($a)) {
          //Always use "." for floats.
          $a = str_replace(',', '.', strval($a));
        }

        // All scalars are converted to strings to avoid indeterminism.
        // PHP's "1" and 1 are equal for all PHP operators, but
        // JS's "1" and 1 are not. So if we pass "1" or 1 from the PHP backend,
        // we should get the same result in the JS frontend (string).
        // Character replacements for JSON.
        static $jsonReplaces = array(
          array("\\", "/", "\n", "\t", "\r", "\b", "\f", '"'),
          array('\\\\', '\\/', '\\n', '\\t', '\\r', '\\b', '\\f', '\"')
        );

        return '"' . str_replace($jsonReplaces[0], $jsonReplaces[1], $a) . '"';
      }

      $isList = true;

      for ($i = 0, reset($a); $i < count($a); $i++, next($a)) {
        if (key($a) !== $i) {
          $isList = false;
          break;
        }
      }

      $result = array();

      if ($isList) {
        foreach ($a as $v) {
          $result[] = self::cur_json_encode($v);
        }

        return '[ ' . join(', ', $result) . ' ]';
      } else {
        foreach ($a as $k => $v) {
          $result[] = self::cur_json_encode($k) . ': ' . self::cur_json_encode($v);
        }

        return '{ ' . join(', ', $result) . ' }';
      }
    }

  }