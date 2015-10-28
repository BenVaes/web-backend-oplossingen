<?php
	function berekenSom($getal1, $getal2)
 	{
 		$som = $getal1 + $getal2;
 		return $som;
 	}

 	function vermenigvuldig($getal1, $getal2)
 	{
 		$vermenigvuldiging = $getal1 * $getal2;
 		return $vermenigvuldiging;
 	}

 	function isEven($getal)
 	{
 		if($getal %2 == 0){
 			return "true";
 		}
 		else{
 			return "false";
 		}
 	}

 	function uitbreiding($string)
 	{
 		$arrayUitbreiding = array();
 		$arrayUitbreiding[0] = strlen($string);
 		$arrayUitbreiding[1] = strtoupper($string);
 		return $arrayUitbreiding;
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