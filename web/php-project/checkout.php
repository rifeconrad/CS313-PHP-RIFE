<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>

  <link rel="stylesheet" type="text/css" href="./stylesheets/login.css">
</head>
<body>
	<?php
		include 'header.php';

		if (isset($_GET['purchase'])) {
			if ($_GET['purchase'] == "confirmed") {
				echo "<p style='color:red;'>Purchase Complete!</p>";
				unset($_SESSION['cart']);
			}
		}
		else if (!isset($_SESSION['cart']) || !empty($_SESSION['cart'])) {
	?>

	<div class="login_box">
		<form class="form_container" action="checkout.php?active=CHECKOUT&purchase=confirmed" method="post">
			<span class="ind">First Name</span> <input type="text" name="first_name" required></input><br>
			<span class="ind">Last Name</span> <input type="text" name="last_name" required></input><br>
			<span class="ind">Street</span> <input type="text" name="street" required></input><br>
			<span class="ind">City</span> <input type="text" name="city" required></input><br>
			<span class="ind">State</span> <input type="text" name="state" required></input><br>
			<button class="form_button" type="submit">Confirm Purchase</button>
		</form>
	</div>

	<?php
		} else {
	?>
	<p style="color:red;">NO ITEMS IN CART</p>
	<?php
		}
	?>
</body>
</html>