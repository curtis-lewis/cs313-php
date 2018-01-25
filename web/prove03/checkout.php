<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<h1>Checkout</h1>
	<?php echo "Welcome back " . $_SESSION["email"];?>
</body>
</html>