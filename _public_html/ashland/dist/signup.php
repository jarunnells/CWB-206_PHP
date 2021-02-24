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

    <style>
      body {
        background: slategray;
        color: whitesmoke;
      }
      .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      #form_signup {
        font-family: monospace;
      }
      table {
        border-collapse: collapse;
        border: 1px solid whitesmoke;
        border-radius: 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 25px;
      }
      td:first-of-type {
        text-align: right;
      }
      .btns_action {
        display: flex;
        justify-content: center;
      }
    </style>
    <!-- EXTERNAL STYLESHEETS -->

    <!-- SCRIPT(S) -->

    <title>Player Signup -> signup.php</title>
  </head>
  <body>
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
                <td><input type="date" id="player_bday" name="pla_bdate" min="<?php echo $cal_min; ?>" max="<?php echo $cal_max; ?>" placeholder="YYYY-MM-DD" required><span class="required">*</span></td>
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
                  <a href="../../signup_01/index.php"><button type="button" class="btn_db_conn">TEST DB CONNECTION</button></a>
                </td>
              </tr>
            </tfoot>
          </table>
        </form>
      </section>
    </main>
    <script>
      const reset_fields = () => {
        const txt_fields = document.querySelectorAll('input[type="text"]');
        const date_fields = document.querySelectorAll('input[type="date"]');
        txt_fields.forEach(fld => {
          fld.value = "";
        });
        date_fields.forEach(fld => {
          fld.value = "";
        });
      };
      const btn_clr = document.querySelector('.btn-clr');
      btn_clr.addEventListener('click', e => {
        e.preventDefault();
        reset_fields();
      });
    </script>
  </body>
</html>
