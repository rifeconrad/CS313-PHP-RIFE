<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>

	<script src="index.js"></script>
</head>
<body>
	<?php 
		session_start(); 
		include 'header.php';

		$items = array("Food", "Cat", "Dog", "Fish");

		foreach($items as $item) {
			echo "$item<input type='text' name='q$item' maxlength='2' size='2'/><button id='item_btn' value='$item'>Add To Cart</button><br>";
		}
	?>

</body>
</html>