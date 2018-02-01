<?php 
session_start();
$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<h2>Confirm Order</h2>
	<?php echo $username . " is confirming"; ?>
</body>
</html>