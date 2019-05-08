<?php 
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	$total = 0.0;
	if (isset($_SESSION["cart"])) {
    	foreach ($_SESSION["cart"] as $item) {
    		//echo gettype(floatval($item->price));
    		$price = floatval($item->price);
    		total += $price;
    	}
  	} 

  	echo "<p>Total: " . $total . "</p>";
?>