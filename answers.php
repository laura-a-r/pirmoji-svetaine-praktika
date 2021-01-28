<?php
	$name = $_GET['name'];
	if ($_GET['weight'] == "4.2") {
		$answer1 = "<span class=\"green\">Right</span>, but I need to lose some to look better...";
	}
	else {
		$answer1 = "<span class=\"red\">Wrong</span>, guess again!";
	}
	
	if ($_GET['grams'] == "40") {
		$answer2 = "<span class=\"green\">Right</span>, only so few...";
	}
	else {
		$answer2 = "<span class=\"red\">Wrong</span>, guess again!";
	}
	
	if ($_GET['wet'] == "tune") {
		$answer3 = "<span class=\"green\">Right</span>, I don't understand that taste...";
	}
	else {
		$answer3 = "<span class=\"red\">Wrong</span>, I love it!";
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Godzila</title>
		<meta charset="utf-8">
		<style>
			.green {
				color: green;
			}
			
			.red {
				color: red;
			}
			
			body, html {
				background-image: url('./img/fireworks.jpg');
				height: 100%; 
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
			
			table, th, td {
				border: 1px solid white;
				color: white;
				margin-top: 6%;
				margin-left: 3%;
				font-size: 28px;
				padding: 4px 12px 4px 12px;
			}
			
			a {
				font-size: 18px;
				color: white;
			}
		</style>
	</head>
	<body>
		<a href="./index.html">home</a><br><br>
		<a href="./psl_3.html">try again</a>
		<h1 style="color: #fc03df; text-shadow: 0px 1px 0px #faaaf1; margin-top: 3%; margin-left: 4%;">Hello, <?php echo $name ?>, nice to meet You!</h1>
		<table>
			<tr>
				<td>No.</td>
				<td>So...Were you right?</td>
			</tr>
			<tr>
				<td>1.</td>
				<td><?php echo $answer1 ?></td>
			</tr>
			<tr>
				<td>2.</td>
				<td><?php echo $answer2 ?></td>
			</tr>
			<tr>
				<td>3.</td>
				<td><?php echo $answer3 ?></td>
			</tr>
		</table>
	</body>	
</html>
