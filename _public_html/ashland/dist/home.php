<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: home.php
-->
<?php
  // include './helpers/photos.php';
  // include './helpers/files.php';
  define('HOME_GREETING', 'Hello World -> home.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./css/styles.min.css">

  <!-- SCRIPT(S) -->
  <!-- <script src="./js/main.js" defer></script> -->

  <title>Home</title>
</head>

<body class="dark">
  <main>
    <nav>
      <ul class="flex">
        <li><a href="home.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="action.php">Action</a></li>
        <li><a href="map.php">Map</a></li>
        <li><a href="#">Soon...</a></li>
        <li><a href="#">Soon...</a></li>
      </ul>
    </nav>
    <div>
      <p class="p__greet"><?php echo HOME_GREETING; ?></p>
    </div>>
  </main>
</body>

</html>