<!DOCTYPE html>
<html>
	<head>
		<title>Website Evaluation</title>
		<style>
			body {
				background: #F3FFE2;
				font-family: "Trebuchet MS", Helvetica, sans-serif;
				color: #225378;
				}
			h1 { color: #EB7F00;}
		</style>
	</head>
	<body>
		<form name="evaluation" method="get" action="form.php">
			<h1>Website Evaluation</h1>
			Your Name:<br>
			<input type="text" name="name" placeholder="Leave blank for 'Anonymous'"><br><br>
			Website Rating: <br>
			1<input type="radio" name="rating" value="1" required>&nbsp;Poor<br>
			2<input type="radio" name="rating" value="2">&nbsp;Below Average<br>
			3<input type="radio" name="rating" value="3">&nbsp;Average<br>
			4<input type="radio" name="rating" value="4">&nbsp;Good<br>
			5<input type="radio" name="rating" value="5">&nbsp;Excellent<br><br>
			<input type="submit" name="submit" value="Submit">
		</form>
	</body>
</html>