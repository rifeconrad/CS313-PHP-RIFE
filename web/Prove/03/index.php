<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>
</head>
<body>
	<?php include 'header.php';?>

	<form action="cart.php" method="post">
		<?php
			$items = array("Food", "Cat", "Dog", "Fish");

			foreach($items as $item) {
				echo "<input type='checkbox' name='item' value='$item'>$item<input type='text' name='$item_quantity' /><br>";
			}
		?>
		<button>Go To Cart</button>
	</form>

</body>
</html>