
<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>
	<?php
		include 'header.php';
		include 'product.php';

		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $item) {
				echo "good";
	?>
				<div> 
					<?php echo $item . " " . $item->price; ?> 
				</div>
	<?php
			}
		}
	?>
</body>
</html>