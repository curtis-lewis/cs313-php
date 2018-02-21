<?php
require('require/dbconnect.php');

$db = get_db();

$query = 'SELECT review_id, title FROM review';
$stmt = $db->prepare($query);
$stmt->execute();

$reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Reviews</title>
	<link rel="stylesheet" type="text/css" href="web_files/style.css">
</head>
<body>
	<div id="header">
		<?php include 'require/header.php' ?>
	</div>
	<div class="content">
		<h1>Reviews</h1>
		<p>Below you can see our full list of reviews.</p>
		<ul>
		<?php
			foreach ($reviews as $review) 
			{
				$title = $review['title'];
				$review_id = $review['review_id'];
				echo "<li><a href='review.php?review_id=$review_id'>$title</a></li>";
			}
		?>
		</ul>
	</div>
	<div class="footer">
		<?php include 'require/footer.php' ?>
	</div>
</body>
</html>