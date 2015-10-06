<?php
	$fruit = "kokosnoot";
	$fruitLengte = strlen($fruit);
	$fruitPositie = strpos($fruit, 'o');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht string extra functions</title>
    </head>
    <body>
        
			<h1>Opdracht string extra functions</h1>

			<h2>Deel 1</h2>
			<p>Lengte fruit: <?php echo $fruitLengte ?></p>
			<p>Positie letter o<?php echo $fruitPositie ?></p>

    </body>
</html>