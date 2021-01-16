<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: basics.php
-->
<?php
    define('TITLE', '<h2>Basics Landing Page -> basics.php</h2>');
    define('NAV_RANDOM', './random/random.php');
    define('NAV_FORM', './form_proj/form_process.php');
    define('NAV_LANDING', '../index.php');
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basics Landing Page</title>
    </head>
    <body>
        <h2><?php echo TITLE; ?></h2>
        <hr/>
        <section class="nav">
            <p><a href=<?php echo NAV_RANDOM; ?> target="_self" title='Go To -> random.php...'>Random Numbers</a></p>
            <p><a href=<?php echo NAV_FORM; ?> target="_self" title='Go To -> form_process.php...'>Form Project</a></p>
            <p><a href=<?php echo NAV_LANDING; ?> target="_self" title='Go To -> index.php...'>BACK -> Main Landing Page</a></p>
        </section>
    </body>
</html>