<?php
require('../require/dbconnect.php');

$username = $_POST['username'];
$password = $_POST['password'];

$username = htmlspecialchars($username);
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$db = get_db();

$query = 'INSERT INTO _user(username, password, user_score) VALUES( :username, :password, 0)';
$stmt = $db->prepare($query);
$stmt->bindValue(':username', $username);
$stmt->bindValue(':password', $hashed_password);
$stmt->execute();

header("Location: ../profile.php");
die();
?>