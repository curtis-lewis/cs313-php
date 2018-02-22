<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Account</title>
	<link rel="stylesheet" type="text/css" href="web_files/style.css">
	<script type="text/javascript" src="web_files/script.js"></script>
</head>
<body>
	<div id="header">
		<?php include 'require/header.php' ?>
	</div>
	<div class="content">
		<?php
		if ($_SESSION['authenticated'] == false) 
		{
		echo '<h2>Create an Account</h2>
		<form method="POST" action="php/add_account.php">
		Username: <input type="text" name="username"><br>
		Password:  <input type="password" name="password"><br>
		<input type="submit" name="add_account" value="Create">
		<br>
		</form>';
		}
		if ($_SESSION['authenticated'] == true) 
		{
			echo '<h2>Hello ' . $_SESSION['username'] . ', you are already logged in!'. '.</h2>';
			echo '<form method="POST" action="php/session_stop.php">
			<br>
			<input type="submit" name="logout" value="Log Out">
			<br>
		</form>';
		}
		?>
	</div>
	<div class="footer">
		<?php include 'footer.php' ?>
	</div>
</body>
</html>