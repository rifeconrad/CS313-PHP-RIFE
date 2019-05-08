<?php 
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	$total = 0.0;
	if (isset($_SESSION["cart"])) {
    	foreach ($_SESSION["cart"] as $item) {
    		//echo gettype(floatval($item->price));
    		$price = floatval($item->price);
    		$total += $price;
    	}
  	} 

  	echo "<p>Total: " . $total . "</p>";
?>

<form name="checkout" action="confirmation.php" method="post">
	First Name <input type="text" name="first_name"></input><br>
	Last Name <input type="text" name="last_name"></input><br>
	Street <input type="text" name="street"></input><br>
	City <input type="text" name="city"></input><br>
	State <input type="text" name="state"></input><br>
	<button>Complete Transaction</button>
</form>