<?php
session_start();
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Checkout</h2>
	<?php echo $email . " is checking out"; ?>
	<br>
	<a href="confirm.php">Checkout</a>
</body>
</html>