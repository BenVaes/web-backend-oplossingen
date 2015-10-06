<?php
	$fruit = "ananas";
	$fruitPositie = strrpos($fruit, 'a'); //strrpos --> last occurence of letter
	$fruitUpperCase = strtoupper($fruit); //strtoupper --> uppercase maken
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht string extra functions</title>
    </head>
    <body>
        
			<h1>Opdracht string extra functions</h1>

			<h2>Deel 2</h2>
			<p>Positie letter a: <?php echo $fruitPositie ?></p>
			<p>Woord in upper: <?php echo $fruitUpperCase ?></p>

    </body>
</html>