<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: basics.php
-->
<?php
  define('NAV_SOON', '../coming_soon.php');
  define('TITLE', 'Basics Landing Page');
  define('TITLE_SUBTILE', '-> basics.php <-');
  define('TITLE_P', 'Getting Down With The Basics...');
  define('NAV_RANDOM', './random/random.php');
  define('NAV_FORM', './form_proj/form_process.php');
  define('NAV_FORM_INCLD', './form_includes/'); // index.php
  define('NAV_TICKETS', './buy_tickets/'); // index.php
  define('NAV_PLAYER', './team_players/'); // index.php
  define('NAV_LANDING', '../index.php');
?>
<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- STYLESHEET(S) -->
    <!-- <link rel="stylesheet" href="../styles/index.css"> -->
    <link rel="stylesheet" href="./styles/index.css">
    <!-- SCRIPT(S) -->
    <script src="../js/event_listeners.js" defer></script>
    <title>Basics Landing Page</title>
  </head>

  <body>
    <main class="container">
      <header>
        <h2 class="logo"></h2>
        <!-- <div class="toggle"></div> -->
        <button class="hamburger hamburger--collapse toggle" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <span class="hamburger-label">Menu</span>
        </button>
      </header>
      <!-- <video src="./assets/vid/coding_1920x1080.mp4" type="video/mp4" autoplay muted loop>Oops...HTML video tag unsupported...update your browser!</video> -->
      <div class="img img-bg"></div>
      <div class="overlay">
      </div>
      <div class="text">
        <h2><?php echo TITLE; ?></h2>
        <h3><?php echo TITLE_SUBTILE; ?></h3>
        <h4>Assignments</h4>
        <p><?php echo TITLE_P; ?></p>
        <!-- <a href="#">ABOUT</a> -->
      </div>
    </main>
    <nav id='nav_menu'>
      <ul>
        <li><a href=<?php echo NAV_RANDOM; ?> target="_self" title='Go To -> ashland.php...'>Random Numbers</a></li>
        <li><a href=<?php echo NAV_FORM; ?> target="_self" title='Go To -> basics.php...'>Form Project</a></li>
        <li><a href=<?php echo NAV_FORM_INCLD; ?> target="_self" title='Go To -> index.php...'>Form Includes</a></li>
        <li><a href=<?php echo NAV_PLAYER; ?> target="_self" title='Go To -> index.php...'>Team Players</a></li>
        <li><a href=<?php echo NAV_TICKETS; ?> target="_self" title='Go To -> coming_soon.php...'>Buy Tickets</a></li>
        <li><a href=<?php echo NAV_LANDING; ?> target="_self" title='Go To -> index.php...'>BACK -> HOME</a></li>
      </ul>
    </nav>
  </body>

</html>
