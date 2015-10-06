<?php
	$getal = 0;
	$lijstGetallen = "";
	$lijstGetallen2 = "";
	while ($getal<=100) {
    	$lijstGetallen .= $getal . " ,";
    	if ($getal % 3 == 0){
    		if ($getal > 40 && $getal < 80){
    			$lijstGetallen2 .= $getal . " ,";
    		}
    	}
    	$getal++;
  	}


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht looping while</title>
    </head>
    <body>

    	<h1>Opdracht looping statements while - deel 1</h1>

		<p>
			Lijst van de getallen: <?php echo $lijstGetallen ?>
		</p>
		<p>
			Lijst 2 van getallen: <?php echo $lijstGetallen2 ?>
		</p>
		
    </body>
</html>