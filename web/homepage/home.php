<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="header">
	<h1 class="title">Curtis Lewis</h1>
		<?php include 'header.php' ?>
	</div>
	<div class="content">
	<h2>Profile</h2>
	<p>My name is Curtis Lewis and I am 22 years old and a senior attending Brigham Young University - Idaho. My major is software engineering and I am currently pursuing internships in the Salt Lake City, UT or Santa Barbara, CA areas.</p>
	<h2>Interests</h2>
	<ul>
		<li>Music</li>
		<li>Games</li>
		<li>Warhammer/Painting</li>
		<li>Software Engineering</li>
	</ul>
	<br>
	<div id="image_carousel">
	<img class="mySlides" src="moose_blood_image.jpg">
	<img class="mySlides" src="hots_image.jpg">
	<img class="mySlides" src="wh40k_image.jpg">
	<img class="mySlides" src="software_image.jpg">
	<div id="arrows">
	<button class="display_left" onclick="plusDivs(-1)">&#10094;</button>
	<button class="display_right" onclick="plusDivs(+1)">&#10095;</button>
	</div>
	</div>
	</div>
	<br>
	<br>
	<div class="footer">
		<?php include 'footer.php'?>
	</div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>