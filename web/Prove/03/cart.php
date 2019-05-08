<?php 
	include("header.php"); 
	include("fake_database.php");

	if (isset($_SESSION["cart"])) {
		echo count($_SESSION["cart"]);
    	foreach ($_SESSION["cart"] as $item) {
    		if (isset($item->name)) {
    			echo "<p>" . $item->name . " " . $item->price . "</p>";
    		} else {
    			echo "ERROR";
    		}
    	}
  	} 
?>