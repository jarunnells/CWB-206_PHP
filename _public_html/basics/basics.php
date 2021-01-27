<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: basics.php
-->
<?php
    define('TITLE', 'Basics Landing Page<br /><h3> -> basics.php <- </h3>');
    define('SUBTITLE', 'Getting Down With The Basics...');
    define('NAV_RANDOM', './random/random.php');
    define('NAV_FORM', './form_proj/form_process.php');
    define('NAV_LANDING', '../index.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href=""> -->
  <style>
    /* GENERIC RESETS */
    * { margin:0;padding:0;box-sizing:border-box; }
    *::before,*::after { box-sizing:border-box; }
    html>* { border:0;font-size:100%;font:inherit;vertical-align:baseline;line-height:1.15; }
    a { text-decoration: none;color: inherit; }
    h1,h2,h3,h4,h5,h6 { font-size:100%;font-weight:normal; }
    ul { list-style: none; }
    body { overflow: hidden; }
    img,video { height: auto;max-width: 100%; }
    .clearfix::before,.clearfix::after { content: " ";display: table; }
    .clearfix::after { clear: both; }
    /* END GENERIC RESETS */
    body.dark {
      background: rgba(34, 34, 34, 1);
      color: whitesmoke;
    }

    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap");

    :root {
      --primary-bg-color: rgba(20, 110, 200, 0.75);
      --overlay-bg-color: rgba(24, 39, 51, 0.85);
      --primary-font-color: #FFF;
      --hamburger-color: #FFF;
      --hamburger-line-width: 2px;
      --menu-speed: 0.75s;
      --overlay-radius: 6rem;
      /* 50% */
      --overlay-width: 80%;
      /* 200vw */
      --overlay-height: 50%;
      /* 200vw */
      --overlay-transition-speed: 0.5s;
      --overlay-text-spacing: 10px;
      --h1-text-spacing: 10px;
    }

    body {
      font-family: "Roboto", sans-serif;
      line-height: 1.4;
      overflow: hidden;
    }

    .container {
      max-width: 960px;
      margin: auto;
      padding: 0 3rem;
    }

    .showcase {
      background-color: var(--primary-bg-color);
      color: var(--primary-font-color);
      height: 100vh;
      position: relative;
    }

    .showcase:before {
      content: '';
      background: url('../assets/img/code_1920x1278.jpg') no-repeat center center/cover;
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    .showcase .showcase-inner {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100%;
    }

    .showcase h1 {
      font-size: 4rem;
      letter-spacing: var(--h1-text-spacing);
      line-height: 1.25;
    }

    .showcase h3 {
      font-size: 2.5rem;
      letter-spacing: var(--h1-text-spacing);
      line-height: 1.15;
      margin-bottom: 1em;
    }

    .showcase h1::first-letter {
      font-size: 150%;
    }

    .showcase p {
      font-size: 1.5rem;
      line-height: 1.25em;
      padding: 15px;
      border-width: 6px;
      border-color: var(--primary-font-color);
      border-radius: 8px;
      border-style: solid none solid none;
    }

    .btn {
      display: inline-block;
      border: none;
      background-color: var(--primary-bg-color);
      font-size: 3rem;
      color: var(--primary-font-color);
      padding: 0.75rem 1.5rem;
      margin-top: 1rem;
      transition: opacity 1s ease;
    }

    .btn:hover {
      opacity: 0.5;
    }

    .menu-wrap {
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1;
    }

    .menu-wrap .toggler {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 2;
      cursor: pointer;
      width: 50px;
      height: 50px;
      opacity: 0;
    }

    .menu-wrap .hamburger {
      position: absolute;
      top: 0;
      left: 0;
      z-index: 1;
      width: 60px;
      height: 60px;
      padding: 1rem;
      background: var(--primary-bg-color);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* HAMBURGER */
    .menu-wrap .hamburger>div {
      position: relative;
      width: 100%;
      height: var(--hamburger-line-width);
      background-color: var(--hamburger-color);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all 0.4s ease;
    }

    .menu-wrap .hamburger>div::before,
    .menu-wrap .hamburger>div::after {
      content: '';
      position: absolute;
      z-index: 1;
      top: -10px;
      width: 100%;
      height: var(--hamburger-line-width);
      background-color: inherit;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .menu-wrap .hamburger>div:after {
      top: 10px;
    }

    .menu-wrap .toggler:checked+.hamburger>div {
      transform: rotate(135deg);
    }

    .menu-wrap .toggler:checked+.hamburger>div::before,
    .menu-wrap .toggler:checked+.hamburger>div::after {
      top: 0;
      transform: rotate(90deg);
    }

    .menu-wrap .toggler:checked:hover+.hamburger>div {
      transform: rotate(225deg);
    }

    .menu-wrap .toggler:checked~.menu {
      visibility: visible;
    }

    .menu-wrap .toggler:checked~.menu>div {
      transform: scale(1);
      transition-duration: var(--menu-speed);
    }

    .menu-wrap .toggler:checked~.menu>div>div {
      opacity: 1;
      transition: opacity 0.4s ease;
    }

    .menu-wrap .menu {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      visibility: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .menu-wrap .menu>div {
      background: var(--overlay-bg-color);
      border-radius: var(--overlay-radius);
      width: var(--overlay-width);
      height: var(--overlay-height);
      display: flex;
      flex: none;
      align-items: center;
      justify-content: center;
      transform: scale(0);
      transition: all var(--overlay-transition-speed) ease;
    }

    .menu-wrap .menu>div>div {
      text-align: center;
      max-width: 90vw;
      max-height: 100vh;
      opacity: 0;
      transition: opacity 0.4s ease;
    }

    .menu-wrap .menu>div>div>ul>li {
      color: var(--primary-font-color);
      font-size: 1.5rem;
      padding: 1rem;
    }

    .menu-wrap .menu>div>div>ul>li>a {
      letter-spacing: var(--overlay-text-spacing);
      color: inherit;
      transition: color 0.4s ease;
    }
  </style>
  <title>Basics Landing Page</title>
</head>

<body class="body dark">
<nav class="menu-wrap">
    <input type="checkbox" class="toggler" />
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href=<?php echo NAV_RANDOM; ?> target="_self" title='Go To -> random.php...'>Random Numbers</a></li>
            <li><a href=<?php echo NAV_FORM; ?> target="_self" title='Go To -> form_process.php...'>Form Project</a></li>
            <li><a href="#">Form Includes</a></li>
            <li><a href="#">Soon...</a></li>
            <li><a href="#">Soon...</a></li>
            <li><a href=<?php echo NAV_LANDING; ?> target="_self" title='Go To -> index.php...'>BACK -> Main Landing Page</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main class="showcase">
    <div class="container showcase-inner">
      <h1><?php echo TITLE; ?></h1>
      <p><?php echo SUBTITLE; ?></p>
    </div>
  </main>
</body>

</html>