<?php
// Display's any errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Setting TimeZone
date_default_timezone_set('America/Chicago');

// Let's parse the transaction
$transaction = '0,"050"1,"System Information and Control"1989,"04"99,""';

function multiexplode ($delimiters,$string) {
    
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

$exploded = multiexplode(array('"'),$transaction);

list($f, $v) = $exploded;

foreach ($exploded as $field => $value)
	{
		$value = trim($value, ',');
		echo 'Field: ' . $field . ' | Value: ' . $value;
		echo '<br><br>';
	}

// preg_match_all(',""', $transaction, $matches);

// echo '<pre>';
// 	print_r($exploded);
// echo '</pre>';

// 0,"050"
// 1,"System Information and Control"
// 1989,"04"
// 99,""
?>