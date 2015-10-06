<?php
  $getal = 3;
  $dagVanDeWeek = "";

  switch ($getal)
  {
    case 1:
      $dagVanDeWeek = "Maandag";
      break;
    case 2:
    $dagVanDeWeek = "Dinsdag";
    break;
    case 3:
    $dagVanDeWeek = "Woensdag";
    break;
    case 4:
    $dagVanDeWeek = "Donderdag";
    break;
    case 5:
    $dagVanDeWeek = "Vrijdag";
    break;
    case 6:
    $dagVanDeWeek = "Zaterdag";
    break;
    case 7:
    $dagVanDeWeek = "Zondag";
    break;
    default:
    $dagVanDeWeek = "Geef een getal van 1 tot en met 7 in.";
 }

?>

<!DOCTYPE html>
<html>
<head><title>opdracht conditional statements switch</title></head>
<body>

	<h1>Opdracht</h1>

	<p>
		Dag van de week: <?php echo $dagVanDeWeek ?>
	</p>

</body>
</html>
