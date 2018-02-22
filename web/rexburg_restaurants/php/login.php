<?php
require('../require/dbconnect.php');
session_start();

$username = $_POST["username"];
$username = htmlspecialchars($username);
$password = $_POST["password"];
$badLogin = false;

$db = get_db();

$query = 'SELECT password FROM _user WHERE username = :username';
$stmt = $db->prepare($query);
$stmt->bindValue(':username', $username);
$result = $stmt->execute();

if ($result)
{
	$row = $stmt->fetch();
	$hashedPasswordFromDB = $row['password'];

	if (password_verify($password, $hashedPasswordFromDB))
	{
		$_SESSION['username'] = $username;
		$_SESSION['authenticated'] = true;
		header("Location: ../profile.php");
		die();
	}
	else
	{
		$badLogin = true;
	}
}
else
{
	$badLogin = true;
}
?>
<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
	echo '<a href="../profile.php">Try Again</a>';
}
?>