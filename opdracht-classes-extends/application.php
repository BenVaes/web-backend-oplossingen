<?php
	
	function __autoload( $className )
	{
		require_once( $className . '.php' );
	}

	// ANIMAL CLASS
	$panter	=	new Animal('Pink Panther', 'male', 100);
	$hond	=	new Animal('Tipsy', 'male', 100);
	
	$hond->changeHealth(-10);

	$walvis	=	new Animal('Moby Dick', 'female', 80);

	// LION CLASS (extends ANIMAL)
	$simba 	= 	new Lion('Simba', 'male', 100, 'Congo lion');
	$scar 	= 	new Lion('Scar', 'female', 100, 'Kenia lion');

	// ZEBRA CLASS (extends ANIMAL)
	$zeke = new Zebra('Zeke', 'male', 120, 'Quagga');
	$zana = new Zebra('Zana', 'female', 100, 'Selous');

	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Opdracht classes extends</title>
</head>
	<body>
	

		<h1>Opdracht classes extends</h1>
		
		
		<p><?php echo $panter->getName() ?> is van het geslacht <?php echo $panter->getSex() ?> en heeft momenteel <?php echo $panter->getHealth() ?> levenspunten</p>

		<p><?php echo $hond->getName() ?> is van het geslacht <?php echo $hond->getSex() ?> en heeft momenteel <?php echo $hond->getHealth() ?> levenspunten</p>

		<p><?php echo $walvis->getName() ?> is van het geslacht <?php echo $walvis->getSex() ?> en heeft momenteel <?php echo $walvis->getHealth() ?> levenspunten</p>


	<h1>Specifieke dierenklassen die gebaseerd zijn op de Animal klasse</h1>

	<h2>Leeuwen</h2>

		<p>Simba's (soort: <?php echo $simba->getSpecies() ?>) special move: <?php echo $simba->doSpecialMove() ?></p>
		<p>Scar's (soort: <?php echo $scar->getSpecies()  ?>) special move: <?php echo $scar->doSpecialMove() ?></p>


	<h2>Zebras</h2>

		<p>Zekes's (soort: <?php echo $zeke->getSpecies() ?>) special move: <?php echo $zeke->doSpecialMove() ?></p>
		<p>Zekes's (soort: <?php echo $zana->getSpecies()  ?>) special move: <?php echo $zana->doSpecialMove() ?></p>


	</body>
</html>