<?php
	
	require 'configuration/autoload.php';

	// $id = strtolower(str_replace(' ', '', $_POST['dba']));

	$result = Braintree_MerchantAccount::create([
	  'individual' => [
	    'firstName' => $_POST['first_name'],
	    'lastName' => $_POST['last_name'],
	    'email' => $_POST['email'],
	    'dateOfBirth' => $_POST['dob'],
	    'address' => [
	      'streetAddress' => $_POST['street_address'],
	      'locality' => $_POST['locality'],
	      'region' => $_POST['region'],
	      'postalCode' => $_POST['postal_code'],
	    ]
	  ],
	  'business' => [
	    'dbaName' => $_POST['dba'],
	  ],
	  'funding' => [
	    'destination' => $_POST['funding_destination'],
	    'accountNumber' => $_POST['account_number_for_bank'],
	    'routingNumber' => $_POST['routing_number_for_bank'],
	    'email' => $_POST['email_for_venmo'],
	    'mobilePhone' => $_POST['mobile_phone_for_venmo'],
	  ],
	  'tosAccepted' => $_POST['tos'],
	  'masterMerchantAccountId' => $myMasterMerchantAccountId,
	  'id' => $_POST['submerchant_account_id'],
	]);

	if ($result->success)
		echo("Success! Submerchant successfully boarded: <code>" . $result->merchantAccount->id . "</code> <br />"
			. "If we were a real merchant, we'd store the ID in a database somewhere." . "<br />" 
			. "Because we're not, let's add them to the payment page by hand."
			. "<br />" . "Once we've done that, it'll be time to make a payment.
			<a href='../integration_training/marketplace_payment_page.php'>To get to the Marketplace payment page, click here</a>."
		);
	else
		echo("Failure. " . $result->message . "<br /><a href='../integration_training/marketplace_onboarding.php'>Try again.</a>");

?>