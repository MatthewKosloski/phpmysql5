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
		# Script 2.4 - handle_form.php #2

		if(!empty($_REQUEST['name'])) {
			$name = $_REQUEST['name'];
		} else {
			$name = null;
			echo '<p class="error">You forgot to enter in your name!</p>';
		}

		if(!empty($_REQUEST['email'])) {
			$email = $_REQUEST['email'];
		} else {
			$email = null;
			echo '<p class="error">You forgot to enter in your email!</p>';
		}

		if(!empty($_REQUEST['comments'])) {
			$comments = $_REQUEST['comments'];
		} else {
			$comments = null;
			echo '<p class="error">You forgot to enter in your comments!</p>';
		}

		if(isset($_REQUEST['gender'])) {
			$gender = $_REQUEST['gender'];

			if($gender == 'M') {
				$greeting = '<p><strong>Good day, Sir!</strong></p>';
			} elseif($gender == 'F') {
				$greeting = '<p><strong>Good day, Madam!</strong></p>';
			} else {
				$gender = null;
				echo '<p class="error">Gender should be either "M" or "F"!</p>';
			}

		} else {
			$gender = null;
			echo '<p class="error">You forgot to select a gender!</p>';
		}

		if($name && $email && $gender && $comments) {
			echo "Thank you, <strong>$name</strong> for the
				following comments:\n<p>$comments</p>\n<p>We will
				reply to you at <em>$email</em>.</p>\n";

			echo $greeting;
		} else {
			echo '<p class="error">Please go back and fill out the form again.</p>';
		}

	?>

	</body>
</html>