<!DOCTYPE html>
<html>
<head>
	<title>Conrad's CS313 Home Page</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<div id="main_container">
		<div id="nav">
			<a id="here" href="home.html">HOME</a>
			<a href="assignments.html">ASSIGNMENTS</a>
		</div>
		<div id="description">
			<span id="name">Conrad Rife</span><br>
			<p>
				I was born in California, but was raised in Ohio. I love spending<br> time with my family, playing board games, programming, sleeping,<br>going to work, playing video games, and listening to music. My most<br> recent hobby is listening to and memorizing German songs with my<br> wife. 
			</p>
			<div id="img_btn">VIEW FAMILY PICTURE</div>
			<div id="img_view"><img src="images/family_picture.jpg" alt="family_picture"></div>
			<?php echo "<p>" . "System Time: " . date("D M d, Y G:i a") . "</p>"; ?>

			<?php
				$servername = "127.0.0.1";
				$username = "username";
				$password = "password";
				$database = "MySQL80";

				// Create connection
				$conn = new mysqli("127.0.0.1::3307", "username", "password", "MySQL80");
				// Check connection
				if ($conn->connect_error) {
				    die("Connection failed: " . $conn->connect_error);
				} 

				// Create database
				$sql = "CREATE DATABASE myDB";
				if ($conn->query($sql) === TRUE) {
				    echo "Database created successfully";
				} else {
				    echo "Error creating database: " . $conn->error;
				}

				$conn->close();
			?>
		</div>
	</div>

	<script src="home.js"></script>
</body>
</html>