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

  if (!$password || (!isset($_POST['uname']) && !$_SESSION['logged_in'])) {
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

		foreach ($db->query('SELECT * FROM stock') as $row)
    	{

    		echo "Welcome " . $username;
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