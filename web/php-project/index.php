<?php

	require 'db_runner.php';
  session_start();
  
	$username = "";
  	if (isset($_POST['uname'])) {
  	    $username = htmlspecialchars($_POST['uname']);
    	foreach ($db->query('SELECT * FROM users') as $row)
    	{
   	   		if ($row['username'] == $username && $_POST['psw'] ==  $row['password']) {
    	    	$_SESSION['password_success'] = true;
    	  	}
    	}
  	}

  if (!$_SESSION['password_success']) {
  	header('Location: login.php?attempt=fail'); 
  } else {
  	$_SESSION['logged_in'] = true;
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>
	<?php
		include 'header.php';

    	echo "Welcome " . $username;

		foreach ($db->query('SELECT * FROM stock') as $row)
    	{
	?>
		<div>
			<?php echo $row['name']; ?>
			<?php echo $row['price']; ?>
			<?php echo $row['quantity']; ?>
			<?php echo $row['description']; ?>
		</div>
	<?php
		}
	?>
</body>
</html>