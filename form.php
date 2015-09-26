<!DOCTYPE html>
<html>
	<head>
		<title>Website Evaluation</title>
		<style>
			body {
				background: #F3FFE2;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				color: #225378;
				text-align: center;
				}
			h1 { color: #EB7F00;}
			.rate { color: #1695A3;}
		</style>
	</head>
	<body>
	<?php

	$name = $_GET["name"];
	$rating = $_GET["rating"];
	$filename = 'website-ratings.txt';
	
		
	if (empty($name)) {
		$name = "Anonymous";
	}
	
	$myfile = fopen("website-ratings.txt", "a") or die("Unable to open file!");
	$rating;
	fwrite($myfile, $rating . "\n");
	fclose($myfile);
	
	$lines = file($filename, FILE_IGNORE_NEW_LINES);
	$average = array_sum($lines) / count($lines);
	
	echo "<br><h1>Thank you, " . $name . "!</h1>";
	echo "<h3>Your feedback has been submitted.</h3><br>";
	echo "<h2>The overall average rating of this website is:</h2>";
	echo "<h1 class = rate>" . round($average, 2) . "</h1>";
	?>
	</body>
</html>