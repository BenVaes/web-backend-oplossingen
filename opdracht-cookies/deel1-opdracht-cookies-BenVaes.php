<?php 
	
	// Bestand inladen met userData
	$fileContent	=	file_get_contents( 'deel1-opdracht-cookies-BenVaes.txt' );

	// Omzetten van fileContent naar een array
	$userData		=	explode( ',', $fileContent );

	// Variabelen declareren
	$message			=	false;
	$isAuthenticated	=	false;

	// Nagaan of er al een cookie bestaat met als naam authenticated (als er al een is, doorgaan naar else)
	if ( !isset( $_COOKIE['authenticated'] ) )
	{
		// Nagaan of er op submit geklikt is
		if ( isset( $_POST[ 'submit' ] ) )
		{
			// Nagaan of de username en password gelijk zijn aan de data geschreven in het txt-bestand
			if ( $_POST[ 'username' ] == $userData[ 0 ] &&
					$_POST[ 'password' ] == $userData[ 1 ] )
			{
				// Cookie aanmaken met als naam authenticated
				setcookie( 'authenticated', true, time() + 3600 );
				header( 'location: deel1-opdracht-cookies-BenVaes.php' );
			}
			else
			{
				// Bericht declareren bij error
				$message = 'Er ging iets mis. Probeer opnieuw.';
			}
		}
	}
	else
	{
		$message			=	'U bent ingelogd.';
		$isAuthenticated	=	true;
	}
?>

<!DOCTYPE html>
<html>
<head></head>
	<body>
	

		<h1>Inloggen</h1>
		
			<?php if ($message): ?>
			<?=	$message ?>
		<?php endif ?>

		<?php if ( !$isAuthenticated ): ?>
		
			<form action="deel1-opdracht-cookies-BenVaes.php" method="post">
				<ul>
					<li>
						<label for="username">Gebruikersnaam: </label>
						<input type="text" name="username" id="username" value="jan">
					</li>
					<li>
						<label for="password">Paswoord: </label>
						<input type="password" name="password" id="password" value="paswoord01">
					</li>
				</ul>
				<input type="submit" name="submit" value="inloggen">
			</form>
		<?php else: ?>

			<a href="deel1-opdracht-cookies-BenVaes.php?logout=true">Uitloggen</a>

		<?php endif ?>

	</body>
</html>