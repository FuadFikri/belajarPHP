<?php
	$name = "user";
	$value="fikri";
	setcookie($name, $value, time()+36000); 
	
?>

<html>
<body>
<h1>halaman pengesetan cookie</h1><br>
<a href="check.php">check</a><br>
<a href="modify.php">modify</a><br>
<a href="delete.php">delete</a><br>
</body>
</html>