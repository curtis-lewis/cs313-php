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
	<title>Scriptures</title>
</head>
<body>
	<h1>Scripture Resources</h1>

<div>
	<?php
	foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row) 
	{
		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong>' . ' - "' . $row['content'] . '"';
		echo '<br/>';
	}
	?>
</div>

<form action="results.php" method="get">
	Book Search: <input type="text" name="searchValue">
	<button type="submit">Search</button>
</form>
	

</body>
</html>