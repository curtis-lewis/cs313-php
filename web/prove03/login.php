<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php include 'header.php'; ?>
	<h1>Please Log in!</h1>
	<form action="browse.php" method="post">
		Email: <input type="text" name="email"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="submit">
	</form>
</head>
<body>

</body>
</html>