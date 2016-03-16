<?php

echo "<script>console.log('autoloader auto-loaded.');</script>";

ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(1);

// If you update your Braintree PHP library, remember to change the version number here!
// require 'braintree-php-3.8.0/lib/Braintree.php';
require 'braintree_php-master/lib/Braintree.php';

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('ryqy4yyw7m5bf92h');
Braintree_Configuration::publicKey('ymtqgy8773zq2fw3');
Braintree_Configuration::privateKey('7dd7253c4c53d675f15e869212659579');

$myMasterMerchantAccountId = "q6p2fn8ssnfjfz2p";

?>