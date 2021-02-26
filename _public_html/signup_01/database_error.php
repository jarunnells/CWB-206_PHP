<?php ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLESHEET(S) -->
    <link rel="stylesheet" href="./css/db_error.css">

    <title>Database Error</title>
  </head>

  <body>
    <div id="page">
      <div id="header">
        <h1>Player Sign Up</h1>
      </div>

      <div id="main">
        <h2 class="error">Database Error</h2>
        <br />
        <h3>There was an error connecting to the database.</h3>
        <p>[ 1 ] <span class="verify">The database must be installed.</span></p>
        <p>[ 2 ] <span class="verify">MySQL must be running.</span></p>
        <br />
        <p><span class="error bold">[Error]</span><?php /** @var $err_msg */ echo $err_msg; ?></p>
        <br />
      </div>

      <div id="footer">
        <p class="copyright">
          &copy; <?php echo date("Y"); ?> Aims Community College
        </p>
      </div>
    </div>
  </body>
</html>
