<!DOCTYPE html>
<html>
<head>
  <title>Hobby Hero's Login Page</title>

  <link rel="stylesheet" type="text/css" href="./stylesheets/login.css">
</head>
	<body>

		<?php
			require 'db_runner.php';
		?>

		<form class="form_container" action="index.php?active=HOME" method="post">
		    <div class="container">
			  
		      <label for="uname"><b>Username</b></label>
		      <input type="text" placeholder="Enter Username" name="uname" maxlength="16" minlength="8" required>

		      <label for="psw"><b>Password</b></label>
		      <input type="password" placeholder="Enter Password" name="psw" maxlength="16" minlength="8" required><br>

		      <button type="submit">Create Account</button>
		    </div>
		</form>

    </body>
</html>