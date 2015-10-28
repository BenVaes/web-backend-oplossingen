<?php
		$username = "Ben";
		$password = "test";
		$bericht = "Inloggen alstublieft";

		if ( isset( $_POST ['submit'] ) )
	{
		if ( $_POST['username'] == $username && $_POST['password'] == $password )
		{
			$bericht = 'Welkom';
		}
		else
		{
			$bericht = 'Er ging iets mis tijdens het inloggen. Probeer opnieuw.';
		}
	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>opdracht post</title>
    </head>
    <body>

    	<h1>Opdracht post - deel 1</h1>

		<h2>Aanmelden</h2>

		<p><?php echo $bericht ?></p>

		<form action="deel1-opdracht-post-BenVaes.php" method="post">
			<label id="username">Username:</label> </br> <input type="username" name="username"></br>
			<label id="username">Password:</label> </br> <input type="password" name="password"></br>
			<input type="submit" name="submit"></br>
		</form>




    </body>
</html>