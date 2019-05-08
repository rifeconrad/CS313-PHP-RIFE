<?php 
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	$total = 0;
	if (isset($_SESSION["cart"])) {
    	foreach ($_SESSION["cart"] as $item) {
    		//total += floatval($item->price);
    	}
  	} 

  	echo "<p>Total: " . $total . "</p>";
?>