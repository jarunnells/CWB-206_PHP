<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
    define('TITLE', '<h2>Main Landing Page -> index.php</h2>');
    define('NAV_COMING_SOON', 'coming_soon.php');
    define('NAV_ASHLAND', NAV_COMING_SOON);
    define('NAV_BASICS_LANDING', './basics/basics.php');
    define('NAV_SQL', NAV_COMING_SOON);
    define('NAV_SIGNUP', NAV_COMING_SOON);
    define('NAV_PLAYER_MANAGER', './player_manager/player.php');
    define('NAV_FINAL', NAV_COMING_SOON);
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWB-206-R11 | J.A. Runnells</title>
</head>
<body>
    <?php echo TITLE; ?>
    <hr />
    <section id='project_nav'>
        <p><a href=<?php echo NAV_ASHLAND; ?> target="_self" title='Go To -> ashland.php...'>Ashland Website</a></p>
        <p><a href=<?php echo NAV_BASICS_LANDING; ?> target="_self" title='Go To -> basics.php...'>Basics Landing Page</a></p>
        <p><a href=<?php echo NAV_SQL; ?> target="_self" title='Go To -> sql.php...'>SQL Queries</a></p>
        <p><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 1</a></p>
        <p><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 2</a></p>
        <p><a href=<?php echo NAV_SIGNUP; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 3</a></p>
        <p><a href=<?php echo NAV_PLAYER_MANAGER; ?> target="_self" title='Go To -> player_manager.php...'>Player Manager</a></p>
        <p><a href=<?php echo NAV_FINAL; ?> target="_self" title='Go To -> final.php...'>Final</a></p>
    </section>
    <video width="384" height="216" autoplay muted loop>
        <source src="./media/vid/coding_1920x1080.mp4" type="video/mp4">
        Oops...HTML video tag unsupported...update your browser!
    </video>
</body>
</html>