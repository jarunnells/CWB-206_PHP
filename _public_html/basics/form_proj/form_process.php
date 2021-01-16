<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: form_process.php

    [ - ] COMPLETE?
-->
<?php
    define('NAV_OUTPUT', './info_output.php');

    // CONSTANTS
    define('NAV_LINK', '../basics.php');
    define('BACK', '<< BACK >>');
    define('OUTPUT', '<< OUTPUT >>');
    define('TITLE', 'Sign Up Now');

    // VARS
    $br = "<br />";
    $hr = "<br /><hr /><br />";
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/basics.css" />
        <link rel="stylesheet" href="../styles/custom.css" />
        <title>Form Process | PHP</title>
    </head>
    <?php
        echo '<body><section id="holder">';
        echo '<h3 id="form_title">' . TITLE . '</h3>';
        echo '<hr class="title" />';
    ?>
        <form action="info_output.php" method="get" id="form_process">
            <table>
                <caption>Player Info</caption>
                <tr>
                    <td><label for="fname">First Name:</label></td>
                    <td><input type="text" name="fname" id="fname"></td>
                </tr>
                <tr>
                    <td><label for="lname">Last Name:</label></td>
                    <td><input type="text" name="lname" id="lname"></td>
                </tr>
                <tr>
                    <td><label for="address">Address:</label></td>
                    <td><input type="text" name="address" id="address"></td>
                </tr>
                <tr>
                    <td><label for="city">City:</label></td>
                    <td><input type="text" name="city" id="city"></td>
                </tr>
                <tr>
                    <td><label for="state">State:</label></td>
                    <td><input type="text" name="state" id="state"></td>
                </tr>
                <tr>
                    <td><label for="zip">Zip:</label></td>
                    <td><input type="text" name="zip" id="zip"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone:</label></td>
                    <td><input type="text" name="phone" id="phone"></td>
                </tr>
                <tr>
                    <td><button type="submit">SUBMIT</button></td>
                    <td><button type="reset">CLEAR</button></td>
                </tr>
            </table>
        </form>
    <?php
        echo '<hr class="title" />';
        echo '<a href=' . NAV_OUTPUT . ' class="nav_link" target="_self" title="Go To -> info_output.php...">' . OUTPUT . '</a>';        
        echo $br;
        echo '<a href=' . NAV_LINK . ' class="nav_link" target="_self" title="Go To -> basics.php...">' . BACK . '</a>';
        echo '</section></body>';
    ?>
</html>