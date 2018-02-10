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
	<title>Results</title>
</head>
<body>
	<?php
	$searchValue = $_GET['searchValue'];

	$stmt = $db->prepare('SELECT book, chapter, verse, content FROM scriptures WHERE book=:searchValue');
	$stmt->bindValue(':searchValue', $searchValue, PDO::PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($rows as $row)
	{
		echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong>' . ' - "' . $row['content'] . '"';
		echo '<br/>';
	}
	?>
</body>
</html>