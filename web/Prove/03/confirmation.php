<?php	
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	//session_start();

	echo "Transaction Complete!";

	$purchased = array();
	if (isset($_SESSION("cart"))) {
		//$purchased = $_SESSION("cart");
		unset($_SESSION("cart"));
	}

	//foreach ($purchased as $item) {
	//	echo $item->name;
	//}
?>