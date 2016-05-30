<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FXRS Quiz - Result</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Final Quiz Results</h1>
		
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

			$totalCorrect = 0;

			if ($answer1 == "A") { $totalCorrect++; }
			if ($answer2 == "A") { $totalCorrect++; }
			if ($answer3 == "D") { $totalCorrect++; }
			if ($answer4 == "B") { $totalCorrect++; }
			if ($answer5 == "B") { $totalCorrect++; }

			$con = mysql_connect("127.0.0.1", "root", "Fedex123");

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
			
			$grade = $totalCorrect * 20;

			$sql = "INSERT INTO Results (Agent, Host, Answers, TotalCorrect, Grade, Time) VALUES (
			'" . mysql_real_escape_string($user, $con) . "',
			'" . mysql_real_escape_string($hostname, $con) . "',
			'" . mysql_real_escape_string($answers, $con) . "',
			'" . mysql_real_escape_string($totalCorrect, $con) . " of 5',
			'" . mysql_real_escape_string($grade, $con) . "',
			'" . mysql_real_escape_string($time, $con) . "'
			)";

			mysql_query($sql, $con);

			echo "<div id='results'>$totalCorrect / 5 correct</div>";
			echo "<div id='results'>$user, your final grade is $grade%</div>";
            
        ?>
	
	</div>

</body>

</html>