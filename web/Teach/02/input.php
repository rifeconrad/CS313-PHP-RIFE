<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$major = $_POST["major"];
	$comments = $_POST["comments"];

	echo $name . " <a href='$email'>" . $email . "</a> " . $major . " " . $comments;
?>