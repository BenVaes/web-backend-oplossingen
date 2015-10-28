<?php
	$messageContainer = '';

	try 
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', '');

		$queryString = "SELECT *
						FROM bieren
						JOIN brouwers
						WHERE bieren.naam LIKE 'du%'
						AND brouwers.brnaam LIKE '%a%'";

		$statement = $db->prepare($queryString);

		$statement->execute();

		$bieren	=	array();

		while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
		{
			$bieren[] 	=	$row;
		}

		$columnNames	=	array();
		$columnNames[]	=	'Biernummer';

		foreach( $bieren[0] as $key => $bier )
		{
			$columnNames[  ]	=	$key;
		}

	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}
?>

<!doctype html>
<html>
    <head>
        <title>Opdracht CRUD insert</title>
        <style>
        	li{}
        </style>
    </head>
    <body>
        
		<h1>Opdracht CRUD insert</h1>

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		
		<ul>
			<li>
				<label name="brnaam">Brouwernaam</label>
				<input type="text" name="brnaam" id="brnaam">
			</li>
			<li>
				<label name="adres">Adres</label>
				<input type="text" name="adres" id="adres">
			</li>
			<li>
				<label name="postcode">Postcode</label>
				<input type="text" name="postcode" id="postcode">
			</li>
			<li>
				<label name="gemeente">Gemeente</label>
				<input type="text" name="gemeente" id="gemeente">
			</li>
			<li>
				<label name="omzet">Omzet</label>
				<input type="text" name="omzet" id="omzet">
			</li>
		</ul>
		
		<input type="submit" value="Verzenden" name="submit">
	</form>

    </body>
</html>