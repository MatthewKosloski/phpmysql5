<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>
		
	<!-- <form action="calendar.php" method="POST"></form> -->
	
	<?php 
		# Script 2.6 - calendar.php

		$months = [1 => 'Janurary', 'February', 'March', 
		'April', 'May', 'June', 'July', 'August', 'September',
		'October', 'November', 'December'];

		$days = range(1, 31);
		$years = range(2017, 2027);

		// Make the months dropdown
		echo '<select name="month">';
		foreach($months as $key => $value) {
			echo "<option value=\"$key\">$value</option>";
		}
		echo '</select>';

		// Make the days dropdown
		echo '<select name="day">';
		foreach($days as $value) {
			echo "<option value=\"$value\">$value</option>";
		}
		echo '</select>';

		// Make the years dropdown
		echo '<select name="day">';
		foreach($years as $value) {
			echo "<option value=\"$value\">$value</option>";
		}
		echo '</select>';

	?>
	
	</body>
</html>