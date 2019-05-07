<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>
</head>
<body>
	<?php include 'header.php';?>

	<form action="input.php" method="post">
		<?php
			$items = array("Food", "Cat", "Dog", "Fish");

			foreach($items as $item) {
				echo "<input type='checkbox' name='item' value='$item'>$item<br>";
			}
		?>
		<input type="submit">

	</form>
</body>
</html>