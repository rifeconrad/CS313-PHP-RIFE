<?php
	foreach($_POST["item"] as $item){
		$quantity = $_POST['q$item'];
		echo "$item => $quantity</br>";
	}

	//echo "$selected = $quantity";
?>