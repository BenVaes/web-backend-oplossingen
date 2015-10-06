<?php
	$lettertje = "e";
	$cijfertje = 3;
	$langstewoord = "zandzeepsodemineralenwatersteenstralen";

	$langsteWoordReplaced = str_replace ( $lettertje , $cijfertje , $langstewoord );
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht string extra functions</title>
    </head>
    <body>
        
			<h1>Opdracht string extra functions</h1>

			<h2>Deel 3</h2>
			<p>Replaced woord: <?php echo $langsteWoordReplaced ?></p>

    </body>
</html>