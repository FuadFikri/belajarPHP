<?php
	
	setcookie("user", "", time()-36000); 
	
?>

<html>
<body>
halaman pengesetan cookie
<a href="check.php">check</a><br>
<a href="modify.php">modify</a><br>
<a href="delete.php">delete</a><br>
</body>
</html>