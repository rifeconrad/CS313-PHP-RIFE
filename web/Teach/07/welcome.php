<!DOCTYPE html>
<html>
<head>
	<title>Teach 07 Welcome</title>
</head>
<body>
	<?php
		require "db_runner.php";
	?>

	<p>WILKOMMEN <?php echo (isset($_SESSION['username'])) ? $_SESSION['username'] : ""; ?></p>
</body>
</html>