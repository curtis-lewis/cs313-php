<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;
$_SESSION["password"] = $password;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<?php include 'header.php' ?>
	<?php echo "Welcome " . $username; ?>
	<h2>Browse</h2>
</head>
<body>
	
</body>
</html>