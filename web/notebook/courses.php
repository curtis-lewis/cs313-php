<?php
require("dbConnect.php");

$db = get_db();

$query = "SELECT number, name, id FROM course";
$stmt = $db->prepare($query);
$stmt->execute();

$courses = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Courses</h1>
	<ul>
<?php
	foreach ($courses as $course) 
	{	
		$id = $course['id'];
		$number = $course['number'];
		$name = $course['name'];

		echo "<li><p><a href='notes.php?course_id=$id'>$number - $name</p></li>";
	}
?>
	</ul>
</body>
</html>