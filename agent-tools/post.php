<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <meta http-equiv="refresh" content="5;url=http://ausrcwa230/fxrs/">
  <title>Thank You! | Agent Tool Access</title>
  <link rel="stylesheet" type="text/css" href="css/fonts.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="all" />
</head>
<body>

<p id="thanks">Thank you for your feedback. You will be re-directed to FXRS Chronicles in 5 seconds</p>

<?php

  require "inc/usertest.php";

  error_reporting(E_ERROR | E_WARNING | E_PARSE);

  $con = mysql_connect("127.0.0.1", "root", "Fedex123");

  if (!$con) {
    $noDatabase = true;
    die('Could not connect: ' . mysql_error());
  }

  $noDatabase = !mysql_select_db("access", $con);
    
  $sql = 'CREATE TABLE IF NOT EXISTS `Agent_Access` (`Agent` text NOT NULL, `Computer_Name` text NOT NULL, `Production_ESB` text NOT NULL, `Test_ESB` text NOT NULL, `Admin_Tool` text NOT NULL, `DLREQ` text NOT NULL) ENGINE=MyISAM DEFAULT CHARSET=utf8';
  mysql_query($sql, $con);

  // Production ESB

  if (isset($_POST['prodESB'])) {
    $prodESB = 'No';
  } else {
    $prodESB = 'Yes';
  }

  // Test ESB
  
  if (isset($_POST['testESB'])) {
    $testESB = 'No';
  } else {
    $testESB = 'Yes';
  }

  // Admin Tool
  
  if (isset($_POST['adminTool'])) {
    $adminTool = 'No';
  } else {
    $adminTool = 'Yes';
  }

  // DLREQ
  
  if (isset($_POST['dlREQ'])) {
    $dlREQ = 'No';
  } else {
    $dlREQ = 'Yes';
  }

  // User Data

  $user = strtolower($user);

  // Computer Name

  $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
  $hostname = strtolower($hostname);

  $sql = "INSERT INTO Agent_Access (Agent, Computer_Name, Production_ESB, Test_ESB, Admin_Tool, DLREQ) VALUES (
    '" . mysql_real_escape_string($user, $con) . "',
    '" . mysql_real_escape_string($hostname, $con) . "',
    '" . mysql_real_escape_string($prodESB, $con) . "',
    '" . mysql_real_escape_string($testESB, $con) . "',
    '" . mysql_real_escape_string($adminTool, $con) . "',
    '" . mysql_real_escape_string($dlREQ, $con) . "'
    )";
  mysql_query($sql, $con);

?>

</body>
</html>