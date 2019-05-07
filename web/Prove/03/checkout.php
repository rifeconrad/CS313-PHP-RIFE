<?php
	$total = 0;
	foreach($_POST["item"] as $item){
		$quantity = $_POST["q$item"];
		echo "$item => $quantity</br>";
		$total += $quantity;
	}

	echo "Total: $total";
?>