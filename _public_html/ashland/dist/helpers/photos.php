<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: photos.php
-->
<?php
  // PATH CONSTANTS ***********************************************
  define('BASE', './assets/img/provided/');
  define('LOGOS', BASE.'logos/');
  define('MAPS', BASE.'maps/');
  define('SOLO', BASE.'solo/');
  define('TEAM', BASE.'team/');
  define('ACTION', BASE.'action/');
  /// LOGOS *******************************************************
  define('IMG_SMLOGO', LOGOS.'smLogo.gif');
  define('IMG_SOCCERBALL', LOGOS.'soccerball.gif');
  define('IMG_TSS', LOGOS.'tss.gif');
  /// MAPS *******************************************************
  define('IMG_COMPLEXMAP', MAPS.'complexmap.jpg');
  define('IMG_MAP1', MAPS.'map1.gif');
  define('IMG_MAP2', MAPS.'map2.gif');
  define('IMG_MAP3', MAPS.'map3.gif');
  define('IMG_MAP4', MAPS.'map4.gif');
  define('IMG_MAP5', MAPS.'map5.gif');
  /// SOLO *******************************************************
  define('IMG_AMITH', SOLO.'amith.jpg');
  define('IMG_JOHN', SOLO.'john.jpg');
  define('IMG_KRST', SOLO.'krst.jpg');
  /// TEAM *******************************************************
  define('IMG_BLUEDEVILS', TEAM.'bluedevils.jpg');
  define('IMG_ATEAM', TEAM.'ateam.jpg');
  define('IMG_DSC', TEAM.'dsc.jpg');
  /// ACTION *****************************************************
  define('IMG_DIT', ACTION.'dit.jpg');
  define('IMG_KATH', ACTION.'kath.jpg');
  define('IMG_REC', ACTION.'rec.jpg');

  $images_team = array(IMG_BLUEDEVILS, IMG_ATEAM, IMG_DSC);
  $images_action = array(IMG_DIT, IMG_KATH, IMG_REC);
  $images_map = array(IMG_COMPLEXMAP, IMG_MAP1, IMG_MAP2, IMG_MAP3, IMG_MAP4, IMG_MAP5);
?>
