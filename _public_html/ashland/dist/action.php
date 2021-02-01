<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: action.php
-->
<?php
  include './helpers/photos.php';
  // define('ACTION_GREETING', 'Hello World -> action.php');
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
  <link rel="stylesheet" href="../src/css/photo_slider.css">

  <!-- EXTERNAL STYLESHEETS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- TEMPORARY EMBEDDED STYLING -->
  <style>
    .slide:first-child { background: url(./assets/img/provided/action/dit.jpg) no-repeat center center/contain; }
    .slide:nth-child(2) { background: url(./assets/img/provided/action/kath.jpg) no-repeat center center/contain; }
    .slide:nth-child(3) { background: url(./assets/img/provided/action/rec.jpg) no-repeat center center/contain; }
  </style>

  <!-- SCRIPT(S) -->
  <script src="./js/photos.js" defer></script>

  <title>Action</title>
</head>
<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <!-- <p class="p__greet"><?php //echo ACTION_GREETING; ?></p> -->

    <?php
      include_once './helpers/photos.php';
      set_page('action');
      output_html();
    ?>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>