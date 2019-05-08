
<?php
  include("Product.php");

  session_start();

  $products = array("Apple", "Banana", "Orange", "Grapes");
  $prices = array("0.39", "0.19", "0.50", "4.00");

  if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
  }

  if (isset($_GET["product"]) && isset($_GET["price"])) {
    $product_name = $_GET["product"];
    $price = $_GET["price"];
    $product = new Product($product_name, $price);

    if (!in_array($product, $_SESSION["cart"])) {
      array_push($_SESSION["cart"], $product);
    }
  }

  $found = count($_SESSION["cart"]);
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
    <a href="index.php?product=<?php echo $products[$i]; ?>&price=<?php echo $prices[$i]; ?>">Add To Cart</a>
  </div>

  <?php
    }
  ?>
</body>
</html>