<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: random.php
-->
<?php
    $br = '<br />';
    $nav_link = '../basics.php';
    $range_min = 0;
    $range_max = 10;
    $output_max = 10;
    $header = " Random Numbers ($output_max) Between (Inclusive): $range_min and $range_max";
    $numbers = array();
    $algorithm = array('rand', 'mt_rand', 'random_int');
    for ($i=0; $i<$output_max; $i++) {
        switch ($algorithm[0]) {
            case 'rand':
                array_push($numbers, rand($range_min, $range_max));                
                break;
            case 'mt_rand':
                array_push($numbers, mt_rand($range_min, $range_max));
                break;
            case 'random_int':
                array_push($numbers, random_int($range_min, $range_max));
                break;
            default:
                break;
        }
    }
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../styles/basics.css" />
        <title>Random Numbers | PHP</title>
    </head>
    <body>
        <h3><?php echo $header . $br ?></h3>
        <?php
            foreach ($numbers as $number) {
                echo '<p>' . $number . '</p>';
            }
        ?>
        <a href=<?php echo $nav_link; ?> target="_self" title='Go To -> basics.php...'>Basics Landing Page</a>
    </body>
</html>
