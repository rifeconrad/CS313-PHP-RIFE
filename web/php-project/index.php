<?php
try
{
	$DATABASE_URL='postgres://cgojnkckkncmxf:e510ef76e9ff31ffd3069afa499c4d2bd748c1f2ea77e9da50f906dbe8f8c3e1@ec2-23-21-184-181.compute-1.amazonaws.com:5432/dfnorfi59oivff';


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