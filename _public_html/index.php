<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
    define('TITLE', '<h2>Main Landing Page -> index.php</h2>');
    define('NAV_COMING_SOON', 'coming_soon.php');
    define('NAV_ASHLAND', './ashland/dist/index.php');
    define('NAV_BASICS_LANDING', './basics/basics.php');
    define('NAV_SQL', NAV_COMING_SOON);
    define('NAV_SIGNUP', './ashland/dist/signup.php');
    define('NAV_PLAYER_MANAGER', './player_manager/player_output.php');
    define('NAV_FINAL', NAV_COMING_SOON);
    define('GITHUB', 'https://github.com/jarunnells/CWB-206_PHP');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/index.css">
    <script src="./js/event_listeners.js" defer></script>
    <title>CWB-206-R11 | J.A. Runnells</title>
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
            <h2>J.A. Runnells</h2>
            <h3>CWB-206-R11</h3>
            <h4>Assignments</h4>
            <p>Not sure what to put here yet -- Lorem, it's up to you; for now...</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nihil atque iusto harum ipsum assumenda, placeat ut optio, culpa fugiat eos minus dolore aut veritatis tempore recusandae aliquam numquam alias!</p>
            <!-- <a href="#">ASSIGNMENT CALENDAR</a> -->
        </div>
        <ul class="source_code">
            <li><a href=<?php echo GITHUB ?> target="_blank" title="Go to -> GitHub.com"><img src="./assets/img/GitHub-Mark-Light-32px.png" alt="GitHub"></a></li>
        </ul>
    </main>
    <nav id='nav_menu'>
        <ul>
            <li><a href=<?php echo NAV_ASHLAND; ?> target="_self" title='Go To -> ashland.php...'>Ashland Website</a></li>
            <li><a href=<?php echo NAV_BASICS_LANDING; ?> target="_self" title='Go To -> basics.php...'>Basics Landing Page</a></li>
            <li><a href=<?php echo NAV_SQL; ?> target="_self" title='Go To -> sql.php...'>SQL Queries</a></li>
            <li><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Project</a></li>
<!--            <li><a href=--><?php //echo NAV_SIGNUP; ?><!-- target="_self" title='Go To -> signup.php...'>Sign-up Phase 2</a></li>-->
<!--            <li><a href=--><?php //echo NAV_COMING_SOON; ?><!-- target="_self" title='Go To -> signup.php...'>Sign-up Phase 3</a></li>-->
            <li><a href=<?php echo NAV_PLAYER_MANAGER; ?> target="_self" title='Go To -> player_manager.php...'>Player Manager</a></li>
            <li><a href=<?php echo NAV_FINAL; ?> target="_self" title='Go To -> final.php...'>Final</a></li>
        </ul>
    </nav>
</body>
</html>
