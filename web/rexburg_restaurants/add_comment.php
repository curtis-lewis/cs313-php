<?php
require 'dbConnect.php';

$db = get_db();

$user_id = 1;
$comment_score = 0;
$post_date = htmlspecialchars($_POST['post_date']);
$content = htmlspecialchars($_POST['content']);
//$post_date = "2018-02-17";
//$content = "I really love the burg!";

$insert = "INSERT INTO comment (user_id, content, comment_score, post_date) VALUES (:user_id, :content, :comment_score, :post_date)";
$stmt = $db->prepare($insert);

$stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);
$stmt->bindValue(':comment_score', $comment_score, PDO::PARAM_INT);
$stmt->bindValue('post_date', $post_date, PDO::PARAM_STR);
$stmt->bindValue('content', $content, PDO::PARAM_STR);

$stmt->execute();

header("Location: the_burg.php");
?>