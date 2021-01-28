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
  <!-- <script src="./js/main.js" defer></script> -->

  <title>Action</title>
</head>
<body class="body dark">
  <header>
    <!-- <h1 class="logo"><?php //echo LOGO; ?></h1> -->
    <h1 class="logo">
      <img src="assets/img/provided/logos/soccerball.gif" alt="LOGO"></img>
    </h1>
    <input type="checkbox" id="nav-toggle" class="nav-toggle" />
    <nav>
      <!-- <ul class="flex"> -->
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="action.php">Action</a></li>
        <li><a href="map.php">Map</a></li>
      </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </header>

  <main class="content">
    <p class="p__greet"><?php echo ACTION_GREETING; ?></p>
  </main>
</body>
</html>