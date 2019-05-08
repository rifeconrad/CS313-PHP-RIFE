<?php start_session(); ?>
<?php
  $products = array("Apple", "Banana", "Orange", "Grapes");
  $prices = array("0.39", "0.19", "0.50", "4.00");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Prove 03 Shopping</title>
</head>
<body>
  <?php
    for($i = 0; $i < count($products); $i++) {
  ?>

  <div id="product">
    <div id="product_img"></div>
    <div id="product_name"><?php echo $products[$i]; ?></div>
    <div id="product_price"><?php echo $prices[$i]; ?></div>
    <a href=""></a>
  </div>

  <?php
    }
  ?>
</body>
</html>