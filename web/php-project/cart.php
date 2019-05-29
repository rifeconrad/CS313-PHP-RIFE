
<?php 
	
 	require './classes/product.php';

	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>

	<link rel="stylesheet" type="text/css" href="./stylesheets/product.css">
</head>
<body>

	<table style="width:100%" id="product_container">
    <tr>
      <th>Name</th>
      <th>Price</th> 
    </tr>
	<?php
		include 'header.php';

		$total = 0;
		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $item) {
				$price = ltrim($item->price, '$');
				$total = $total + floatval($price);
	?>
			<tr>
				<td>
					<?php echo $item->name; ?>
				</td>
				<td>
					<?php echo $item->price; ?>
				</td>
			</tr>
	<?php

				$i++;
			}
		}

		echo "<tr><td></td><td></td></tr><tr><td>TOTAL</td><td>$" . $total . "</td></tr>";
	?>
</body>
<html>