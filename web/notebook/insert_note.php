<?php
require("dbConnect.php");

$db = get_db();

$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content =htmlspecialchars($_POST['content']);

var_dump($course_id);
var_dump($date);
var_dump($content);
?>