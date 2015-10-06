<?php
	$getal = 2;
	$dagVanDeWeek= "";

	if ($getal == 1){
		$dagVanDeWeek = "maandag";
	}
	if ($getal == 2){
		$dagVanDeWeek = "dinsdag";
	}
	if ($getal == 3){
		$dagVanDeWeek = "woensdag";
	}
	if ($getal == 4){
		$dagVanDeWeek = "donderdag";
	}
	if ($getal == 5){
		$dagVanDeWeek = "vrijdag";
	}
	if ($getal == 6){
		$dagVanDeWeek = "zaterdag";
	}
	if ($getal == 7){
		$dagVanDeWeek = "zondag";
	}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht conditional statements if</title>
    </head>
    <body>
        
			<h1>Opdracht conditional statements if</h1>

			<h2>Deel 1</h2>
			<p><?php echo $dagVanDeWeek?></p>

    </body>
</html>