<?php
	$host = $_POST['server'];
	$port = 2000;

	$fp = fsockopen($host, 2000, $errno, $errstr, 20);

	$transaction = $_POST['trans'];
	
	if (!$fp) {
	    echo "$errstr ($errno)<br />\n";
	} else {
	    fwrite($fp, $transaction);

	    echo fread($fp, 90000000);

	    fclose($fp);
	}
?>