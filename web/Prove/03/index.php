<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>

	
</head>
<body>
	<?php
		// start session
		session_start();

		// initialize store items
		$products = array("apple", "banana", "orange", "grapes");
		$amounts = array("0.30", "0.29", "0.45", "4.00");
		
		// load session
		if ( !isset($_SESSION["total"]) ) {
  			$_SESSION["total"] = 0;
   			for ($i=0; $i< count($products); $i++) {
    			$_SESSION["qty"][$i] = 0;
  			    $_SESSION["amounts"][$i] = 0;
 			}
 		}

 		// reset items
 		if ( isset($_GET['reset']) )
 		{
 			if ($_GET["reset"] == 'true')
  			{
   				unset($_SESSION["qty"]); //The quantity for each product
  				unset($_SESSION["amounts"]); //The amount from each product
  				unset($_SESSION["total"]); //The total cost
   				unset($_SESSION["cart"]); //Which item has been chosen
  		    }
	    }	

 		// add item
 		if ( isset($_GET["add"]) )
   		{
   			$i = $_GET["add"];
  			$qty = $_SESSION["qty"][$i] + 1;
  			$_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  			$_SESSION["cart"][$i] = $i;
   			$_SESSION["qty"][$i] = $qty;
 		}

 		// remove item
 		if ( isset($_GET["delete"]) )
  		{
   			$i = $_GET["delete"];
   			$qty = $_SESSION["qty"][$i];
   			$qty--;
   			$_SESSION["qty"][$i] = $qty;
   			//remove item if quantity is zero
   			if ($qty == 0) {
    			$_SESSION["amounts"][$i] = 0;
    			unset($_SESSION["cart"][$i]);
  			}
 			else
  			{
   				$_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  			}
 		}
	?>

	Apple<input type='text' maxlength='2' size='2'/><button id='apple_btn' value='Apple'>Add To Cart</button><br>

	Banana<input type='text' maxlength='2' size='2'/><a href="?add=<?php echo($item);?>">Add To Cart</a><br>

	Orange<input type='text' maxlength='2' size='2'/><button id='orange_btn' value='Orange'>Add To Cart</button><br>

	Grapes<input type='text' maxlength='2' size='2'/><button id='grapes_btn' value='Grapes'>Add To Cart</button><br>
</body>
</html>