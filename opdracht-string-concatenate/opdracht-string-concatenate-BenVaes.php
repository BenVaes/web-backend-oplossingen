<?php
	$voornaam = "Ben";
	$familienaam = "Vaes";
	$volledigeNaam = $voornaam . ' ' . $familienaam;
	
	$volledigeNaamLengte = strlen($volledigeNaam);
?>

<!doctype html>
<html>
    <head>
        <title>Opdracht string concatenate</title>
    </head>
    <body>
        
			<h1>Opdracht string concatenate</h1>

			<p><?php echo $volledigeNaam ?></p>
			<p><?php echo $volledigeNaamLengte ?></p>
		


    </body>
</html>