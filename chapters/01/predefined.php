<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>	
	<?php 
		# Script 1.5 - predefined.php

		// Create a shorthand version of the variable names:
		$file = $_SERVER['SCRIPT_FILENAME'];
		$user = $_SERVER['HTTP_USER_AGENT'];
		$server = $_SERVER['SERVER_SOFTWARE'];

		echo "<p>You are running the file:<br><strong>$file</strong>.</p>\n";
		echo "<p>You are viewing this page using:<br><strong>$user</strong>.</p>\n";
		echo "<p>This server is running:<br><strong>$server</strong>.</p>\n";
	?>
	</body>
</html>