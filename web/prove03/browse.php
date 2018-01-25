<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$_SESSION["email"] = $email;
$_SESSION["password"] = $password;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Browse</title>
	<?php include 'header.php' ?>
	<?php echo "Welcome " . $email; ?>
	<h2>Browse</h2>
</head>
<body>
	
</body>
</html>