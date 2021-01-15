<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: basics.php
-->
<?php
    $title = '<h2>Basics Landing Page -> basics.php</h2>';
    $nav_random = './random/random.php';
    $nav_landing = '../index.php';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Basics Landing Page</title>
    </head>
    <body>
        <h2><?php echo $title; ?></h2>
        <hr/>
        <section class="nav">
            <p><a href=<?php echo $nav_random; ?> target="_self" title='Go To -> random.php...'>Random Numbers</a></p>
            <p><a href=<?php echo $nav_landing; ?> target="_self" title='Go To -> index.php...'>Main Landing Page</a></p>
        </section>        
    </body>
</html>