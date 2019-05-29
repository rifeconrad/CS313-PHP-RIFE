<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>
	<?php
		include 'header.php';
	?>

	<form action="checkout.php?active=CHECKOUT&confirmed=TRUE" method="post">
		First Name <input type="text" name="first_name" required></input><br>
		Last Name <input type="text" name="last_name" required></input><br>
		Street <input type="text" name="street" required></input><br>
		City <input type="text" name="city" required></input><br>
		State <input type="text" name="state" required></input><br>
		<button type="submit">Confirm Purchase</button>
	</form>
</body>
</html>