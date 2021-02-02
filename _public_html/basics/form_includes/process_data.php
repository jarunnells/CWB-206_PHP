<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: process_data.php -> Form Includes
-->
<?php
  // IMPORT(S)
  include '../helpers/player.php';

  // CONSTANTS
  define('NAV_LINK', './index.php');
  define('BACK', '<< FORM >>');
  define('TITLE', 'Player Data');

  // DATA -> $_POST
  $fname_player = $_POST['fname'];
  $lname_player = $_POST['lname'];
  $street = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $phone = $_POST['phone'];

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
  <title>Player Info Output | PHP</title>
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

