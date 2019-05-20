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

	echo "<h1>Scripture Resources</h1>";
	/*John 3:16 - "For God so loved the world, 
	that he gave his only begotten Son, that whosoever 
	believeth in him should not perish, but have everlasting 
	life."*/
	
	foreach ($db->query('SELECT * FROM scriptures') as $row)
	{
	  echo $row['book'] . " " . $row['chapter'] . ":" . $row['verse'] . " - " .
	  $row['content'] . "<br>";
	}
	
	echo "<hr>";
?>
	
	<form method="post" action="index.php">
		<input name="book" type="text"></input>
		<button>Search</button>
	</form>

<?php	
	if (isset($_POST['book']))
	{
		$book = $_POST['book'];
		echo $book;
		foreach ($db->query("SELECT * FROM scriptures WHERE book='$book'") as $row)
		{
		  $id = $row["id"];
		  echo $row['book'] . " " . $row['chapter'] 
		  . ":" . $row['verse'] 
		  . "<a href='scripture.php?row_id=$id'>Visit Scripture</a>";
		}
	}
?>