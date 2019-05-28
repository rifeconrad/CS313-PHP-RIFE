<!DOCTYPE html>
<html>
<head>
  <title>Hobby Hero's Login Page</title>

  <link rel="stylesheet" type="text/css" href="./stylesheets/login.css">
</head>
	<body>

		<?php
			require 'db_runner.php';

			if (isset($_GET['repeat'])) {
				if ($_GET['repeat'] == 'TRUE') {
					echo "<p style='color:red;'>Username Already Exists</p>";
				}
			}

			$username = "";
			$password = "";
			$pass_conf = "";
			if (isset($_POST['uname'])) {
				$username = htmlspecialchars($_POST['uname']);
			}
			if (isset($_POST['psw'])) {
				$password = htmlspecialchars($_POST['psw']);
			}
			if (isset($_POST['pswc'])) {
				$pass_conf = htmlspecialchars($_POST['pswc']);
			}

			if ($password == $pass_conf && $password != "" && $pass_conf != "") {
				$repeat = false;
				foreach ($db->query('SELECT * FROM users') as $row)
		    	{
		   	   		if ($row['username'] == $username) {
		    	    	$repeat = true;
		    	  	}
		    	}

				if (!$repeat) {
					$db_insert = $db->prepare('INSERT INTO users(username, password) VALUES(:username, :password)');

					$db_insert->bindValue(':username', $username, PDO::PARAM_STR);
					$db_insert->bindValue(':password', $password, PDO::PARAM_STR);
					$db_insert->execute();

					header("Location: login.php");
				} else {
					header("Location: createaccount.php?repeat=TRUE");
				}
			}
		?>

		<form class="form_container" action="createaccount.php" method="post">
		    <div class="container">
			  
		      <label for="uname"><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uname" maxlength="16" minlength="8" required>

		      <label for="psw"><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="psw" maxlength="16" minlength="8" required><br>

		      <label for="psw"><b>Confirm Password</b></label>
		      <input type="password" placeholder="Enter Password" name="pswc" maxlength="16" minlength="8" required><br>

		      <button type="submit">Create Account</button>
		    </div>
		</form>

    </body>
</html>