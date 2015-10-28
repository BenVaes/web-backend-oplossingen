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
        <title>Opdracht CRUD query</title>

        <style>
        	tr{border:'1px'; border-style:solid; width: '20px';}
        	table{border:'1px'; border-style:solid;}
        </style>
    </head>
    <body>
        
		<h1>Opdracht CRUD query</h1>

		<table>
			<thead>
				<tr>
				<?php foreach ($columnNames as $columnName): ?>
					<th><?php echo $columnName ?></th>
				<?php endforeach ?>
				<tr>
			</thead>

			<tbody>
				<?php foreach ($bieren as $key => $bier): ?>
				<tr class="<?= ( ( $key + 1) %2 == 0 ) ? 'even' : '' ?>">
					<td><?= ($key + 1) ?></td>
					<?php foreach ($bier as $value): ?>
						<td><?= $value ?></td>
					<?php endforeach ?>
				</tr>
			<?php endforeach ?>
			</tbody>
			
		</table>	

    </body>
</html>