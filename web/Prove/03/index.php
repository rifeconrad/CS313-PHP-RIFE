<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>

	
</head>
<body>
	<form name="browse" action="cart.php">
		<?php 
			session_start(); 
			include 'header.php';

			$items = array("Food", "Cat", "Dog", "Fish");

			foreach($items as $item) {
				echo "$item<input type='text' id='q$item' maxlength='2' size='2'/><button id='item_btn' value='$item'>Add To Cart</button><br>";
			}
		?>
	</form>
<script src="index.js"></script>
</body>
</html>