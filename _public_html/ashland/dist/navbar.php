<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: navbar.php
-->

<!-- TODO: extract vars -->
<?php echo '
    <header class="header header__navbar--styled">
    <!-- <h1 class="logo"><?php //echo LOGO; ?></h1> -->
    <h1 class="logo">
      <img src="assets/img/provided/logos/soccerball.gif" alt="LOGO" class="header__logo--styled"></img>
    </h1>
    <!-- <img src="assets/img/provided/logos/smLogo.gif" alt="LOGO"></img> -->
    <input type="checkbox" id="nav-toggle" class="nav-toggle" />
    <nav>
      <!-- <ul class="flex"> -->
      <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="teams.php">Teams</a></li>
        <li><a href="action.php">Action</a></li>
        <li><a href="map.php">Map</a></li>
      </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
      <span></span>
    </label>
  </header>
';
?>
