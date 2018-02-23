<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>	
	<?php 
		# Script 1.8 - numbers.php

		$quantity = 30;
		$price = 119.95;
		$taxrate = 0.05;

		$total = $quantity * $price;
		$total = $total + ($total * $taxrate);

		$total = number_format($total, 2);

		echo "<p>You are purchasing <strong>$quantity</strong>
		widgets at a cost of <strong>\$$price</strong> each.
		With tax, the total comes to <strong>\$$total</strong>.</p>";

	?>
	</body>
</html>