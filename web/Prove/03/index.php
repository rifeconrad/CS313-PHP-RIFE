
<?php
  // include class Product
  include("Product.php");

  session_start();

  include("fake_database.php");
  //$products = array("Apple", "Banana", "Orange", "Grapes");
  //$prices = array("0.39", "0.19", "0.50", "4.00");

  //$_SESSION => ()

  // create the shopping cart, if not already done so
  if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
  }

  //$_SESSION => (array())

  // add the product to the cart, if it is valid
  if (isset($_GET["product"]) && isset($_GET["price"])) {
    $product_name = $_GET["product"];               // $product_name = "Apple"
    $price = $_GET["price"];                        // $price = "0.39"
    $product = new Product($product_name, $price);

    if (!in_array($product, $_SESSION["cart"])) {
      array_push($_SESSION["cart"], $product); 
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
    include("header.php");

    for($i = 0; $i < count($products); $i++) {
  ?>

  <div id="product">
    <div id="product_img"></div>
    <div id="product_name"> <?php echo $products[$i]; ?> </div>
    <div id="product_price"> <?php echo $prices[$i]; ?> </div>
    <a href="index.php?product=<?php echo $products[$i]; ?>&price=<?php echo $prices[$i]; ?>&active=HOME">Add To Cart</a>
  </div><hr>

  //href=index.php?product=Apple&price=0.39

  <?php
    }
  ?>
</body>
</html>