<?php
	$rijen = 10;
    $kolommen = 10;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht looping for</title>
    </head>
    <body>

    	<h1>Opdracht looping statements for - deel 1</h1>

		<table>
            
            <?php for($i = 1; $i <= $rijen; $i++): ?>
                <tr>
                    <?php for($j = 1; $j <= $kolommen; $j++): ?>
                        <td> rij </td>
                    <?php endfor ?>
                </tr> 
            <?php endfor ?>
            
        </table>
		
    </body>
</html>