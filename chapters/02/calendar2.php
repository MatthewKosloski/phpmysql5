<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>
		
	<!-- <form action="calendar.php" method="POST"></form> -->
	
	<?php 
		# Script 2.9 - calendar2.php

		$months = [1 => 'Janurary', 'February', 'March', 
		'April', 'May', 'June', 'July', 'August', 'September',
		'October', 'November', 'December'];

		// Make the months dropdown
		echo '<select name="month">';
		foreach($months as $key => $value) {
			echo "<option value=\"$key\">$value</option>";
		}
		echo '</select>';

		// Make the days dropdown
		echo '<select name="day">';
		for($day = 1; $day <= 31; $day++) {
			echo "<option value=\"$day\">$day</option>";
		}
		echo '</select>';

		// Make the years dropdown
		echo '<select name="day">';
		for($year = 2017; $year <= 2027; $year++) {
			echo "<option value=\"$year\">$year</option>";
		}
		echo '</select>';

	?>
	
	</body>
</html>