<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>
</head>
<body>
	<?php include("header.php"); ?>
	<div id="here"></div>
	<script>
		var items = ["Food", "Cat", "Dog", "Fish"];
		for (i in items) {
			var item_str = sessionStorage[items[i]];

			if (typeof item_str == 'undefined') {
  			  continue;
			}	

			var item = JSON.parse(item_str);
			document.getElementById("here").innerHTML = item.name + " " + item.quantity + " " + item.price + "<br>";
		}
	</script>
</body>
</html>