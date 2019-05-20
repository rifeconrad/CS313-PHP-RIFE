<?php
try
{
	echo 'UPDATED';
	$DATABASE_URL='enigmatic-ravine-85455';


  	$user = 'username';
 	$password = 'password';
    $db = new PDO('pgsql:host=localhost;dbname=$DATABASE_URL', $user, $password);

    // this line makes PDO give us an exception when there are problems,
    // and can be very helpful in debugging! (But you would likely want
    // to disable it for production environments.)
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'SUCCESS!';
}
catch (PDOException $ex)
{
    echo 'Error!: ' . $ex->getMessage();
    die();
}
?>