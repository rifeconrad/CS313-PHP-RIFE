<?php 
	include("header.php"); 
	include("fake_database.php");

	if (!isset($_SESSION["cart"])) {
		echo count($_SESSION["cart"]);
    	foreach ($cart as $item) {
    		echo "<p>" . $item->name . " " . $item->price . "</p>";
    	}
  	}
?>