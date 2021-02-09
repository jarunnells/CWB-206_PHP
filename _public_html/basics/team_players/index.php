<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php -> Team Players

    [ x ] COMPLETE?
-->
<?php
  define('FILE', './player_list.txt');
  $players = file(FILE);
  include('./player_output.php');
?>
