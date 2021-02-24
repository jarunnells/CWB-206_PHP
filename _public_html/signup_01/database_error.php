<?php ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" type="text/css" href="main.css"/>

  <title>Error</title>
</head>

<body>
<div id="page">
  <div id="header">
    <h1>Soccer Sign Up</h1>
  </div>

  <div id="main">
    <h1>Database Error</h1>
    <p>There was an error connecting to the database.</p>
    <p>The database must be installed.</p>
    <p>MySQL must be running.</p>
    <p>Error message: <?php echo $err_msg; ?></p>
    <p>&nbsp;</p>
  </div><!-- end main -->

  <div id="footer">
    <p class="copyright">
      &copy; <?php echo date("Y"); ?> Aims Community College
    </p>
  </div>

</div><!-- end page -->
</body>
</html>
