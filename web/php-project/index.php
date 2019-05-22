<?php

	require 'db_runner.php';
  session_start();

  	if (isset($_POST['uname'])) {
  	  $username = htmlspecialchars($_POST['uname']);
      $_SESSION['username'] = $username;
    	foreach ($db->query('SELECT * FROM users') as $row)
    	{
   	   		if ($row['username'] == $username && $_POST['psw'] ==  $row['password']) {
    	    	$_SESSION['password_success'] = true;
    	  	}
    	}
  	}

  if (!isset($_SESSION['password_success'])) {
    header('Location: login.php?attempt=fail'); 
  }
  if (!$_SESSION['password_success']) {
  	header('Location: login.php?attempt=fail'); 
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>

  <link rel="stylesheet" type="text/css" href="./stylesheets/product.css">
</head>
<body>
	<?php
		include 'header.php';

    if (isset($_SESSION['username'])) {
    	echo "Welcome " . $_SESSION['username'];
    }

		foreach ($db->query('SELECT * FROM stock') as $row)
    	{
	?>
		<div id="product_container">
			<div id="product_detail_container"> <?php echo $row['name']; ?> </div>
			<div id="product_detail_container"> <?php echo $row['price']; ?> </div>
			<div id="product_detail_container"> <?php echo $row['quantity']; ?> </div>
			<div id="product_detail_container"> <?php echo $row['description']; ?> </div>
      <a href="index.php?item=<?php echo $row['name']; ?>"></a>
		</div>
	<?php
		}
	?>
</body>
</html>