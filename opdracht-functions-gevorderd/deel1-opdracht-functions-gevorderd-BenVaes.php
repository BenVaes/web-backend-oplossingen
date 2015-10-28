<?php
	function berekenSom($getal1, $getal2)
 	{
 		$som = $getal1 + $getal2;
 		return $som;
 	}
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht functions</title>
    </head>
    <body>

    	<h1>Opdracht functions - deel 1</h1>

		<p>
			Som: <?php echo berekenSom(1,2) ?>
		</p>
		<p>
			Vermenigvuldiging: <?php echo vermenigvuldig(1,2) ?>
		</p>
		<p>
			Even: <?php echo isEven(25) ?>
		</p>
		<p>
			Uitbreiding: <?php var_dump(uitbreiding("Mijn naam is Ben")) ?>
		</p>
		
    </body>
</html>