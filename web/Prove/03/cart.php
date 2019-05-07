<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>
</head>
<body>
	<script>
		var items = ["Food", "Cat", "Dog", "Fish"];
		for (i in items) {
			console.log(items[i]);
			var item_str = sessionStorage[items[i]];
			console.log("ITEM STRING " + item_str);
			var item = JSON.parse(item_str);
			document.innerHTML = item.name + " " + item.quantity + " " + item.price + "<br>";
		}
	</script>
</body>
</html>