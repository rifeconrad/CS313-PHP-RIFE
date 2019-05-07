<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>
</head>
<body>
	<script>
		for (item_str in sessionStorage) {
			console.log(sessionStorage[item_str]);
			var item = JSON.parse(sessionStorage[item_str]);
			document.innerHTML = item.name + " " + item.quantity + " " + item.price + "<br>";
		}
	</script>
</body>
</html>