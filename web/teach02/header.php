<h1>Disney Princess Sidekicks</h1>

<?php
$url = $_SERVER['REQUEST_URI'];

if ($url == '/teach02/home.php') {
	echo '<a href="home.php" style="color: red">Home</a> | 
<a href="about-us.php">About Us</a> | 
<a href="login.php">Login</a>';
}

if ($url == '/teach02/about-us.php') {
	echo '<a href="home.php">Home</a> | 
<a href="about-us.php" style="color: red">About Us</a> | 
<a href="login.php">Login</a>';
}

if ($url == '/teach02/login.php') {
	echo '<a href="home.php">Home</a> | 
<a href="about-us.php">About Us</a> | 
<a href="login.php" style="color: red">Login</a>';
}
?>