<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php -> Form Includes
-->
<?php
  include ('../helpers/sanitation.php');

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

  // define('FIELDS', array('fname', 'lname', 'address', 'city', 'state', 'zip', 'phone'));
  // foreach(FIELDS as $field) { if (!isset($field)) { $field = 'setme'; } }

  if (!isset($fname)) { $fname = ''; }
  if (!isset($lname)) { $lname = ''; }
  if (!isset($address)) { $address = ''; }
  if (!isset($city)) { $city = ''; }
  if (!isset($state)) { $state = ''; }
  if (!isset($zip)) { $zip = ''; }
  if (!isset($phone)) { $phone = ''; }

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
      <?php if (!empty($error)) { echo '<div class="error">'.$error.'</div>'; } ?>
      <form action="./process_data.php" method="post" id="form_process">        
        <table>
          <!-- <caption>Player Info</caption> -->
          <tr>
            <td><label for="fname">First Name:</label></td>
            <td><input type="text" name="fname" id="fname" maxlength="40" value=<?php echo sanitize_input($fname); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="lname">Last Name:</label></td>
            <td><input type="text" name="lname" id="lname" maxlength="40" value=<?php echo sanitize_input($lname); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" name="address" id="address" maxlength="50" value=<?php echo sanitize_input($address); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="city">City:</label></td>
            <td><input type="text" name="city" id="city" maxlength="25" value=<?php echo sanitize_input($city); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="state">State:</label></td>
            <td><input type="text" name="state" id="state" placeholder=<?php echo PLACEHOLDERS['state'] ?> title=<?php echo TITLES['state'] ?> maxlength="2" value=<?php echo sanitize_input($state); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="zip">Zip:</label></td>
            <td><input type="text" name="zip" id="zip" placeholder=<?php echo PLACEHOLDERS['zip'] ?> title=<?php echo TITLES['zip'] ?> maxlength="10" value=<?php echo sanitize_input($zip); ?>><span class="required">*</span></td>
          </tr>
          <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="text" name="phone" id="phone" placeholder=<?php echo PLACEHOLDERS['phone'] ?> title=<?php echo TITLES['phone'] ?> maxlength="14" value=<?php echo sanitize_input($phone); ?>><span class="required">*</span></td>
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