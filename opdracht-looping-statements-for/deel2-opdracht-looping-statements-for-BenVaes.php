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
        <style>
            .green {
                background-color: green;
            }
        </style>

    	<h1>Opdracht looping statements for - deel 2</h1>

		<table>
            
            <?php for($i = 0; $i <= $rijen; $i++): ?>
                    <tr>
                        <?php for($j = 0; $j <= $kolommen; $j++): ?>
                            
                            <?php if(($i*$j)%2 == 0):?>
                                <td> <?= $i * $j ?> </td>
                            <?php endif ?>
                            <?php if(($i*$j)%2 != 0):?>
                                <td class="green"> <?= $i * $j ?> </td>
                            <?php endif ?>

                        <?php endfor ?>
                    </tr>
            <?php endfor ?>
            
        </table>
		
    </body>
</html> 