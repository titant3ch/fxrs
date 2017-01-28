<!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>Results</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" />
</head>
<body>
	<?php

		if (isset($_POST['stringType'])) {
			$stringType = ($_POST['stringType']);
		} else {
			$stringType = 'off';
		}

		if ( $stringType == 'on' ) {
		 	$zpl = $_POST['base']; // Receives the base64 encoded string

		 	$loop = "Noloop";
			}
		elseif ($stringType == 'off') {
			$str = $_POST['base']; // Receives the base64 encoded string
			$zpl = base64_decode($str); // Decodes the base64 string to ZPL buffer

			$loop = "loop";
		}

		
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, "http://api.labelary.com/v1/printers/8dpmm/labels/4x6/0/");
		curl_setopt($curl, CURLOPT_POST, TRUE);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $zpl);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

		$result = curl_exec($curl);

		if (curl_getinfo($curl, CURLINFO_HTTP_CODE) == 200) {
		    $k = 0;
			while(!$label){
			    if(!file_exists("label[$k].png"))
			        $label = "label[$k].png";
			    $k++;
			}
			$image = fopen("img/".$label, "w");

		    fwrite($image, $result);
		    fclose($image);
		} else {
		    print_r("<p id='errorString'>$result</p>");
		    $error = "true";
		}

		curl_close($curl);

	?>
	<a class="convertALink" href=".">Convert Another</a>
	<img src="img/<?php echo $label; ?>" alt="label" class="<?php echo $error; ?>" id="<?php echo $loop; ?>">

</body>
</html>