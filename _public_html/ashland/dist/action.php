<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: action.php
-->
<?php
  define('ACTION_GREETING', 'Hello World -> action.php');
  define('LOGO', 'Logo');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./css/styles.min.css">
  <link rel="stylesheet" href="../src/css/ashland_base.css">

  <!-- SCRIPT(S) -->
  <!-- <script src="./js/app.js" defer></script> -->

  <title>Action</title>
</head>
<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content">
    <p class="p__greet"><?php echo ACTION_GREETING; ?></p>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>