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

  // VARS
  $NAV_LINK = './index.php';
  $BACK = '<< FORM >>';
  $TITLE = 'Player Data';

  // if ($_SERVER["REQUEST_METHOD"] == "POST") { echo 'POST'; }

  // DATA -> $_POST
  $fname = $_POST['fname'] ?? '';
  $lname = $_POST['lname'] ?? '';
  $street = $_POST['street'] ?? '';
  $city = $_POST['city'] ?? '';
  $state = $_POST['state'] ?? '';
  $zip = $_POST['zip'] ?? '';
  $phone = $_POST['phone'] ?? '';

  define('REGEX', [
    'name'=>"/^[a-zA-Z-' ]+$/",
    'street'=>"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/",
    'city'=>"/^[A-z]{2,}$/",
    'state'=>"/^[A-Z]{2}$/",
    'zip'=>"/^\d{5}(-\d{4})?$/",
    'phone'=>"/^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/"
  ]);

  $fname_re = filter_var($_POST['fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $lname_re = filter_var($_POST['lname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
  $street_re = filter_var($_POST['street'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['street']]]);
  $city_re = filter_var($_POST['city'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['city']]]);
  $state_re = filter_var($_POST['state'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['state']]]);
  $zip_re = filter_var($_POST['zip'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['zip']]]);
  $phone_re = filter_var($_POST['phone'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['phone']]]);

  if (empty($fname)) { $error = 'Empty First Name!'; }
  elseif (!$fname_re) { $error = 'Invalid First Name!'; }
  elseif (empty($lname)) { $error = 'Empty Last Name!'; }
  elseif (!$lname_re) { $error = 'Invalid Last Name!'; }
  elseif (empty($street)) { $error = 'Empty Street Address!'; }
  elseif (!$street_re) { $error = 'Invalid Street Address!'; }
  elseif (empty($city)) { $error = 'Empty City!'; }
  elseif (!$city_re) { $error = 'Invalid City!'; }
  elseif (empty($state)) { $error = 'Empty State!'; }
  elseif (!$state_re) { $error = 'Invalid State!'; }
  elseif (empty($zip)) { $error = 'Empty Zip!'; }
  elseif (!$zip_re) { $error = 'Invalid Zip!'; }
  elseif (empty($phone)) { $error = 'Empty Phone Number!'; }
  elseif (!$phone_re) { $error = 'Invalid Phone Number!'; }
  else { $error = ''; }

  if ($error != '') {
    include ('./index.php');
    exit();
  }

  // INSTANTIATE PLAYER OBJECT -> SET VALUES
  $player = new Player($fname, $lname);
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
        <h3 id="form_title"><?php echo $TITLE ?></h3>
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
          echo '<a href='.$NAV_LINK.' class="nav_link" target="_self" title="Go To -> basics.php...">'.$BACK.'</a>';
        ?>
      </section>
    </main>
  </body>
</html>
