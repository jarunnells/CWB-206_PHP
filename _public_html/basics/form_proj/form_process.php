<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: form_process.php

    [ X ] COMPLETE?
-->
<?php

    // CONSTANTS
    define('NAV_LINK', '../basics.php');
    define('BACK', '<< BACK >>');
    define('OUTPUT', '<< OUTPUT >>');
    define('TITLE', '!Sign Up Now!');
    define('STATES', array(
        'AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL',
        'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS', 'KY', 'LA',
        'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE',
        'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND', 'OH', 'OK',
        'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT',
        'VA', 'WA', 'WV', 'WI', 'WY', 'AS', 'DC', 'FM', 'GU',
        'MH', 'MP', 'PW', 'PR', 'VI', 'AA', 'AE', 'AP'
    ));
    define('REGEX', array(
        'phone'=>'(?:\(\d{3}\)\s|\d{3})[-]?\d{3}[-]?\d{4}',
        'state'=>'[A-Za-z]{2}',
        'zip'=>'^\d{5}(?:[-]\d{4})?$'
    ));
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

    // VARS
    $br = "<br />";
    $hr = "<br /><hr /><br />";

    // DEBUG
    define('NAV_OUTPUT', './info_output.php');
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/custom.css" />
        <title>Form Process | PHP</title>
    </head>
    <?php
        echo '<body>';
        echo '<section id="holder">';
        echo '<h3 id="form_title">' . TITLE . '</h3>';
        echo '<hr class="title" />';
    ?>
    <form action="info_output.php" method="get" id="form_process">
        <table>
            <caption>Player Info</caption>
            <tr>
                <th id="required" colspan="2">* Required</th>
            </tr>
            <tr>
                <td><label for="fname">First Name:</label></td>
                <td><input type="text" name="fname" id="fname" maxlength="40" required autofocus><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name:</label></td>
                <td><input type="text" name="lname" id="lname" maxlength="40" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="address">Address:</label></td>
                <td><input type="text" name="address" id="address" maxlength="50" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="city">City:</label></td>
                <td><input type="text" name="city" id="city" maxlength="25" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="state">State:</label></td>
                <td><input type="text" name="state" id="state" placeholder=<?php echo PLACEHOLDERS['state'] ?> title=<?php echo TITLES['state'] ?> pattern=<?php echo REGEX['state'] ?> maxlength="2" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="zip">Zip:</label></td>
                <td><input type="text" name="zip" id="zip" placeholder=<?php echo PLACEHOLDERS['zip'] ?> title=<?php echo TITLES['zip'] ?> pattern=<?php echo REGEX['zip'] ?> maxlength="10" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td><label for="phone">Phone:</label></td>
                <td><input type="text" name="phone" id="phone" placeholder=<?php echo PLACEHOLDERS['phone'] ?> title=<?php echo TITLES['phone'] ?> pattern=<?php echo REGEX['phone'] ?> maxlength="14" required><span class="required">*</span></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit" class="btn styled">SUBMIT</button>
                    <button type="reset" class="btn styled">CLEAR</button>
                </td>
            </tr>
        </table>
    </form>
    <?php
        echo '<hr class="title" />';
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
        // DEBUG
        // echo $br;
        // echo '<a href=' . NAV_OUTPUT . ' class="nav_link" target="_self" title="Go To -> info_output.php...">' . OUTPUT . '</a>';
        echo '</section>';
        echo '</body>';
    ?>
</html>