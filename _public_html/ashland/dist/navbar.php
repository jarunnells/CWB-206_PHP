<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: navbar.php
-->

<!-- TODO: extract vars -->
<?php 
  define('SOON', '../dist/helpers/coming_soon.php');

  define('LANDING', array('inner'=>'Landing', 'path'=>'./index.php'));
  define('NAV_HOME', array('inner'=>'Home', 'path'=>'./home.php'));
  define('NAV_TEAMS', array('inner'=>'Teams', 'path'=>'./teams.php'));
  define('NAV_ACTION', array('inner'=>'Action', 'path'=>'./action.php'));
  define('NAV_MAP', array('inner'=>'Map', 'path'=>'./map.php'));
  define('NAV_SIGNUP', array('inner'=>'Signup', 'path'=>SOON));
  define('NAV_SCHEDULE', array('inner'=>'Schedule', 'path'=>SOON));

  echo '
    <header class="header header__navbar--styled">
    <!-- <h1 class="logo"><?php //echo LOGO; ?></h1> -->
    <h1 class="logo">
      <a class="logo__link" href='.LANDING['path'].'>
        <img src="assets/img/provided/logos/soccerball.gif" alt="LOGO" class="header__logo--styled">
      </a>
    </h1>
    <!-- <img src="assets/img/provided/logos/smLogo.gif" alt="LOGO"></img> -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle" />
    <nav>
      <!-- <ul class="flex"> -->
      <ul>
        <li><a href='.NAV_HOME['path'].'>'.NAV_HOME['inner'].'</a></li>
        <li><a href='.NAV_TEAMS['path'].'>'.NAV_TEAMS['inner'].'</a></li>
        <li><a href='.NAV_ACTION['path'].'>'.NAV_ACTION['inner'].'</a></li>
        <li><a href='.NAV_MAP['path'].'>'.NAV_MAP['inner'].'</a></li>
        <li><a href='.NAV_SIGNUP['path'].'>'.NAV_SIGNUP['inner'].'</a></li>
        <li><a href='.NAV_SCHEDULE['path'].'>'.NAV_SCHEDULE['inner'].'</a></li>
      </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </header>
';
?>
