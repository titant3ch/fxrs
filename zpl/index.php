<!DOCTYPE html>
<html>
<head> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>ZPL to PNG</title>
  <link rel="stylesheet" type="text/css" href="css/custom.css" media="all" />
</head>
<body>

  <form name="myForm" action="result.php" method="post">

    <div id="accountInfo">

      <p>Toggle for Buffer String</p>
      <input type="checkbox" name="stringType" id="toggle">
      <label for="toggle"  value="0"></label>

      <br />
    </div>

    <section>
      <h2>Base64 or ZPL</h2>
      <textarea name="base" class="textarea" required></textarea>
    </section>

    <input type="submit" value="Convert">

  </form>


</body>
</html>