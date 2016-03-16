<?php

	require 'configuration/autoload.php';

	$result = Braintree_Transaction::sale(array(
		'amount' => $_POST['amount'],
		'paymentMethodNonce' => $_POST['payment_method_nonce'],
		'merchantAccountId' => $_POST['merchant_account_id'],
		'serviceFeeAmount' => $_POST['service_fee'],
		'options' => [
      		'submitForSettlement' => true,
      		'holdInEscrow' => true,
    	],
	));

	if ($result->success)
		echo("Success! Transaction ID: " . $result->transaction->id 
		 . "<br />$" . $result->transaction->amount . " paid to submerchant account ID <code>" . $result->transaction->merchantAccountId
		 . "</code>, escrow status: <code>" . $result->transaction->escrowStatus . "</code><br />" 
		 . "<a href='https://sandbox.braintreegateway.com/merchants/" . Braintree_Configuration::merchantId() . "/transactions/" .$result->transaction->id  . "'target='_blank'>Link to transaction</a>"
		);
	else
		echo("Failure. " . $result->message
			. "<br /><a href='../integration_training/marketplace_payment_page.php'>Try again.</a><br />");
		// print_r($result->params);

?>