<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: signup.php
-->
<?php date_default_timezone_set('America/Denver');
  include_once('./helpers/sanitation.php');
//  include_once('./helpers/player/MinorPlayer.php');
  $today = strtotime('Today');
  $cal_min = strtotime('-21 years', $today);
  $cal_max = strtotime('+1 year', $today);
  define('FORM_CAPTION', 'Player Signup');
  define('PLACEHOLDERS', [
    'bday'=>'YYYY-MM-DD',
    'phone'=>'303-555-1234',
    'state'=>'CO',
    'zip'=>'12345[-6789]'
  ]);
  define('TITLES', [
    'bday'=>'Four Digit Year, Two Digit Month, Two Digit Day',
    'phone'=>'303-555-1234 or (303) 555-1234',
    'state'=>'Two Letter Abbreviation...',
    'zip'=>'Zip[+4]...'
  ]);
  define('STATES', [
    'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL',
    'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA',
    'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE',
    'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK',
    'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT',
    'VA', 'WA', 'WV', 'WI', 'WY', 'AS', 'DC', 'FM', 'GU',
    'MH', 'MP', 'PW', 'PR', 'VI', 'AA', 'AE', 'AP'
  ]);
  define('REGEX', [
    'name'=>"/^[a-zA-Z-' ]+$/",
    'street'=>"/^(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})$/",
    'city'=>"/^[A-z]{2,}$/",
    'state'=>"/^[A-Z]{2}$/",
    'zip'=>"/^\d{5}(-\d{4})?$/",
    'phone'=>"/^1?[-\. ]?(\(\d{3}\)?[-\. ]?|\d{3}?[-\. ]?)?\d{3}?[-\. ]?\d{4}$/"
  ]);
  // $fname_re = filter_var($_POST['fname'], FILTER_VALIDATE_REGEXP, ["options"=>["regexp"=>REGEX['name']]]);
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- STYLESHEET(S) -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<!--    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
    <link rel="stylesheet" href="../../signup_02/css/signup.css">

    <!-- SCRIPT(S) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" defer></script>
    <script src="./js/signup.js" defer></script>

    <title>Player Signup -> signup.php</title>
  </head>
  <body>
    <?php include './navbar.php'; ?>
    <main class="container">
      <section class="signup">
        <form action="../../signup_02/index.php" method="POST" id="form_signup">
          <input type="hidden" name="action" id="action" value="new_player">
          <table>
            <thead></thead>
            <caption><?php echo FORM_CAPTION; ?></caption>
            <tbody>
              <tr>
                <td><label for="player_fname">Player First Name</label></td>
                <td><input type="text" id="player_fname" name="pla_fname" maxlength="25" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_lname">Player Last Name</label></td>
                <td><input type="text" id="player_lname" name="pla_lname" maxlength="25" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_bday">Player Birth Date</label></td>
                <td><input type="date" id="player_bday" name="pla_bdate" min="<?php echo $cal_min; ?>" max="<?php echo $cal_max; ?>" placeholder="<?php echo PLACEHOLDERS['bday'] ?>" title="<?php echo TITLES['bday'] ?>" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_street">Street Address</label></td>
                <td><input type="text" id="player_street" name="pla_add" maxlength="50" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_city">City</label></td>
                <td><input type="text" id="player_city" name="pla_city" maxlength="50" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_state">State</label></td>
                <td><input type="text" id="player_state" name="pla_state" placeholder="<?php echo PLACEHOLDERS['state'] ?>" title="<?php echo TITLES['state'] ?>" maxlength="2" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_zip">Zipcode</label></td>
                <td><input type="text" id="player_zip" name="pla_zip" placeholder="<?php echo PLACEHOLDERS['zip'] ?>" title="<?php echo TITLES['zip'] ?>" minlength="5" maxlength="10" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_phone">Primary Phone</label></td>
                <td><input type="text" id="player_phone" name="pla_phone" placeholder="<?php echo PLACEHOLDERS['phone'] ?>" title="<?php echo TITLES['phone'] ?>" maxlength="14" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="parent_fname">Parent First Name</label></td>
                <td><input type="text" id="parent_fname" name="pla_par_fname" maxlength="25" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="parent_lname">Parent Last Name</label></td>
                <td><input type="text" id="parent_lname" name="pla_par_lname" maxlength="25" required><span class="required">*</span></td>
              </tr>
              <tr>
                <th id="required" colspan="2">* Required</th>
              </tr>
              <tr class="btns_action">
                <td colspan="2">
                  <button type="submit" class="btn btn-submit">SUBMIT</button>
                  <button type="submit" class="btn btn-clr">CLEAR</button>
                </td>
              </tr>
            </tbody>
            <tfoot>
<!--              <tr class="db_conn_test">-->
<!--                <td colspan="2">-->
<!--                  <a href="../../signup_02/index.php"><button type="button" class="btn btn-db-conn">TEST DB CONNECTION</button></a>-->
<!--                </td>-->
<!--              </tr>-->
              <tr class="db_conn_err">
<!--                <td colspan="1">-->
<!--                  <a href="../../signup_02/index.php"><button type="button" class="btn btn-db-conn">DB SUCCESS</button></a>-->
<!--                </td>-->
                <td colspan="2">
                  <a href="../../signup_02/errors/error_sim/conn_error.php"><button type="button" class="btn-db-err">DB ERROR</button></a>
                </td>
              </tr>
            </tfoot>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
