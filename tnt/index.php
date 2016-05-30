<!DOCTYPE html>
<html>
<head>
	<title>Tracking # Tester</title>

	<link rel="stylesheet" href="css/user.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="icon" type="image/gif" href="img/fx-favicon.ico">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

<script>
	function process() {
		var url="https://www.fedex.com/insight/utilities/tracking_number_viewer.jsp?TRACKING_ID_NBR=" + document.getElementById("url").value + "&TRACKING_ID_QUAL_NBR=&CARR_CD=&OBJ=HT&LANGUAGE_CD=en&TYPE=HT";
		location.href=url;
		return false;
	}
</script>

<fieldset>

	<legend>Tracking Number Tester</legend>

	<form onSubmit="return process();">
		<input id="url" type="text" name="url">
		<br>
		<input id="s" type="submit" value="Search">
	</form>
	
</fieldset>

</body>
</html>