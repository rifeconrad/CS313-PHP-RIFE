<?php	
	include("Product.php");
	include("header.php"); 
	include("fake_database.php");

	session_start();

	echo "Transaction Complete!<br>";

	$purchased = array();
	if (isset($_SESSION["cart"])) {
		$purchased = $_SESSION["cart"];
		unset($_SESSION["cart"]);
	}

	echo "<div>Items Purchased</div>";

	foreach ($purchased as $item) {
?>
	<div id="confirmed_item">
		<div id="name"> <?php echo $item->name; ?> </div>
		<div id="price"> <?php echo $item->price; ?> </div>
	</div><br>
<?php
	}

	if (isset($_SESSION["total"])) {
		$total = $_SESSION["total"];
		echo "<div id='total'> Total: $total </div><br>";
	}
?>
	<div>Address</div>
	<div id="address">
		<div id="name"> 
			<?php 
				if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
					echo $_POST["first_name"] . " " . $_POST["last_name"]; 
				}
			?> 
		</div>
		<div id="street">
			<?php 
				if (isset($_POST["street"])) {
					echo $_POST["street"]; 
				}
			?> 
		</div>
		<div id="city_state">
			<?php 
				if (isset($_POST["city"]) && isset($_POST["state"])) {
					echo $_POST["city"] . ", " . $_POST["city"]; 
				}
			?> 
		</div>
	</div>