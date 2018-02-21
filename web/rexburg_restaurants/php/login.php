<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$_SESSION["username"] = $username;

if (!empty($username)) 
{
	$_SESSION["authenticated"] = true;
}
elseif (empty($username)) 
{
	$_SESSION["authenticated"] = false;
}

echo $username;
echo $password;
?>