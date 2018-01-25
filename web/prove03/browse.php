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
	<?php
	echo "Welcome back $email";
	?>
	<a href="checkout.php">Checkout</a>
</head>
<body>
	
</body>
</html>