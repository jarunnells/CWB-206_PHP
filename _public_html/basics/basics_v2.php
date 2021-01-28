<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: basics_v2.php
-->
<?php
    define('TITLE', 'Basics Landing Page<br /><h3> -> basics.php <- </h3>');
    define('SUBTITLE', 'Getting Down With The Basics...');
    define('NAV_RANDOM', './random/random.php');
    define('NAV_FORM', './form_proj/form_process.php');
    define('NAV_LANDING', '../index.php');

    define('TITLE', '<h2>Main Landing Page -> index.php</h2>');
    define('NAV_COMING_SOON', 'coming_soon.php');
    define('NAV_ASHLAND', './ashland/dist/index.php');
    define('NAV_BASICS_LANDING', './basics/basics.php');
    define('NAV_SQL', NAV_COMING_SOON);
    define('NAV_SIGNUP', NAV_COMING_SOON);
    define('NAV_PLAYER_MANAGER', './player_manager/player.php');
    define('NAV_FINAL', NAV_COMING_SOON);
    define('GITHUB', 'https://github.com/jarunnells/CWB-206_PHP');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./styles/index.css"> <!-- /Applications/MAMP/htdocs/_public_html/styles/index.css -->
  <!-- SCRIPT(S) -->
  <script src="./js/event_listeners.js" defer></script> <!-- /Applications/MAMP/htdocs/_public_html/js/event_listeners.js -->
  <title>Basics Landing Page</title>
</head>

<body>

  <main class="container">
    <!-- class="showcase" -->
    <header>
      <h2 class="logo"></h2>
      <!-- <div class="toggle">
                
            </div> -->
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
      <!-- class="overlay" -->
    </div>
    <div class="text">
      <!-- class="text" -->
      <h2>Basics Landing Page</h2>
      <h3>-> basics.php <-</h3> <h4>Assignments</h4>
          <p>Getting Down With The Basics...</p>
          <!-- <a href="#">ABOUT</a> -->
    </div>
  </main>
  <nav id='nav_menu'>
    <!-- class="menu" -->
    <ul>
      <li><a href=<?php echo NAV_ASHLAND; ?> target="_self" title='Go To -> ashland.php...'>Ashland Website</a></li>
      <li><a href=<?php echo NAV_BASICS_LANDING; ?> target="_self" title='Go To -> basics.php...'>Basics Landing Page</a></li>
      <li><a href=<?php echo NAV_SQL; ?> target="_self" title='Go To -> sql.php...'>SQL Queries</a></li>
      <li><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 1</a></li>
      <li><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 2</a></li>
      <li><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 3</a></li>
      <li><a href=<?php echo NAV_PLAYER_MANAGER; ?> target="_self" title='Go To -> player_manager.php...'>Player Manager</a></li>
      <li><a href=<?php echo NAV_FINAL; ?> target="_self" title='Go To -> final.php...'>Final</a></li>
    </ul>
  </nav>
</body>

</html>