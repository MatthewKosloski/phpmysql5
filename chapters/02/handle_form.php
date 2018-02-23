<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>
		
	<?php 
		# Script 2.2 - handle_form.php

		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$comments = $_REQUEST['comments'];

		/*
			Not used:
			$_REQUEST['age']
			$_REQUEST['submit']
		*/ 

		if(isset($_REQUEST['gender'])) {
			$gender = $_REQUEST['gender'];
		} else {
			$gender = null;
		}

		echo "Thank you, <strong>$name</strong> for the
		following comments:\n<p>$comments</p>\n<p>We will
		reply to you at <em>$email</em>.</p>\n";

		if($gender == 'M') {
			echo '<p><strong>Good day, Sir!</strong></p>';
		} elseif($gender == 'F') {
			echo '<p><strong>Good day, Madam!</strong></p>';
		} else {
			echo '<p style="color:red"><strong>You forgot to enter in your gender!</strong></p>';
		}

	?>

	</body>
</html>