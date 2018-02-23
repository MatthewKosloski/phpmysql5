<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>
		
	<p>Some North American States, provinces, and Territories.</p>

	<?php 
		# Script 2.7 - multi.php

		$mexico = [
			'YU' => 'Yucatan',
			'BC' => 'Baja California',
			'OA' => 'Oaxaca'
		];

		$us = [
			'MD' => 'Maryland',
			'IL' => 'Illinois',
			'PA' => 'Pennsylvania',
			'IA' => 'Iowa'
		];

		$north_america = [
			'Mexico' => $mexico,
			'United States' => $us
		];

		foreach($north_america as $country => $list) {
			echo "<h2>$country</h2><ul>";
			foreach($list as $key => $value) {
				echo "<li>$key - $value</li>";
			}
			echo '</ul>';
		}

	?>

	</body>
</html>