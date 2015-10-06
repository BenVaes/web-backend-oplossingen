<?php
    $getallen = array(1,2,3,4,5);
    $uitkomst = array_product($getallen);

    $getallenOneven = array();
if ($getallen[0]%2 != 0)
	{
		array_push($getallenOneven, $getallen[0]);
	}

if ($getallen[1]%2 != 0)
	{
		array_push($getallenOneven, $getallen[1]);
	}

if ($getallen[2]%2 != 0)
	{
		array_push($getallenOneven, $getallen[2]);
	}

if ($getallen[3]%2 != 0)
	{
		array_push($getallenOneven, $getallen[3]);
	}

if ($getallen[4]%2 != 0)
	{
		array_push($getallenOneven, $getallen[4]);
	}

  $getallen2 = array(5,4,3,2,1);
  $arraysOpgeteld = array();

for ($i = 0; $i <= 4; $i++)
	{
		$arraysOpgeteld[$i] = $getallen[$i] + $getallen2[$i];
	}

?>

<!DOCTYPE html>
<html>
<head><title>opdracht array basis</title></head>
<body>

	<h1>Opdracht</h1>

  <p>
		Vermenigvuldiging: <?php echo $uitkomst ?>
	</p>
	<p>
		Oneven getallen: <?php var_dump( $getallenOneven) ?>
	</p>
  <p>
    Arrays opgeteld: <?php var_dump($arraysOpgeteld) ?>
  </p>

</body>
</html>
