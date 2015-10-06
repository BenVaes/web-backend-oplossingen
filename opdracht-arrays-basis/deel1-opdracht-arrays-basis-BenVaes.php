<?php
    $dieren = array("aap", "koe", "kraai", "neushoorn", "leeuw", "varken", "gans", "olifant", "paard", "bizon");
    $dieren2 = array();
    $dieren2[1] = "aap";
    $dieren2[2] = "koe";
    $dieren2[3] = "kraai";
    $dieren2[4] = "neushoorn";
    $dieren2[5] = "leeuw";
    $dieren2[6] = "varken";
    $dieren2[7] = "gans";
    $dieren2[8] = "olifant";
    $dieren2[9] = "paard";
    $dieren2[10] = "bizon";

    $voertuigen = array('Landvoertuigen' => array('Vespa'),
										'Watervoertuigen' => array('Schoener','Driemaster'),
										'Luchtvoertuigen' => array('Helikopter','B52'));

?>

<!DOCTYPE html>
<html>
<head><title>opdracht array basis</title></head>
<body>

	<h1>Opdracht</h1>

	<p>
		Dieren mogelijkheid 1: <?php var_dump( $dieren) ?>
	</p>
  <p>
		Dieren mogelijkheid 2: <?php var_dump($dieren2) ?>
	</p>
  <p>
    Voertuigen: <?php var_dump($voertuigen) ?>
  </p>

</body>
</html>
