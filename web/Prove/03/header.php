<?php
	session_start();

	$active = "HOME";
	if (isset($_GET["active"])) {
		$active = $_GET["active"];
	}
?>

<div id='nav'>
	<a href='index.php?active=HOME' id="<?php echo ($active === "HOME" ? "active_link" : "non_active_link") ?>">HOME</a>
	<a href='cart.php?active=CART' id="<?php echo ($active === "CART" ? "active_link" : "non_active_link") ?>">CART</a>
	<a href='checkout.php?active=CHECKOUT' id="<?php echo ($active === "CHECKOUT" ? "active_link" : "non_active_link") ?>">CHECKOUT</a> 
</div>