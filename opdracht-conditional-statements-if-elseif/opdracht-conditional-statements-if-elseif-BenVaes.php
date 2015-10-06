<?php
  $getal = 10;
  $antwoord = "";

  if ($getal >= 0 && $getal < 10){
    $antwoord = "Het getal ligt tussen 0 en 10";
  }
  elseif ($getal >= 10 && $getal < 20){
    $antwoord = "Het getal ligt tussen 10 en 20";
  }
  elseif ($getal >= 20 && $getal < 30){
    $antwoord = "Het getal ligt tussen 20 en 30";
  }
  elseif ($getal >= 30 && $getal < 40){
    $antwoord = "Het getal ligt tussen 30 en 40";
  }
  elseif ($getal >= 40 && $getal < 50){
    $antwoord = "Het getal ligt tussen 40 en 50";
  }
  elseif ($getal >= 50 && $getal < 60){
    $antwoord = "Het getal ligt tussen 50 en 60";
  }
  elseif ($getal >= 60 && $getal < 70){
    $antwoord = "Het getal ligt tussen 60 en 70";
  }
  elseif ($getal >= 70 && $getal < 80){
    $antwoord = "Het getal ligt tussen 70 en 80";
  }
  elseif ($getal >= 80 && $getal < 90){
    $antwoord = "Het getal ligt tussen 80 en 90";
  }
  elseif ($getal >= 90 && $getal < 100){
    $antwoord = "Het getal ligt tussen 90 en 100";
  }

  $omgekeerd = strrev($antwoord);
?>

<!DOCTYPE html>
<html>
<head><title>opdracht conditional statements if elseif</title></head>
<body>

	<h1>Opdracht</h1>

	<p>
		Antwoord: <?php echo $antwoord ?>
    <br/>
    Het antwoord omgekeerd: <?php echo $omgekeerd ?>
	</p>

</body>
</html>
