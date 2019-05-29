
<?php 
	
 	require './classes/product.php';

	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>

	<table style="width:100%" id="product_container">
    <tr>
      <th>Name</th>
      <th>Price</th> 
      <th>Description</th>
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
					<div> 
						<?php echo $item->name . " " . $item->price; ?> 
					</div>
				</td>
			</tr>
	<?php

				$i++;
			}
		}

		echo "<tr><td></td><td></td><td></td><td>Total: $" . $total . "</td></tr>";
	?>
</body>
<html>