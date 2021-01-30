<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: map.php
-->
<?php
  include './helpers/photos.php';
  define('MAP_GREETING', 'Hello World -> map.php');
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

  <title>Map</title>
</head>
<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <p class="p__greet"><?php echo MAP_GREETING; ?></p>

    <section class='photos flex flex--center flex--row'>
      <div class="flex flex--center flex--col">Map Image #01
        <img src=<?php echo $images_map[0]?> alt="complexmap.jpg">
      </div>

      <div class="flex flex--center flex--col">Map Image #02
        <img src=<?php echo $images_map[1]?> alt="map1.gif">
      </div>

      <div class="flex flex--center flex--col">Map Image #03
        <img src=<?php echo $images_map[2]?> alt="map2.gif">
      </div>
    </section>
    <section class='photos flex flex--center flex--row'>
      <div class="flex flex--center flex--col">Map Image #04
        <img src=<?php echo $images_map[3]?> alt="map3.gif">
      </div>

      <div class="flex flex--center flex--col">Map Image #05
        <img src=<?php echo $images_map[4]?> alt="map4.gif">
      </div>

      <div class="flex flex--center flex--col">Map Image #06
        <img src=<?php echo $images_map[5]?> alt="map5.gif">
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>