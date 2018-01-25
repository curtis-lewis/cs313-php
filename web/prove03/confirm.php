<?php 
session_start();
$email = $_SESSION["email"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Confirm Order</h2>
	<?php echo $email . " is confirming"; ?>
</body>
</html>