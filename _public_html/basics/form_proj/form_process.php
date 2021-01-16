<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: form_process.php

    [ - ] COMPLETE?
-->
<?php
    define('NAV_OUTPUT', './info_output.php');

    // CONSTANTS
    define('NAV_LINK', '../basics.php');
    define('BACK', '<< BACK >>');
    define('OUTPUT', '<< OUTPUT >>');

    // VARS
    $br = "<br />";
    $hr = "<br /><hr /><br />";
    $title_form = 'Sign Up Now';
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/basics.css" />
        <link rel="stylesheet" href="../styles/custom.css" />
        <title>Info Output | PHP</title>
    </head>
    <?php
        echo '<body><section id="holder">';
        echo '<h3 id="form_title">' . $title_form . '</h3>';
        echo '<hr class="title" />';
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
        echo $br;
        echo '<a href=' . NAV_OUTPUT . ' class="nav_link" target="_self" title="Go To -> info_output.php...">' . OUTPUT . '</a>';
        echo '</section></body>';
    ?>
</html>