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

    <style>
      body {
        background: slategray url(./assets/img/background_ball.jpg);
        background-size: cover;
        color: whitesmoke;
      }
      #form_signup table {
        background-color: rgba(46, 139, 87,0.95);
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
      caption {
        margin-bottom: 1rem;
      }
      label {
        margin-right: 0.5rem;
      }
      .required {
        margin: 0 2px;
      }
      .btns_action {
        margin-top: 1rem;
      }
      input[type=text],
      input[type=date] {
        font-family: monospace;
        font-size: 0.5625em;
        text-align: center;
        border-radius: 6px;
        height: 1.5rem;
        width: 10rem;
        background-color: rgb(245, 245, 245);
        margin: 2px 0;
      }
      input[type=text]:focus,
      input[type=date]:focus {
        /*background-color: var(--bg-color-input-focus);*/
        /*color: var(--color-input-focus);*/
        outline: none;
        /*-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
        /*box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);*/
      }
      .signup table {
        border-collapse: collapse;
        border: 1px solid whitesmoke;
        border-radius: 10px;
        display: flex;
        align-items: center;
        flex-direction: column;
        padding: 40px;
      }
      td:first-of-type {
        text-align: right;
      }

      /* BUTTONS */
      .btns_action {
        display: flex;
        justify-content: center;
      }
      .btn {
        background-color: #4CAF50;
        border: none;
        border-radius: 15px;
        color: white;
        padding: 0.5rem 1rem;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        /*font-size: 0.5rem;*/
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s;
        transition-duration: 0.4s;
      }

      .btn:hover {
        box-shadow: 0 0 10px 5px rgba(0,0,0,0.2), 0 0 10px 5px rgba(0,0,0,0.19);
        letter-spacing: 2px;
      }

      .btn-submit {
        background-color: #008CBA;
        color: white;
        border: 2px solid white;
      }

      .btn-submit:hover {
        background-color: white;
        color: black;
        border: 2px solid #008CBA;
      }

      .btn-clr {
        background-color: #555555;
        color: white;
        border: 2px solid white;
      }

      .btn-clr:hover {
        background-color: white;
        color: black;
        border: 2px solid #555555;
      }

      .btn-db-conn {
        background-color: #f44336;
        color: white;
        border: 2px solid white;
      }

      .btn-db-conn:hover {
        background-color: white;
        color: black;
        border: 2px solid #f44336;
      }

    </style>

    <!-- EXTERNAL STYLESHEETS -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <!-- SCRIPT(S) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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
<!--              <tr>-->
<!--                <td><label for="player_bday">Player Birth Date</label></td>-->
<!--                <td><input type="date" id="player_bday" name="pla_bdate" min="--><?php //echo $cal_min; ?><!--" max="--><?php //echo $cal_max; ?><!--" placeholder="YYYY-MM-DD" title="Four Digit Year, Two Digit Month, Two Digit Day" required><span class="required">*</span></td>-->
<!--              </tr>-->
              <tr>
                <td><label for="player_bday">Player Birth Date</label></td>
                <td><input type="text" id="player_bday" name="pla_bdate" placeholder="YYYY-MM-DD" title="Four Digit Year, Two Digit Month, Two Digit Day" required><span class="required">*</span></td>
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
      $(function() {
        $('#player_bday').datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'yy-mm-dd',
          showAnim: "clip",
          showButtonPanel: true,
          showWeek: true,
          minDate: '-21y',
          maxDate: 0,
          closeText: 'CLOSE',
          classes: {
            'ui-datepicker-close': 'btn btn-success',
          }
          // showOn: "button",
          // buttonImage: "images/calendar.gif",
          // buttonImageOnly: true,
          // buttonText: "Select date",
        });
        $('.ui-datepicker').css({"font-family": "JetBrains Mono, Courier New, monospace"})
      });
    </script>
  </body>
</html>
