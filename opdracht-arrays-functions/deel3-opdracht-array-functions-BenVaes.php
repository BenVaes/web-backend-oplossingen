<?php
	$getallen = array(8, 7, 8, 7, 3, 2, 1, 2, 4);
	$nieuweArray = array_unique($getallen);
	$reverseSort = rsort($nieuweArray);
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht arrays</title>
    </head>
    <body>

    	<h1>Opdracht array functions - deel 3</h1>

		<p>
			Nieuwe array: <?php var_dump($nieuweArray) ?>
		</p>
		<p>
			Array is gesorteerd (Uit de hierboven geillustreerde array zijn eerst de dubbels verwijdert en dan is deze array gesorteerd van hoog naar laag.) <?php var_dump($reverseSort) ?>
		</p>
    </body>
</html>