<?php
try
{
  $user = 'postgres';
  $password = 'st!ckbug95';
  $db = new PDO('pgsql:host=127.0.0.1;dbname=teach05', $user, $password);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>
	<h1>Not cached!!!</h1>
	<form name="insertData" action="insert_results.php" method="post">
		Book:    <input type="text" name="book"><br>
		Chapter: <input type="text" name="chapter"><br>
		Verse:   <input type="text" name="verse"><br>
		Content: <br><textarea rows="4" cols="50" name="content"></textarea><br>
	<?php
	foreach ($db->query('SELECT name, topic_id FROM TOPIC') as $row) 
	{
		echo '<input type="checkbox" name="topic[]" value="' . $row['id'] . '">' . $row['name'];
		echo '<br>';
	}
	?>
	<input type="submit" value="Submit">
	</form>
</body>
</html>