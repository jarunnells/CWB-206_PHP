<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: signup.php
-->
<?php date_default_timezone_set('America/Denver');
  $today = strtotime('Today');
  $cal_min=strtotime('-21 years', $today);
  $cal_max=strtotime('+1 year', $today);
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
    <link rel="stylesheet" href="../../signup_01/css/signup.css">

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
        <form action="" method="post" id="form_signup">
          <table>
            <thead></thead>
            <caption>Player Signup</caption>
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
                <td><input type="date" id="player_bday" name="pla_bdate" min="<?php echo $cal_min; ?>" max="<?php echo $cal_max; ?>" placeholder="YYYY-MM-DD" title="Four Digit Year, Two Digit Month, Two Digit Day" required><span class="required">*</span></td>
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
                <td><input type="text" id="player_state" name="pla_state" placeholder="CO" title="Two Letter Abbreviation..." maxlength="2" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_zip">Zipcode</label></td>
                <td><input type="text" id="player_zip" name="pla_zip" placeholder="12345[-6789]" title="Zip[+4]..." minlength="5" maxlength="10" required><span class="required">*</span></td>
              </tr>
              <tr>
                <td><label for="player_phone">Primary Phone</label></td>
                <td><input type="text" id="player_phone" name="pla_phone" placeholder="303-555-1234" title="303-555-1234 or (303) 555-1234" maxlength="14" required><span class="required">*</span></td>
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
              <tr class="db_conn_test">
                <td colspan="2">
                  <a href="../../signup_01/index.php"><button type="button" class="btn btn-db-conn">TEST DB CONNECTION</button></a>
                </td>
              </tr>
            </tfoot>
          </table>
        </form>
      </section>
    </main>
  </body>
</html>
