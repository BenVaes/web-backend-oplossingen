<?php
	session_start();

	function dump_var($var)
	{
		echo '<pre>';
		var_dump($var);
		echo '</pre>';
	}

	if(!isset($_SESSION['taken'])){
		// Nagaan of er al een sessie opgeslagen is, als dit niet is, een nieuwe variabele maken namelijk taken
		$taken = array();
	}
	else {	
		$taken = $_SESSION['taken'];
	}
	//dump_var($taken);
	if(isset($_POST['toevoegenToDo']))
	{
		//toevoegen van taak aan array taken
		$nieuweTaak = $_POST['beschrijving'];
		
		$taken[] = array("beschrijving"=>$nieuweTaak, "done"=>false);
	}
	else if(isset($_POST['verwijderToDo']))
	{
		//Verwijderen van taak van array taken
		$deleteKey = $_POST['verwijderToDo'];
		
		unset($taken[$deleteKey]);
	}
	else if(isset($_POST['toggleToDo']))
	{
		//toggelen van done status in array taken
		$toggleKey = $_POST['toggleToDo'];	
		$taken[$toggleKey]['done'] = !$taken[$toggleKey]['done'];
	}
	//dump_var($taken);
	$_SESSION['taken'] = $taken;
	$toDo = false; //var voor in html
	$done = false; //var voor in html
	//maken array van to do en done
	if(count($taken > 0))
	{
		$doneTaken = array();
		$toDoTaken = array();
		
		foreach($taken as $nr => $taak)
		{
			if($taak["done"])
			{
				//toevoegen aan array van done
				$doneTaken[$nr] = $taak["beschrijving"];
				$done = true;
			}
			else
			{
				//toevoegen aan array van to do
				$toDoTaken[$nr] = $taak["beschrijving"];
				$toDo = true;
			}
		}
	}
?>

<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Todo App</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Todo app</h1>
	<!-- Nog te doen -->
	<?php if(count($taken) > 0): ?>
		<h2>Nog te doen:</h2>
		<?php if($toDo): ?>
			<ul>
			<?php foreach($toDoTaken as $nr => $taak): ?>
				<li>
					<form action="index.php" method="POST">
						<button title="Status wijzigen" id="toggleToDo" name="toggleToDo" value="<?= $nr ?>" class="status not-done"><?= $taak ?></button>
						<button title="Verwijderen" id="verwijderToDo" name="verwijderToDo" value="<?= $nr ?>">Verwijder</button>
					</form>
				</li>
			<?php endforeach ?>
			</ul>
		<?php else: ?>
			<p>Goed gedaan, alle taken zijn gedaan!</p>
		<?php endif ?>
		<h2>Afgewerkte taken:</h2>
		<?php if($done): ?>
			<ul>
				<?php foreach($doneTaken as $nr => $taak): ?>
					<li>
						<form action="index.php" method="POST">
							<button title="Status wijzigen" id="toggleToDo" name="toggleToDo" value="<?= $nr ?>" class="status done"><?= $taak ?></button>
							<button title="Verwijderen" id="verwijderToDo" name="verwijderToDo" value="<?= $nr ?>">Verwijder</button>
						</form>
					</li>
				<?php endforeach ?>
			</ul>
		<?php else: ?>
			<p>Je hebt nog wat taken te doen...</p>
		<?php endif ?>
	<?php else: ?>
		<p>Je hebt nog geen TODO's toegevoegd. Zo weinig werk of meesterplanner?</p>
	<?php endif ?>
	<h1>Todo toevoegen</h1>
	<form action="index.php" method="POST">
		<ul>
			<li>
				<label for="beschrijving">Beschrijving: </label>
				<input type="text" id="beschrijving" name="beschrijving">
			</li>
		</ul>
		<input type="submit" name="toevoegenToDo" value="Toevoegen">
	</form>
</body>
</html>