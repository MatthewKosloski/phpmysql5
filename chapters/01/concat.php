<!DOCTYPE html>
<html lang="en-us"> 
	<head>
		<meta charset="utf-8">	
	</head>
	<body>	
	<?php 
		# Script 1.7 - concat.php

		$first_name = 'Haruki';
		$last_name = 'Murakami';
		$author = $first_name . ' ' . $last_name;
		$book = 'Kafka on the Shore';

		echo "<p>The book <em>$book</em> 
		was written by $author.</p>";
	?>
	</body>
</html>