<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="web_files/style.css">
	<script type="text/javascript" src="web_files/script.js"></script>
</head>
<body>
	<div id="header">
		<?php include 'require/header.php' ?>
	</div>
	<div class="content">
		<?php
		if ($_SESSION['authenticated'] == true) 
		{
			echo 'Hello ' . $_SESSION['username'] . '.';
		}
		?>
		<h2>Please Log In</h2>
		<form method="POST" action="php/login.php">
		Username: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="Log In">
		<br>
		</form>
	</div>
	<div class="footer">
		<?php include 'footer.php' ?>
	</div>
</body>
</html>