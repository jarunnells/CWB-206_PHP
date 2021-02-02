<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php -> Form Includes
-->
<?php
  include '../helpers/player.php';
  define('NAV_LINK', '../basics.php');
  define('BACK', '<< BACK >>');
  define('TITLE', '!Sign Up Now!');
  define('PLACEHOLDERS', array(
    'phone'=>'303-555-1234',
    'state'=>'CO',
    'zip'=>'12345[-6789]'
  ));
  define('TITLES', array(
    'phone'=>'303-555-1234 or (303) 555-1234',
    'state'=>'Two Letter Abbreviation...',
    'zip'=>'Zip[+4]...'
  ));
  $error = 'OOPS! Error...';
  $error = '';
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/custom.css" />
  <title>Form Includes | PHP</title>
</head>

<body>
  <main class="container">

    <section id="holder" class="section__styled">
      <h3 id="form_title"><?php echo TITLE; ?></h3>
      <hr class="title" />
      <div class="form_subtitle">Player Info</div>
      <hr class="title" />
      <div class="error">
        <?php echo $error; ?>
      </div>
      <form action="./process_data.php" method="post" id="form_process">        
        <table>
          <!-- <caption>Player Info</caption> -->
          <tr>
            <td><label for="fname">First Name:</label></td>
            <td><input type="text" name="fname" id="fname" maxlength="40" autofocus><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" name="lname" id="lname" maxlength="40"><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" name="address" id="address" maxlength="50"><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="city">City:</label></td>
            <td><input type="text" name="city" id="city" maxlength="25"><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="state">State:</label></td>
            <td><input type="text" name="state" id="state" placeholder=<?php echo PLACEHOLDERS['state'] ?> title=<?php echo TITLES['state'] ?> maxlength="2"><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="zip">Zip:</label></td>
            <td><input type="text" name="zip" id="zip" placeholder=<?php echo PLACEHOLDERS['zip'] ?> title=<?php echo TITLES['zip'] ?> maxlength="10"><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" name="phone" id="phone" placeholder=<?php echo PLACEHOLDERS['phone'] ?> title=<?php echo TITLES['phone'] ?> maxlength="14"><span class="required">*</span></td>
          </tr>
          <tr>
            <th id="required" colspan="2">* Required</th>
          </tr>
          <tr>
            <td colspan="2">
              <button type="submit" class="btn styled">SUBMIT</button>
              <button type="reset" class="btn styled">CLEAR</button>
            </td>
          </tr>
        </table>
      </form>
      <hr class="title" />
      <?php echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>'; ?>
    </section>
  </main>
</body>

</html>