<?php
	session_start();

	$active = "HOME";
	if (isset($_GET["active"])) {
		$active = $_GET["active"];
	}

	switch ($active) {
		case "HOME":
		break;
		case "CART":
		break;
		case "CHECKOUT":
		break;
		default:
		break;
	}
?>

<div id='nav'>
	<a href='index.php?active=HOME'>HOME</a>
	<a href='cart.php?active=CART'>CART</a>
	<a href='checkout.php?active=CHECKOUT'>CHECKOUT</a> 
</div>