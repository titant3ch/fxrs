<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <title>FXRS Quiz : Results</title>
  
  <!-- Favicon -->
  <link rel="icon" type="image/gif" href="img/fx-favicon.ico">

  <!-- Meta Data -->
  <meta http-equiv="refresh" content="5" >
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<link rel="stylesheet" type="text/css" href="../css/table.css" />

  
  <!-- JS -->
</head>

<body>

  <?php
    // Setting TimeZone
    date_default_timezone_set('America/Chicago');

    // Agent Data
    require "../inc/usertest.php";
	
    // Remove Error Log
    error_reporting(E_ERROR | E_WARNING | E_PARSE);


          // error_reporting(E_ALL ^ E_DEPRECATED);

          $con = mysql_connect("127.0.0.1", "root", "root");

          if (!$con) {
            $noDatabase = true;
            die('Could not connect: ' . mysql_error());
          }

          $noDatabase = !mysql_select_db("quizie", $con);

          $query = "SELECT * FROM Results";
          $result = mysql_query($query);

          if($result === FALSE) {
              die('<h3>No Data</h3>');
          }

          echo '<h3>Reported</h3>';

          echo '<table>
                    <tr>
                      <th>User</th>
                      <th>Answers</th>
                      <th>Grade</th>
					  <th>Time</th>
                    </tr>';

          while($row = mysql_fetch_array($result)){ 
            echo '
                  
                    <tr>
                      <td>' . $row['Agent'] . '</td>
                      <td>' . $row['Answers'] . '</td>
                      <td>' . $row['Grade'] . '</td>
					  <td>' . $row['Time'] . '</td>
                    </tr>
              ';
          }

          echo '</table>';

          mysql_close();
        ?>

      </div>


</body>
</html>