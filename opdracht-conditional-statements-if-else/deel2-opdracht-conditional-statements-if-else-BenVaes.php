<?php
	$getalInSeconden = 221108521;
	$inMinuten = floor($getalInSeconden/60);
	$inUren = floor($inMinuten/60);
	$inDagen = floor($inUren/24);
	$inWeken = floor($inDagen/7);
	$inMaanden = floor($inDagen/31);
	$inJaren = floor($inDagen/365);

	//Floor gebruikt want in het voorbeeld (bij de opdracht.html) 
	//is er ook naar beneden afgerond. Een alternatief zou eventueel round() zijn.
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht conditional statements if else</title>
    </head>
    <body>
        
			<h1>Opdracht conditional statements if else</h1>

			<h2>Deel 2</h2>
			<p> Aantal seconden (<?php echo $getalInSeconden?>) omgezet naar:
				<ul>
					<li>Minuten: <?php echo $inMinuten?></li>
					<li>Uren: <?php echo $inUren ?></li>
					<li>Dagen: <?php echo $inDagen ?></li>
					<li>Weken: <?php echo $inWeken ?></li>
					<li>Maanden: <?php echo $inMaanden ?></li>
					<li>Jaren: <?php echo $inJaren ?></li>
				</ul>
			</p>

    </body>
</html>