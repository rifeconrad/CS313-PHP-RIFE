
<?php 
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Hobby Hero</title>
</head>
<body>
	<p>TEST</p>
	<?php
	echo "here";
		include 'header.php';

		if (isset($_SESSION['cart'])) {
			foreach ($_SESSION['cart'] as $item) {
	?>
				<div> <?php echo $item->name . " " . $item->price; ?> </div>
	<?php
			}
		}
	?>
</body>
</html>