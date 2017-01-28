<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head> 
  <!--[if IE]>
<link rel="stylesheet" href="http://192.168.88.122/calltypes/css/ie-only.css" type="text/css" />
<h1>Why are you using IE? smh.. Use a better browser like Google Chrome!</h1>
<img src="http://i.imgur.com/kgfV66r.gif" alt="IE">
<![endif]--> 
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <title>FXRS | Agent Tool Access</title>
  <link rel="stylesheet" type="text/css" href="css/fonts.css" media="all" />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="all" />
  <link rel="icon" type="image/gif" href="img/fx-favicon.ico">

  <!-- <meta http-equiv="refresh" content="300" > -->

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>

    <?php
    // Setting TimeZone
    date_default_timezone_set('America/Chicago');

    // Agent Data
    require "inc/agent.php";

    error_reporting(E_ALL ^ E_DEPRECATED);
  ?>

<fieldset>

      <legend>Tool Accessibility</legend>

      <form name="myForm" action="post.php" method="post" onsubmit="return validateForm()">

        <section>
          <p>Please indicate what tool(s) you <u>DONT</u> have access, if no issues please select "No Issues" option.</p>
        </section>

        <section class="container">
          <div>
            <p><a href="https://sso.secure.fedex.com/esblogviewer/" target="_blank">Production ESB</a></p>
            <input type="checkbox" name="prodESB" id="prodESB">
            <label for="prodESB"></label>
          </div>
        </section>

        <section class="container">
          <div>
            <p><a href="https://test.secure.fedex.com/esblogviewer/" target="_blank">Test ESB</a></p>
            <input type="checkbox" name="testESB" id="testESB">
            <label for="testESB"></label>
          </div>
        </section>

        <section class="container">
          <div>
            <p><a href="https://sso.secure.fedex.com/fcasadm/" target="_blank">Admin Tool</a></p>
            <input type="checkbox" name="adminTool" id="adminTool">
            <label for="adminTool"></label>
          </div>
        </section>

        <section class="container">
          <div>
            <p>No issues</p>
            <input type="checkbox" name="noIssues" id="noIssues">
            <label for="noIssues"></label>
          </div>
        </section>

        <!-- <section>
          <div>
            <textarea name="ldap" class="textarea" maxlength="10" placeholder="Enter LDAP" required></textarea>
          </div>
        </section> -->

        <input type="submit" value="Submit">

      </form>
</fieldset>

<p id="hint">Hint: You can click on the lable to open page and attempt to login. Should open a differnt tab.</p>

</body>
</html>