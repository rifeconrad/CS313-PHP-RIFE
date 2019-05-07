<!DOCTYPE html>
<html>
<head>
	<title>Prove 03 Store</title>

	
</head>
<body>
	<?php
		$item = "5";
		echo $item;
	?>

	Apple<input type='text' maxlength='2' size='2'/><button id='apple_btn' value='Apple'>Add To Cart</button><br>

	Banana<input type='text' maxlength='2' size='2'/><button id='banana_btn' value='Banana' onclick="<?php echo('$item');?>">Add To Cart</button><br>

	Orange<input type='text' maxlength='2' size='2'/><button id='orange_btn' value='Orange'>Add To Cart</button><br>

	Grape<input type='text' maxlength='2' size='2'/><button id='grape_btn' value='Grape'>Add To Cart</button><br>
</body>
</html>