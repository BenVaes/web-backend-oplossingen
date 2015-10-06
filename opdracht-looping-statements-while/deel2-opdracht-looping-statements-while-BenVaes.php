<?php
	$boodschappenlijstje = array("appels","tonijn","kip","bananen");
    $boodschapTeller = 0;
    while(isset($boodschappenlijstje[$boodschapTeller])){
        
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

    	<h1>Opdracht looping statements while - deel 2</h1>

		<ul>
            <li><?php </li>
        </ul>

        <ul>
            <?php 
                $boodschapCounter       =   0;
            ?>
            <?php while( isset( $boodschappenlijstje [ $boodschapCounter ] ) ):  ?>
                
                <li><?= $boodschappenlijstje [ $boodschapCounter ] ?></li>
                

                <?php $boodschapCounter++ ?>
            <?php endwhile ?>
        </ul>
		
    </body>
</html>