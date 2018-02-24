<?php
require '../require/dbconnect.php';
session_start();

$username = $_SESSION['username'];
$review_id = $_SESSION['c_review_id'];

echo $review_id;

// var_dump($review_id);

$db = get_db();

$comment_score = 0;
$post_date = htmlspecialchars($_POST['post_date']);
$content = htmlspecialchars($_POST['content']);

$query = 'SELECT user_id FROM _user WHERE username = :username';
$qstmt = $db->prepare($query);

$qstmt->bindValue(':username', $username, PDO::PARAM_STR);

$qstmt->execute();
$user_id = $qstmt->fetch(PDO::FETCH_ASSOC);

var_dump($review_id);
var_dump($user_id);

$insert = 'INSERT INTO comment (user_id, content, comment_score, post_date, review_id) VALUES (:user_id, :content, :comment_score, :post_date, :review_id)';
$stmt = $db->prepare($insert);

$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':comment_score', $comment_score, PDO::PARAM_INT);
$stmt->bindValue('post_date', $post_date, PDO::PARAM_STR);
$stmt->bindValue('content', $content, PDO::PARAM_STR);
$stmt->bindValue('review_id', $review_id, PDO::PARAM_INT);

$stmt->execute();

// header("Location: ../the_burg.php");
// die();
?>