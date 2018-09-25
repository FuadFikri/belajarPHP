<?php
	if(isset($_COOKIE["user"])) {
		echo "<h1>cookie ada nilainya </h1><br> " . $_COOKIE["user"]."<br>";
	}
	else
	{
		echo "tidak ada <br>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>cookie </title>
</head>
<body>
	<a href="create.php">create</a><br>
<a href="modify.php">modify</a><br>
<a href="delete.php">delete</a><br>
</body>
</html>
