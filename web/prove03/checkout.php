<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
	<h1>Checkout</h1>

	<?php

	$name = $_POST["name"];
	$email = $_POST["email"];

	echo "Hello " . $name . ". ";

	echo "<br>";
	echo "Your email is ". $email;

	?>

</body>
</html>