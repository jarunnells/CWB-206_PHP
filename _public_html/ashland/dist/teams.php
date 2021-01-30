<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: teams.php
-->
<?php
  include './helpers/photos.php';
  define('TEAMS_GREETING', 'Hello World -> teams.php');
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

  <title>Teams</title>
</head>
<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <p class="p__greet"><?php echo TEAMS_GREETING; ?></p>

    <section class='photos'>
      <div class="flex flex--center flex--col">Team Image #01
        <img src=<?php echo $images_team[0]?> alt="bluedevils.jpg">
      </div>

      <div class="flex flex--center flex--col">Team Image #02
        <img src=<?php echo $images_team[1]?> alt="ateam.jpg">
      </div>

      <div class="flex flex--center flex--col">Team Image #03
        <img src=<?php echo $images_team[2]?> alt="dsc.jpg">
      </div>
    </section>

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>