<?php


	session_start();

	if ( isset( $_GET['session'] ) )
    {
        if ( $_GET['session']  == 'destroy' )
        {
            session_destroy( );
            header( 'location: deel1-opdracht-sessions-BenVaes.php' );
        }
    }

	var_dump( $_SESSION );

	$email		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'email'] : '';
	$nickname		=	( isset( $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] ) ) ? $_SESSION[ 'registrationData' ][ 'deel1' ][ 'nickname'] : '';

?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Opdracht session</title>
</head>

<body class="web-backend-voorbeeld">
	<h2>Deel1: registratiegegevens</h2>

	<form action="deel1-opdracht-sessions-BenVaes.php" method="POST">
			
		<ul>
			<li>
				<label for="email">Email</label>
				<input type="text" id="email" name="email" value="<?= $email ?>" placeholder="vul email in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "email" ) ? 'autofocus' : '' ?>>
			</li>
			<li>
				<label for="nickname">Nickname</label>
				<input type="text" id="nickname" name="nickname" value="<?= $nickname ?>" placeholder="vul nickname in" <?= ( isset( $_GET['focus'] ) && $_GET['focus'] == "nickname" ) ? 'autofocus' : '' ?>>
			</li>
		</ul>

		<input type="submit" name="submit">

	</form>
	

</body>
</html>