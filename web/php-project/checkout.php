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
		First Name <input type="text" name="first_name"></input><br>
		Last Name <input type="text" name="last_name"></input><br>
		Street <input type="text" name="street"></input><br>
		City <input type="text" name="city"></input><br>
		State <input type="text" name="state"></input><br>
		<button type="submit">Confirm Purchase</button>
	</form>
</body>
</html>