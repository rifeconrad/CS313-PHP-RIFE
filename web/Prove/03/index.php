
<?php
  session_start();

  $products = array("Apple", "Banana", "Orange", "Grapes");
  $prices = array("0.39", "0.19", "0.50", "4.00");

  $found = 0;
  foreach ($products as $product) {
    if (isset($_GET[$product])) {
      $found++;
    }
  }
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
  <p><?php echo $found; ?></p>
  <div id="product">
    <div id="product_img"></div>
    <div id="product_name"><?php echo $products[$i]; ?></div>
    <div id="product_price"><?php echo $prices[$i]; ?></div>
    <a href="index.php?<?php echo $products[$i]; ?>">Add To Cart</a>
  </div>

  <?php
    }
  ?>
</body>
</html>