
<!DOCTYPE html>
<html>
<head>
  <title>Hobby Hero's Login Page</title>

  <link rel="stylesheet" type="text/css" href="./stylesheets/login.css">
</head>
<body>

  <?php
    session_start();

    if (isset($_GET['logout'])) {
      if ($_GET['logout'] == "TRUE") {
        if (isset($_SESSION['password_success'])) {
          if ($_SESSION['password_success'] == true) {
            $_SESSION['password_success'] = false;
            echo "removing password success status";
          }
        }
      }
    }

    if (isset($_SESSION['password_success'])) {
      if ($_SESSION['password_success']) {
        header('Location: index.php?active=HOME'); 
      }
    }

    require 'db_runner.php';
  ?>
  
  <form class="form_container" action="createaccount.php">
    <button type="submit">Create Account</button>
  </form>
  <br>
  <form class="form_container" action="index.php?active=HOME" method="post">
    <div class="imgcontainer">
      <img src="https://render.fineartamerica.com/images/rendered/default/poster/8.000/8.000/break/images/artworkimages/medium/1/us-army-helmet-4-of-hearts-playing-card-drawing-aloysius-patrimonio.jpg" alt="logo" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <button type="submit">Login</button>
    </div>
  </form>

  <?php
    if (isset($_GET['attempt'])) {  
      if ($_GET['attempt'] == "fail") {
  ?>
        <p style="color:red;">Failed to login</p>
  <?php
      }
    }
  ?>


</body>
</html>