<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: teams.php
-->
<?php
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
  <link rel="stylesheet" href="../src/css/photo_slider.css">

  <!-- EXTERNAL STYLESHEETS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- SCRIPT(S) -->
  <script src="./js/app.js" defer></script>

  <title>Teams</title>
</head>

<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <p class="p__greet"><?php echo TEAMS_GREETING; ?></p>

    <!-- <section class="slider">
      <div class="slide current">
        <div class="card">
          <h1>Photo One</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <h1>Photo Two</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <div class="slide">
        <div class="card">
          <h1>Photo Three</h1>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
      <div class="buttons">
        <button class="btn buttons__prev"><i class="material-icons">chevron_left</i></button>
        <button class="btn buttons__next"><i class="material-icons">chevron_right</i></button>
      </div>
    </section>
    <section class="buttons">
      <div class="buttons-skip flex flex--row flex--center">
        <button class="btn buttons__play"><i class="material-icons">play_circle_outline</i></button>
        <button class="btn buttons__pause"><i class="material-icons">pause_circle_outline</i></button>      
        <i class="btn__radio material-icons" id="rad-1">radio_button_checked</i>
        <i class="btn__radio material-icons" id="rad-2">radio_button_unchecked</i>
        <i class="btn__radio material-icons" id="rad-3">radio_button_unchecked</i>
      </div>
    </section>     -->

    <?php
      include_once './helpers/photos.php';
      set_page('teams');
      output_html();
    ?>

  </main>

  <?php include 'footer.php'; ?>

</body>

</html>