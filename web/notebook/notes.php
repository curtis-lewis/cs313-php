<?php
require("dbConnect.php");

$db = get_db();
$course_id = $_GET['course_id'];


$query = "SELECT number, name, id FROM course WHERE id=:course_id";
$stmt = $db->prepare($query);
$stmt->bindValue(':course_id', $course_id, PDO::PARAM_INT);

$stmt->execute();
$course = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Notes</title>
</head>
<body>
	<h1>Notes for <?php echo $course['name'];?></h1>
	<ul>
		<li>Things will be here...</li>
	</ul>

	<h2>Enter a new note for this course</h2>
	<form method="POST" action="insert_note.php">
	<input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
	Date: <input type="date" name="date"><br>
	Content<br>
	<textarea name="content"></textarea><br>
	<input type="submit" value="Create Note">
	</form>
</body>
</html>