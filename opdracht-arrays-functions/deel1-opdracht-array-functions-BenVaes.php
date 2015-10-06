<?php
	$dieren = array("olifant", "aap", "koe","varken", "kraai");
	$aantalDieren = count($dieren);
	$teZoekenDier = "kikker";
	$bericht = "";

	if (in_array($teZoekenDier, $dieren) == True){
		$bericht = "Het dier is gevonden.";
	}else{
		$bericht = "Het dier is niet gevonden.";
	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht arrays</title>
    </head>
    <body>

    	<h1>Opdracht array functions - deel 1</h1>

		<p>
			Aantal elementen in array dieren: <?php echo $aantalDieren ?>
		</p>
		<p>
			Zoeken naar het dier...: <?php echo $bericht ?>
		</p>
		
    </body>
</html>