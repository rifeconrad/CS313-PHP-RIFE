
<!DOCTYPE html>
<html>
<head>
  <title>Hobby Hero's Login Page</title>
</head>
<body>

  <?php
    require 'db_runner.php';
  ?>

  <form action="index.php" method="post">
    <div class="imgcontainer">
      <img src="https://render.fineartamerica.com/images/rendered/default/poster/8.000/8.000/break/images/artworkimages/medium/1/us-army-helmet-4-of-hearts-playing-card-drawing-aloysius-patrimonio.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

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