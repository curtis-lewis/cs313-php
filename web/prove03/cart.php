<?php
session_start();
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>My Cart</h2>
	<?php echo $email . "'s " . "cart"; ?>
	<br>
	<a href="checkout.php">Checkout</a>
</body>
</html>