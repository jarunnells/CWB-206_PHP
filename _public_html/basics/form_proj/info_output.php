<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: info_output.php

    [ - ] COMPLETE?
-->
<?php
    include './player.php';
    // require './player.php';

    // CONSTANTS
    define('NAV_LINK', './form_process.php');
    define('BACK', '<< FORM >>');

    // VARS
    $br = "<br />";
    $hr = "<br /><hr /><br />";
    $title_form = 'Player Data';

    // INSTANTIATE
    $player = new Player('Ziggy', 'Wiggy');
    $player_minor = new MinorPlayer('Ziggy', 'Wiggy', '05/26/2016', 'Marley', 'McFarley');
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
        echo "Player(asString=true): " . $player->get_player_name(true) . $br;
        echo "Player['first']: " . $player->get_player_name()['first'] . $br;
        echo "Player['last']: " . $player->get_player_name()['last'] . $br;
        echo $hr;
        echo "MinorPlayer->Parent(asString=true): " . $player_minor->get_parent_name(true) . $br;
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
        echo '</section></body>';
    ?>
</html>