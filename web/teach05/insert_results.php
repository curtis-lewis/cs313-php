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
	<title>Insert Results</title>
</head>
<body>
	<?php
	$book = $_POST['book'];
	$chapter = $_POST['chapter'];
	$verse = $_POST['verse'];
	$content = $_POST['content'];
	$checkboxes = $_POST['topic'];

	$stmt = $db->prepare('INSERT INTO scriptures (book, chapter, verse, content) VALUES (:book, :chapter, :verse, :content)');
	$stmt->bindValue(':book', $book, PDO:PARAM_STR);
	$stmt->bindValue(':chapter', $chapter, PDO:PARAM_STR);
	$stmt->bindValue(':verse', $verse, PDO:PARAM_STR);
	$stmt->bindValue(':content', $content, PDO:PARAM_STR);
	$stmt->execute();
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	//foreach ($rows as $row) 
	//{
	//	echo '<strong>' . $row['book'] . ' ' . $row['chapter'] . ':' . $row['verse'] . '</strong>' . ' - "' . $row['content'] . '"';
	//	echo '<br/>';
	//}

	?>
</body>
</html>