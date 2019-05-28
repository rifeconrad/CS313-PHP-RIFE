<?php

	require 'db_runner.php';
  require './classes/product.php';
  session_start();

    if (!isset($_SESSION['cart'])) {
      $_SESSION['cart'] = array();
    }

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

  if (isset($_GET['item'])) {
    $item = htmlspecialchars($_GET['item']);
    $price = htmlspecialchars($_GET['price']);

    foreach ($db->query('SELECT * FROM stock') as $row)
    {
      if ($row['name'] == $item) {          
        $product = new Product($row['name'], $row['price']);
        if (!in_array($product, $_SESSION["cart"])) {
          array_push($_SESSION["cart"], $product); 
          break;
        }
      }
    }
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
    	echo "<div id='user_welcome'>Welcome " . $_SESSION['username'] . "!</div>";
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
      <td><a id="add_to_cart" href="index.php?active=HOME&item=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>">Add to Cart!</a></td>
		<tr>
	<?php
		}
	?>
  </table>

  <br>
  <form action="login.php" method="post">
    <input style="display:none;" type="text" value="out" name="log_status">
    <button type='submit'>Logout</button>
  </form>
</body>
</html>