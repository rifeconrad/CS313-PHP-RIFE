<?php 
	include("header.php"); 
	include("fake_database.php");

	if (!isset($_SESSION["cart"])) {
    	foreach ($cart as $item) {
    		echo $item->name . " " . $item->price;
    	}
  	}
?>