<?php
  require 'db_runner.php';

  if (isset($_GET['attempt'])) {  
    if ($_GET['attempt'] == "fail") {
?>
      <p style="color:red;">Failed to login</p>
<?php
    }
  }
?>

<form action="index.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>
</form>