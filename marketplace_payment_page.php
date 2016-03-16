<html>
	<head>

		<?php
			require 'configuration/autoload.php';
			$clientToken = Braintree_ClientToken::generate();

			// Normally you'd be getting this from a database:
			// $projectLedaId = "projectleda";
			// $thePipelineId = "thepipeline";
			// $projectCastorId = "projectcastor";

		?>

		<!-- loading javascript usually happens here -->
		<script src='https://js.braintreegateway.com/v2/braintree.js'></script>
		
		<title>My Marketplace Payment Page</title>
	</head>

	<body>
		<!-- page content goes here -->
		hello marketplace world!

		<p></p>

		<form id='marketplace-checkout' method='post' action='marketplace_checkout.php'>
			
			<div id='dropin-container'></div>
			
			<p></p>
			
			Total Amount: <input name="amount" value="10">
			Service Fee: <input name="service_fee" value="1">
			<text>to: </text>
			<select name="merchant_account_id">
				<!-- <option value="your_submerchant_account_id_here">Your submerchant DBA here</option> -->
			  <option value="projectleda">Project Leda</option>
			  <option value="projectcastor">Project Castor</option>
			  <option value="thepipeline">The Pipeline</option>
			  <option value="proletheans">Proletheans</option>

			</select>
			
			<p></p>
			
			<input type='submit' value='Pay'>
		
		</form>

		<script>
			braintree.setup('<?php echo $clientToken;?>', 'dropin', {
				container: 'dropin-container'
			});
		</script>

	</body>

</html>