<!DOCTYPE html>
<html>
<head>
	<title>Teach 07 Login</title>
</head>
<body>

	<?php
		include "db_runner.php";

		if (isset($_POST['new_username']) && isset($_POST['new_password'])) {
			$username = htmlspecialchars($_POST['new_username']);
			$password = htmlspecialchars($_POST['new_password']);

			if ($username != "" || $password != "") {
				$db_insert = $db->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');

				$db_insert->bindValue(':username', $username, PDO::PARAM_STR);
				$db_insert->bindValue(':password', $password, PDO::PARAM_STR);
				$db_insert->execute();
			}
		}

		if (isset($_POST['username']) && isset($_POST['password'])) {
			$username = htmlspecialchars($_POST['username']);
			$password = htmlspecialchars($_POST['password']);

			$statement = $db->prepare("SELECT * FROM USERS WHERE username=:username");

			$statement->bindValue(":username", $username, PDO::PARAM_STR);

			$statement->execute();

			$row = $statement->fetch(PDO::FETCH_ASSOC);

			if ($row) {
				$_SESSION['username'] = $username;
				header("Location: welcome.php");
				die();
			}
			else {
				echo "You screwed up";
			}
		}
	?>

	<form action="index.php" method="POST">
		<input type="text" name="username" placeholder="Username" required></input><br>
		<input type="password" name="password" placeholder="Password" required></input><br>
		<button type="submit">Login</button>
	</form>
	<form action="signup.php" method="POST">
		<button type="submit">SIGN UP</button>
	</form>
</body>
</html>