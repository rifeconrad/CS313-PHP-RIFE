<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>

	<script src="index.js"></script>
</head>
<body>
	<form id="browse" action="cart.php" method="post">
		<?php
			include 'header.php';

			$items = array("Food", "Cat", "Dog", "Fish");

			foreach($items as $item) {
				echo "<input type='checkbox' name='item[]' value='$item'>$item<input type='text' name='q$item' maxlength='2' size='2'/><br>";
			}
		?>
		<button>Go To Cart</button>
	</form>

</body>
</html>