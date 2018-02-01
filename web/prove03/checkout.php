<?php
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Checkout</h2>
	<?php echo $username . " is checking out"; ?>
	<br>
	<a href="confirm.php">Confirm</a>
</body>
</html>