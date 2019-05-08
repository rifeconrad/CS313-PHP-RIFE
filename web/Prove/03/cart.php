<?php 
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	if (isset($_GET["remove"])) {
		$product_name = $_GET["remove"];
		if (isset($_SESSION["cart"])) {

    		foreach ($_SESSION["cart"] as $item) {
    			if (($item = array_search($item, $_SESSION["cart"])) !== false) {
    				echo "HO";
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
		<a href="cart.php?remove=<?php echo $item->name; ?>&active=CART">Remove Item</a>
    </div>

<?php
    		}
    	}
  	} 
?>