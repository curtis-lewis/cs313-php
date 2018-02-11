<?php
try
{
  $user = 'postgres';
  $password = 'st!ckbug95';
  $db = new PDO('pgsql:host=127.0.0.1;dbname=rexburg_restaurants', $user, $password);
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
	<title>The Burg Review</title>
	<link rel="stylesheet" type="text/css" href="web_files/style.css">
	<script type="text/javascript" src="web_files/script.js"></script>
</head>
<body>
	<div id="header">
		<?php include 'header.php' ?>
	</div>
	<div class="content">
		<?php
		//foreach ($db->query('SELECT book, chapter, verse, content FROM scriptures') as $row)
		foreach ($db->query('SELECT name FROM review') as $review)
		{
		echo '<p>' . $review['name'] . '</p>';
		} 
		//foreach ($db->query('SELECT name, address_street, address_city, address_state, address_zip, description FROM review WHERE review_id = 1') as $review)
		//{
		//echo '<p>' . $review['name'] . '<br>' . $review['address_street'] . '<br>' . $review['address_city'] . '<br>' . $review['address_state'];
		//echo '<br>' . $review['address_zip'] . '<br>' . $review['description'] . '</p>';
		//}
		?>
	</div>
	<div class="footer">
		<?php include 'footer.php' ?>
	</div>
</body>
</html>