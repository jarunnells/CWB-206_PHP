<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
    $title = '<h2>Main Landing Page -> index.php</h2>';
    $nav_coming_soon = 'coming_soon.php';
    $nav_ashland = $nav_coming_soon;
    $nav_basics_landing = './basics/basics.php';
    $nav_sql = $nav_coming_soon;
    $nav_signup = $nav_coming_soon;
    $nav_player_manager = $nav_coming_soon;
    $nav_final = $nav_coming_soon;
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CWB-206-R11 | J.A. Runnells</title>
</head>
<body>
    <?php echo $title; ?>
    <hr />
    <section id='project_nav'>
        <p><a href=<?php echo $nav_ashland; ?> target="_self" title='Go To -> ashland.php...'>Ashland Website</a></p>
        <p><a href=<?php echo $nav_basics_landing; ?> target="_self" title='Go To -> basics.php...'>Basics Landing Page</a></p>
        <p><a href=<?php echo $nav_sql; ?> target="_self" title='Go To -> sql.php...'>SQL Queries</a></p>
        <p><a href=<?php echo $nav_signup; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 1</a></p>
        <p><a href=<?php echo $nav_signup; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 2</a></p>
        <p><a href=<?php echo $nav_signup; ?> target="_self" title='Go To -> signup.php...'>Sign-up Phase 3</a></p>
        <p><a href=<?php echo $nav_player_manager; ?> target="_self" title='Go To -> player_manager.php...'>Player Manager</a></p>
        <p><a href=<?php echo $nav_final; ?> target="_self" title='Go To -> final.php...'>Final</a></p>
    </section>
</body>
</html>