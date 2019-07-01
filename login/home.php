<?php
session_start();
$_SESSION['user']='satish';
echo $_SESSION['username'] ;
echo $_SESSION['user'];

?>
<!DOCTYPE html>
<html>
<head></head>
<body>
	<div>
	<h1>Welcome</h1> 
	<a href="logout.php">logout</a>
	</div>
	<div>
		
	</div>
</body>
</html>
