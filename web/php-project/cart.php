
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
	<?php
		include 'header.php';

		$total = 0;
		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $item) {
				$total = $total + floatval($item->price);
	?>
				<div> 
					<?php echo $item->name . " " . $item->price; ?> 
				</div>
	<?php

				$i++;
			}
		}

		echo "Total: " . $total . "<br>";
	?>
</body>
</html>