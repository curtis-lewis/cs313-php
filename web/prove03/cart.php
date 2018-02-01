<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>My Cart</h2>
	<?php echo $username . "'s " . "cart"; ?>
	<br>
	<a href="checkout.php">Checkout</a>
</body>
</html>