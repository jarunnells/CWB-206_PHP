<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: info_output.php

    [ X ] COMPLETE?
-->
<?php
  include './player.php';
  // require './player.php';

  // CONSTANTS
  define('NAV_LINK', './form_process.php');
  define('BACK', '<< FORM >>');
  define('TITLE', 'Player Data');

  // MISC VARS
  $br = "<br />";
  $hr = "<br /><hr /><br />";

  // DATA -> DEBUG
  // $debug_url_01 = 'http://localhost:8080/_public_html/basics/form_proj/info_output.php?fname=Ziggy&lname=Wiggy&address=1234+S+Main+St&city=AnyTown&state=CO&zip=12345-6789&phone=303-555-9876';
  // $debug_url_02 = 'http://localhost:8080/_public_html/basics/form_proj/info_output.php?fname=Marley&lname=McFarley&address=4321+SW+Main+St&city=AnyTown&state=CO&zip=12345&phone=303-555-5678';
  // $fname_parent = 'Marley';
  // $lname_parent = 'McFarley';

  // DATA -> $_GET
  $fname_player = $_GET['fname'];
  $lname_player = $_GET['lname'];
  $street = $_GET['address'];
  $city = $_GET['city'];
  $state = $_GET['state'];
  $zip = $_GET['zip'];
  $phone = $_GET['phone'];

  // INSTANTIATE PLAYER OBJECT -> SET VALUES
  $player = new Player($fname_player, $lname_player);
  $player->set_address($street, $city, $state, $zip);
  $player->set_phone($phone);
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/custom.css" />
  <title>Info Output | PHP</title>
</head>

<body>
  <main>
    <section id="holder">
      <h3 id="form_title"><?php echo TITLE ?></h3>
      <?php // echo "Player(asString=true): " . $player->get_player_name(true) . $br; ?>
      <hr class="title" />
      <table id="table_output">
        <caption><?php //echo $player->get_player_name(true) ?></caption>
        <tr>
          <td>First Name:</td>
          <td><?php echo $player->get_player_name()['first'] ?></td>
        </tr>
        <tr>
          <td>Last Name:</td>
          <td><?php echo $player->get_player_name()['last'] ?></td>
        </tr>
        <tr>
          <td>Street:</td>
          <td><?php echo $player->get_address()['street'] ?></td>
        </tr>
        <tr>
          <td>City:</td>
          <td><?php echo $player->get_address()['city'] ?></td>
        </tr>
        <tr>
          <td>State:</td>
          <td><?php echo $player->get_address()['state'] ?></td>
        </tr>
        <tr>
          <td>Zip:</td>
          <td><?php echo $player->get_address()['zip'] ?></td>
        </tr>
        <tr>
          <td>Phone:</td>
          <td><?php echo $player->get_phone() ?></td>
        </tr>
      </table>
      <hr class="title" />
      <?php
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
      ?>
    </section>
  </main>
</body>
</html>