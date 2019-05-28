
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

		if (isset($_SESSION['cart'])) {
			$total = 0;
			foreach ($_SESSION['cart'] as $item) {
				$total += $item->price;
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