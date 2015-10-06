<?php
	$jaartal = 2012;
	$jaarSoort = "";

	if ($jaartal %4 == 0)
	{
		$jaarSoort = "Wél een schrikkeljaar";
	} else
	{
		$jaarSoort = "Géén schrikkeljaar";
	}

	if ($jaartal %100 == 0)
	{
		$jaarSoort = "Géén schrikkeljaar";
		if ($jaartal %400 == 0)
		{
			$jaarSoort = "Wél een schrikkeljaar";
		}
	}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Opdracht conditional statements if else</title>
    </head>
    <body>
        
			<h1>Opdracht conditional statements if else</h1>

			<h2>Deel 1</h2>
			<p> <?php echo $jaarSoort ?></p>

    </body>
</html>