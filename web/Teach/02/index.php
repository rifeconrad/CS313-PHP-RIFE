<!DOCTYPE html>
<html>
<head>
	<title>Teach 02</title>
</head>
<body>
	<form action="input.php" method="post">
		Name: <input type="text" name="name"><br>
		E-mail: <input type="text" name="email"><br>

		<input type="radio" name="major" value="CS"> Computer Science<br>
		<input type="radio" name="major" value="WDD"> Web Design and Development<br>
		<input type="radio" name="major" value="CIT"> Computer Information Technology<br>
		<input type="radio" name="major" value="CE"> Computer Engineering<br>

		<input type="checkbox" name="continent[]" value="North America">North America<br>
		<input type="checkbox" name="continent[]" value="South America">South America<br>
		<input type="checkbox" name="continent[]" value="EU">Europe<br>
		<input type="checkbox" name="continent[]" value="ASIA">Asia<br>
		<input type="checkbox" name="continent[]" value="AUS">Australia<br>
		<input type="checkbox" name="continent[]" value="AFR">Africa<br>
		<input type="checkbox" name="continent[]" value="ANT">Antarctica<br>

		Comment: <textarea name="comments"></textarea><br>
		<input type="submit">

	</form>
</body>
</html>