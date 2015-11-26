<?php

	session_start();

    var_dump( $_POST );
    var_dump( $_SESSION );

    if ( isset( $_POST[ 'submit' ] ) )
    {
        $_SESSION['registrationData'][ 'deel2' ]['straat']  =   $_POST[ 'straat' ];
        $_SESSION['registrationData'][ 'deel2' ]['nummer']  =   $_POST[ 'nummer' ];
        $_SESSION['registrationData'][ 'deel2' ]['gemeente']  =   $_POST[ 'gemeente' ];
        $_SESSION['registrationData'][ 'deel2' ]['postcode']  =   $_POST[ 'postcode' ];
    }

    $registrationData    =   $_SESSION['registrationData'];

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    	<title>Opdracht sessions - deel3</title>

    </head>
    <body>
		
		<h1>Php oefening 021 - deel3</h1>

        <a href="deel1-opdracht-sessions-BenVaes.php?session=destroy">Vernietig sessie</a>

        <h2>Overzicht</h2>

        <ul>

        <?php foreach( $registrationData as $deelKey => $deelArray ):  ?>

            <?php foreach( $deelArray as $data => $value ):  ?>
                <li>
                    <?= $data ?>: <?= $value ?>
                    <p><a href="<?= $deelKey ?>-opdracht-sessions-BenVaes.php?focus=<?= $data ?>">wijzig</a></p>
                </li>
            <?php endforeach ?>

        <?php endforeach ?>
        
        </ul>

		
    </body>
</html>