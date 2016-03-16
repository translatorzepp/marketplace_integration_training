<html>
	<head>
		<title>My Marketplace Onboarding Page</title>
	</head>

	<body>
		<!-- page content goes here -->
		hello marketplace world!

		<p></p>

		<form id='onboarding' method='post' action='marketplace_onboarding_result.php'>

			<h3>ID for the new submerchant</h3>
			<input name="submerchant_account_id" placeholder="merchant_account_id" value="proletheans">
		
			<h3>Individual</h3>
			<div name="individual">
				<input name="first_name" placeholder="First Name" value="Henrik">
				<input name="last_name" placeholder="Last Name" value="Johanssen">
				<p></p>
				<input name="email" placeholder="Email Address" value="fake@email.com">
				<input name="dob" placeholder="Date of Birth" value="1966-06-30">
				<p></p>
				<div name="address" label="Address">
					<input name="street_address" placeholder="Street Address" value="1 Prolethean Compound">
					<input name="locality" placeholder="City" value="Middle of Nowhere">
					<input name="region" placeholder="State" value="WA">
					<input name="postal_code" placeholder="Postal Code" value="12345">
				</div>
			</div>
			
			<p></p>
			
			<h3>Business</h3>
			<div name="business" label="Business">
				 <input name="dba" placeholder="DBA Name" value="Proletheans">
			</div>

			<p></p>

			<h3>Funding</h3>
			<div name="funding">
				<select name="funding_destination">
					<option value="bank">Bank Account</option>
					<option value="email">Venmo Account: Email</option>
					<option value="phone">Venmo Account: Mobile Phone</option>
				</select><br />
				<input name="account_number_for_bank" placeholder="Bank Account Number" value="1123581321">
				<input name="routing_number_for_bank" placeholder="Bank Routing Number" value="071101307"><br />
				<input name="email_for_venmo" placeholder="Email Address" value="fake@email.com">
				<input name="mobile_phone_for_venmo" placeholder="Mobile Phone Number" value="5551231234">
			</div>

			<p></p>

			<input type="checkbox" name="tos" value="true" checked="checked">I accept the Terms of Service</input>
			<p><input type='submit' value='Sign Up'></p>
		
		</form>

	</body>

</html>