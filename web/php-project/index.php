<?php

	require 'db_runner.php';

  	if (isset($_POST['uname'])) {
  	    $username = htmlspecialchars($_POST['uname']);
   	    $password_success = false;
    	foreach ($db->query('SELECT * FROM users') as $row)
    	{
   	   		if ($row['username'] == $username && $_POST['psw'] ==  $row['password']) {
    	    	$password = $row['password'];
    	  	}
    	}
  	}

  if (!$password) {
  	header('Location: login.php?attempt=fail'); 
  }
?>