<?php
	$text = file_get_contents("text-file.txt");
    $textchars = str_split($text);
    $textcharsGesorteerd = rsort($textchars);
    $textcharsOmgekeerd = array_reverse($textchars);
    $appearanceArray = array();

    foreach ($textcharsOmgekeerd as $key){
        if (isset($appearanceArray[$key]))
        {
            $appearanceArray[$key]++;
        }
        else
        {
            $appearanceArray[$key] = 1;
        }  
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht looping foreach</title>
    </head>
    <body>
        

    	<h1>Opdracht looping statements foreach - deel 1</h1>

        <h3>Array van Z naar A</h1>
        <p><?php var_dump($textchars) ?></p>

        <h3>Array omgekeerd</h1>
        <p><?php var_dump($textcharsOmgekeerd) ?></p>

        <h3>Appearance Array</h1>
        <p><?php var_dump($appearanceArray) ?></p>


        <?php foreach ($textcharsOmgekeerd as $key): ?>
            
        <?php endforeach ?>

		
    </body>
</html> 