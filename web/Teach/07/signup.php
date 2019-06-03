<!DOCTYPE html>
<html>
<head>
	<title>Teach 07 Sign Up</title>
</head>
<body>

	<?php
		require "db_runner.php";

		if (isset($_POST['username']) && isset($_POST['password'])) {
			
		}
	?>

	<form action="index.php" method="POST">
		<input type="text" name="username" placeholder="New Username" required></input><br>
		<input type="text" name="password" placeholder="New Password" required></input><br>
		<button type="submit">Login</button>
	</form>

</body>
</html>