<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FXRS Quiz - Result</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<!-- <meta http-equiv="refresh" content="300" > -->

</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz Results</h1>

		<hr />
		
        <?php

			require "inc/usertest.php";

			date_default_timezone_set('America/Chicago');

			// error_reporting(E_ERROR | E_WARNING | E_PARSE);

			// Grading time!

			$answer1 = $_POST['q1-answers'];
			$answer2 = $_POST['q2-answers'];
			$answer3 = $_POST['q3-answers'];
			$answer4 = $_POST['q4-answers'];
			$answer5 = $_POST['q5-answers'];
			$answer6 = $_POST['q6-answers'];
			$answer7 = $_POST['q7-answers'];
			$answer8 = $_POST['q8-answers'];
			$answer9 = $_POST['q9-answers'];
			$answer10 = $_POST['q10-answers'];

			$totalCorrect = 0;

			if ($answer1  == "C") { $totalCorrect++; }
			if ($answer2  == "B") { $totalCorrect++; }
			if ($answer3  == "D") { $totalCorrect++; }
			if ($answer4  == "A") { $totalCorrect++; }
			if ($answer5  == "B") { $totalCorrect++; }
			if ($answer6  == "B") { $totalCorrect++; }
			if ($answer7  == "D") { $totalCorrect++; }
			if ($answer8  == "B") { $totalCorrect++; }
			if ($answer9  == "D") { $totalCorrect++; }
			if ($answer10 == "C") { $totalCorrect++; }

			$con = mysql_connect("127.0.0.1", "root", "root");

			if (!$con) {
				$noDatabase = true;
				die('Could not connect: ' . mysql_error());
			}

			$noDatabase = !mysql_select_db("quizie", $con);

			if (isset($_POST['q1-answers'])  && isset($_POST['q2-answers'])  && isset($_POST['q3-answers']) && isset($_POST['q4-answers']) && isset($_POST['q5-answers'])){

			$sql = 'CREATE TABLE IF NOT EXISTS `Results` (`Agent` text NOT NULL, `Host` text NOT NULL, `Answers` text NOT NULL, `TotalCorrect` text NOT NULL, `Grade` text NOT NULL, `Time` text NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8';
			mysql_query($sql, $con);
			}

			// $time = $_POST['calltime'];
			$user = strtolower($user);
			$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
			$hostname = strtolower($hostname);
			$answers = array_values($_POST);
			$answers = implode(",", $_POST);
			$time = date("g:ia m/d/y");
			
			$grade = $totalCorrect * 10;

			$sql = "INSERT INTO Results (Agent, Host, Answers, TotalCorrect, Grade, Time) VALUES (
			'" . mysql_real_escape_string($user, $con) . "',
			'" . mysql_real_escape_string($hostname, $con) . "',
			'" . mysql_real_escape_string($answers, $con) . "',
			'" . mysql_real_escape_string($totalCorrect, $con) . " of 10',
			'" . mysql_real_escape_string($grade, $con) . "',
			'" . mysql_real_escape_string($time, $con) . "'
			)";

			mysql_query($sql, $con);

			echo "<div id='grade'>$totalCorrect / 10 correct</div>";
			echo "<div id='gMessage'>$user, your final grade is $grade%</div>";
            
        ?>
	
	</div>

</body>

</html>