<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 'on');

require('dbconnect.php');

$db = get_db();

$query = "SELECT title, content, rating, post_date FROM review WHERE review_id=1";
$stmt = $db->prepare($query);
$stmt->execute();

$review = $stmt->fetch(PDO::FETCH_ASSOC);
$title = $review['title'];
$content = $review['content'];
$rating = $review['rating'];
$post_date = $review['post_date'];

$comment_query = "SELECT content, post_date, comment_score FROM COMMENT";
$comment_stmt = $db->prepare($comment_query);
$comment_stmt->execute();

$comments = $comment_stmt->fetchAll(PDO::FETCH_ASSOC);


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
		echo '<h1>' . $title . '</h1>';
		echo '<h2>' .  $post_date . '</h2>';
		echo '<h2>Rating: ' . $rating . '</h2>';
		echo '<p>' . $content . '</p>';
		?>

		<hr>
		<h2>Leave a Comment Below!</h2>
		<form method="POST" action="add_comment.php">
		Date: <input type="date" name="post_date"><br>
		Content<br>
		<textarea name="content"></textarea><br>
		<input type="submit" value="Add Comment">
		</form>

		<h2>Comments</h2>
		<?php
		foreach ($comments as $comment) 
		{
			$comment_content = $comment['content'];
			$comment_date = $comment['post_date'];
			$comment_score = $comment['comment_score'];

			echo '<strong><p>Placeholder User</p></strong>';
			echo '<p>' . $comment_date . '</p>';
			echo '<p>Comment Score: ' . $comment_score . '</p>';
			echo '<p>' . $comment_content . '</p>';
			echo '<br>';
		}
		?>
	</div>
	<div class="footer">
		<?php include 'footer.php' ?>
	</div>
</body>
</html>