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

  if (!$password || !isset($_POST['uname'])) {
  	header('Location: login.php?attempt=fail'); 
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