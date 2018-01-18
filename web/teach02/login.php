<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php include 'header.php'; ?>
	<br>
	<button>Log in as Administrator</button>
	<button>Log in as Tester</button>

	<?php
	session_start();

	$_SESSION["permissions"] = "guest";
	?>

</body>
</html>