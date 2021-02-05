<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: process_data.php -> Form Includes ... $_POST
-->
<?php



  // IMPORT(S)
  include ('../helpers/player.php');
  // include ('../helpers/sanitation.php');

  // CONSTANTS
  define('NAV_LINK', './index.php');
  define('BACK', '<< FORM >>');
  define('TITLE', 'Player Data');

  // DATA -> $_POST
  // $fname_player = filter_input(INPUT_POST, 'fname', );
  // $lname_player = filter_input(INPUT_POST, 'lname');
  // $street = filter_input(INPUT_POST, 'address');
  // $city = filter_input(INPUT_POST, 'city');
  // $state = filter_input(INPUT_POST, 'state');
  // $zip = filter_input(INPUT_POST, 'zip');
  // $phone = filter_input(INPUT_POST, 'phone');

  define('REGEX', array(
    'name'=>"/^[a-zA-Z-' ]*$/",
    'street'=>"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})/",
    'city'=>"/^[A-z]{2,}/",
    'state'=>"/^[A-Z]{2,}/",
    'zip'=>"/^\d{2,}(-\d{4})?$/",
    'phone'=>"/^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/"
  ));

  $fname_player = filter_var($_POST['fname'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['name'])));
  $lname_player = filter_var($_POST['lname'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['name'])));
  $street = filter_var($_POST['address'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['street'])));
  $city = filter_var($_POST['city'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['city'])));
  $state = filter_var($_POST['state'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['state'])));
  $zip = filter_var($_POST['zip'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['zip'])));
  $phone = filter_var($_POST['phone'], FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>REGEX['phone'])));



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
  <?php ?>
  <main class="container">
    <section id="holder" class="section__styled">
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

