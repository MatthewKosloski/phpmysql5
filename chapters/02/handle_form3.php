<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">
		<style>
			.error {
				font-weight: 700;
				color: red;
			}
		</style>	
	</head>
	<body>
		
	<?php 
		# Script 2.5 - handle_form.php #3

		if(!empty($_POST['name']) && 
		!empty($_POST['comments']) &&
		!empty($_POST['email'])) {
			echo "<p>Thank you, <strong>{$_POST['name']}</strong>,
			for the following comments:</p>
			<pre>{$_POST['comments']}</pre>
			<p>We will reply to you at <em>
			{$_POST['email']}</em>.</p>";
		} else {
			echo '<p class="error">Please go back and 
			fill out the form again.</p>';
		}

	?>

	</body>
</html>