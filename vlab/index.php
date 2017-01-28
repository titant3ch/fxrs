<!DOCTYPE html>
<html>
<head>
	<title>FedEx | Virtual Labs</title>
</head>
<body>
<header>

	<?php
		// Hosts & Port Configuration
		require "inc/connect.php";

		// Test each host for a stable connection
		foreach ($hosts as $key => $host) {
		    $connection = @fsockopen($host, $port);

		    if (is_resource($connection)) {
		        echo '<div>' . $key . ' on port ' . $port . ' | Good</div>' . "\n";
		        fclose($connection);
		    }
		    else {
		        echo '<h2>' . $key . ' on port ' . $port . ' is not responding</h2>' . "\n";
		    }
		}
	?>
</header>
	<!-- POST form to submit transactions -->
	<form name="myForm" action="result.php" method="post">

	<!-- Select Virtual Server | Drop-down menu -->
		<select name="server">
			<option value="">- Select -</option>
			<?php
				foreach ($hosts as $key => $host) {
					echo '<option value="' . $host . '">' . $key . '</option>';
				}
			?>
		</select>
		<!-- Text area for transaction -->
		<textarea name="trans" class="textarea" placeholder="Transaction" required></textarea>
		<!-- Houston, we have lift off -->
		<input type="submit" value="Send">

	</form>
</body>
</html>

<!-- 

<!DOCTYPE html>
<html>
<head>
	<title>FedEx | Virtual Labs</title>
</head>
<body>
<header>

	<h2>7xx on port 2000 | Good</h2>
<h2>8xx on port 2000 is not responding</h2>
<h2>85x on port 2000 | Good</h2>
<h2>100x on port 2000 | Good</h2>
<h2>106x on port 2000 is not responding</h2>
<h2>11xx on port 2000 | Good</h2>
<h2>12xx on port 2000 | Good</h2>
<h2>13xx on port 2000 | Good</h2>
<h2>14xx on port 2000 | Good</h2>
<h2>15xx on port 2000 is not responding</h2>
<h2>1404 on port 2000 | Good</h2>
</header>
	
	<form name="myForm" action="result.php" method="post">

	
		<select name="server">
			<option value="">- Select -</option>
			<option value="10.250.24.251">7xx</option><option value="10.250.24.252">8xx</option><option value="10.250.24.253">85x</option><option value="10.250.24.254">100x</option><option value="10.250.25.100">106x</option><option value="10.250.25.101">11xx</option><option value="10.250.25.102">12xx</option><option value="10.250.25.103">13xx</option><option value="10.250.25.104">14xx</option><option value="10.250.25.105">15xx</option><option value="ausrcwa230">1404</option>		</select>
		
		<textarea name="trans" class="textarea" placeholder="Transaction" required></textarea>
		
		<input type="submit" value="Send">

	</form>
</body>
</html>

 -->