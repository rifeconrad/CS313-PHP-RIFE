<!DOCTYPE html>
<html>
<head>
	<title>Teach 07 Sign Up</title>
</head>
<body>

	<?php
		require "db_runner.php";


	?>

	<form action="index.php" method="POST">
		<input type="text" name="new_username" placeholder="New Username" required></input><br>
		<input type="text" name="new_password" placeholder="New Password" required></input><br>
		<button type="submit">SIGN UP</button>
	</form>

</body>
</html>