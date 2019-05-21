<?php
  try
  {
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');

    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Success!';
  }
  catch (PDOException $ex)
  {
    echo 'Error!: ' . $ex->getMessage();
    die();
  }

  if (isset($_POST['uname'])) {
    $username = $_POST['uname'];
    $password = "";
    foreach ($db->query('SELECT * FROM users') as $row)
    {
      if ($row['username'] == $username) {
        $password = $row['password'];
      }
    }
  }

  if ($password != "") {
    echo "Successful Login!";
  } else {
    if (isset($_POST['password'])) {
      $password = $_POST['password'];

      $db->query('INSERT INTO users (username, password) VALUES ($username, $password)');
    }
  }
?>