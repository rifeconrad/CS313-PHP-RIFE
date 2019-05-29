<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>
	<?php
		include 'header.php';

		if (isset($_GET['purchase'])) {
			if ($_GET['purchase'] == "confirmed") {
				echo "<p style='color:red;'>Purchase Complete!</p>";
			}
		}
		else if (!isset($_SESSION['cart']) || !empty($_SESSION['cart'])) {
	?>

	<form action="checkout.php?active=CHECKOUT&purchase=confirmed" method="post">
		First Name <input type="text" name="first_name" required></input><br>
		Last Name <input type="text" name="last_name" required></input><br>
		Street <input type="text" name="street" required></input><br>
		City <input type="text" name="city" required></input><br>
		State <input type="text" name="state" required></input><br>
		<button type="submit">Confirm Purchase</button>
	</form>

	<?php
		} else {
	?>
	<p style="color:red;">NO ITEMS IN CART</p>
	<?php
		}
	?>
</body>
</html>