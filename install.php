<?php 
    function my_copy_all($from, $to, $rewrite = true) {
        if (is_dir($from)) {
          @mkdir($to);
          $d = dir($from);
          while (false !== ($entry = $d->read())) {
            if ($entry == "." || $entry == "..") continue;
              my_copy_all("$from/$entry", "$to/$entry", $rewrite);
            }
            $d->close();
        }
          else {
            if (!file_exists($to) || $rewrite)
            copy($from, $to);
          }
    }


$old_dir = $_SERVER['DOCUMENT_ROOT'].'/plugins/jshoppingadmin/cloudpayments_kassa/install/pm_cloudpayments_kassa/';
$new_dir =$_SERVER['DOCUMENT_ROOT'].'/components/com_jshopping/payments/pm_cloudpayments_kassa/';
my_copy_all($old_dir,$new_dir, false); 
  
  
?> 