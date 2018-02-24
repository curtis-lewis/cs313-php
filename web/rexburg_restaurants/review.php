<?php
require('require/dbconnect.php');
ini_set('display_errors', 'off');
session_start();

$review_id = $_GET['review_id'];
$_SESSION['c_review_id'] = $review_id;

$db = get_db();

$query = 'SELECT title, content, rating, post_date FROM review WHERE review_id=:review_id';
$stmt = $db->prepare($query);
$stmt->bindValue(':review_id', $review_id, PDO::PARAM_INT);
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
</head>
<body>
	<div id="header">
		<?php include 'require/header.php' ?>
	</div>
	<div class="content">
		<?php 
		echo '<h1>' . $title . '</h1>';
		echo '<h2>' .  $post_date . '</h2>';
		echo '<h2>Rating: ' . $rating . '</h2>';
		echo '<p>' . $content . '</p>';
		?>
		<hr>
		<?php 
		if ($_SESSION['authenticated'])
		{
			echo '<h2>Leave a Comment Below!</h2>
		<form method="POST" action="php/add_comment.php">
		Date: <input type="date" name="post_date"><br><br>
		Content<br>
		<textarea rows="10" cols="50" name="content"></textarea><br>
		<input type="submit" value="Add Comment">
		</form>';
		}
		else
		{
			echo '<h2>Sign In To Leave a Comment!</h2>';
		}
		?>
		<h2>Comments</h2>
	</div>
	<div class="footer">
		<?php include 'require/footer.php' ?>
	</div>
</body>
</html>