
<?php 
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
 		require './classes/product.php';

		if (isset($_SESSION['cart'])) {
			$i = 0;
			foreach ($_SESSION['cart'] as $item) {
	?>
				<div> 
					<?php echo $i; ?>
					<?php echo $item['name']; ?> 
				</div>
	<?php

				$i++;
			}
		}
	?>
</body>
</html>