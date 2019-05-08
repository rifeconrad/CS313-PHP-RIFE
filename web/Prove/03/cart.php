<?php 
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	if (isset($_GET["remove"])) {
		$product_name = $_GET["remove"];

		if (isset($_SESSION["cart"])) {
    		foreach ($_SESSION["cart"] as $item) {
    			if ($item === $product_name) {
    				unset($_SESSION["cart"][$item]);
    			}
    		}
    	}
	}

	if (isset($_SESSION["cart"])) {
    	foreach ($_SESSION["cart"] as $item) {
    		if (isset($item->name)) {
?>

	<div id="cart_display">
		<div id="name"> <?php echo $item->name; ?> </div>
		<div id="price"> <?php echo $item->price; ?> </div>
		<a href="cart.php?remove=<?php echo $item->name; ?>">Remove Item</a>
    </div>

<?php
    		}
    	}
  	} 
?>