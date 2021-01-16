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
    $player->set_address('1234 North Main Street', 'AnyTown', 'CA', '90210');
    $player->set_phone('415.555.1234');
    $player_minor = new MinorPlayer('Ziggy', 'Wiggy', '05/26/2016', 'Marley', 'McFarley');
    $player_minor->set_address('4321 South Main Street', 'AnyTown', 'CO', '80642');
    $player_minor->set_phone('720.555.4321');
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
        echo "Address['street']: " . $player->get_address()['street'] . $br;
        echo "Address['city']: " . $player->get_address()['city'] . $br;
        echo "Address['state']: " . $player->get_address()['state'] . $br;
        echo "Address['zip']: " . $player->get_address()['zip'] . $br;
        echo "Phone: " . $player->get_phone() . $br;
        echo '<hr class="title" />';
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
        echo '</section></body>';
    ?>
</html>