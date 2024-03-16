<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta charset="utf-8" />
	<title>Credit Calculator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>

<body>

	<div style="width:90%; margin: 2em auto;">
		<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">Another protected page</a>
		<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Logout</a>
	</div>

	<div style="width:90%; margin: 2em auto;">

		<form action="<?php print(_APP_ROOT); ?>/app/calc.php" method="post" class="pure-form pure-form-stacked">
			<legend>Credit Calculator</legend>
			<fieldset>
				<label for="id_amount">Loan Amount: </label>
				<input id="id_amount" type="text" name="amount" value="<?php out($amount); ?>" />
				<label for="id_years">Loan Term (years): </label>
				<input id="id_years" type="text" name="years" value="<?php out($years); ?>" />
				<label for="id_interestRate">Interest Rate (%): </label>
				<input id="id_interestRate" type="text" name="interestRate" value="<?php out($interestRate); ?>" />
			</fieldset>
			<input type="submit" value="Calculate" class="pure-button pure-button-primary" />
		</form>

		<?php
		if (isset($messages)) {
			if (count($messages) > 0) {
				echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em;">';
				foreach ($messages as $key => $msg) {
					echo '<li>' . $msg . '</li>';
				}
				echo '</ol>';
			}
		}

		if (isset($result)) {
			echo '<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #ff0; width:25em;">';
			echo 'Monthly Payment: ' . round($result, 2) . ' USD';
			echo '</div>';
		}

		// Display message based on user role
		if ($isAdmin) {
			echo '<p>You are an admin. You can select a loan amount exceeding $100,000.</p>';
		} else {
			echo '<p>You are a user. You can select a loan amount up to $100,000.</p>';
		}
		?>

	</div>

</body>

</html>