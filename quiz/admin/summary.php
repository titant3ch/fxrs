<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>FXRS Quiz - Result</title>
	
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>

<?php

	require "../inc/usertest.php";

	// error_reporting(E_ALL ^ E_DEPRECATED);

	$con = mysql_connect("127.0.0.1", "root", "Fedex123");

	if (!$con) {
	$noDatabase = true;
	die('Could not connect: ' . mysql_error());
	}

	$noDatabase = !mysql_select_db("quizie", $con);

	$query = "SELECT * FROM Results";
	$result = mysql_query($query);

	if($result === FALSE) {
	  die('<h3>No Current Call Types</h3>');
	}

	echo '<h3>Quiz Report</h3>';

	echo '<hr />';

	echo '<table>
	        <tr>
	          <th>Agent</th>
	          <th>Host</th>
	          <th>Answers</th>
	          <th>TotalCorrect</th>
	          <th>Grade</th>
	          <th>Time</th>
	        </tr>';

	while($row = mysql_fetch_array($result)){ 
	echo '
	      
	        <tr>
	          <td>' . $row['Agent'] . '</td>
	          <td>' . $row['Host'] . '</td>
	          <td>' . $row['Answers'] . '</td>
	          <td>' . $row['TotalCorrect'] . '</td>
	          <td>' . $row['Grade'] . '</td>
	          <td>' . $row['Time'] . '</td>
	        </tr>
	  ';
	}

	echo '</table>';

	mysql_close();
?>

</body>
</html>