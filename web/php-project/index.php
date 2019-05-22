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
    	echo "<div id='user_welcome'>Welcome " . $_SESSION['username'] . "</div>";
    }
  ?>
  <table style="width:100%" id="product_container">
    <tr>
      <th>Name</th>
      <th>Price</th> 
      <th>Description</th>
      <th></th>
    </tr>
  <?php
		foreach ($db->query('SELECT * FROM stock') as $row)
    	{
	?>
    <tr>
			<td><div id="product_detail_container"> <?php echo $row['name']; ?> </div></td>
			<td><div id="product_detail_container"> <?php echo $row['price']; ?> </div></td>
			<td><div id="product_detail_container"> <?php echo $row['description']; ?> </div></td>
      <td><a id="add_to_cart" href="index.php?item=<?php echo $row['name']; ?>">Add to Cart!</a></td>
		<tr>
	<?php
		}
	?>
  </table>
</body>
</html>