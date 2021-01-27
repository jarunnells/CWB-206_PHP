<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: home.php
-->
<?php
  // include './helpers/photos.php';
  // include './helpers/files.php';
  define('HOME_GREETING', 'Hello World -> home.php');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLESHEET(S) -->
  <!-- <link rel="stylesheet" href="./css/styles.min.css"> -->

  <!-- SCRIPT(S) -->
  <!-- <script src="./js/main.js" defer></script> -->

  <style>
    /* GENERIC RESETS */
    /* * { margin:0;padding:0;box-sizing:border-box; }
    *::before,*::after { box-sizing:border-box; }
    html>* { border:0;font-size:100%;font:inherit;vertical-align:baseline;line-height:1.15; }
    a { text-decoration: none;color: inherit; }
    h1,h2,h3,h4,h5,h6 { font-size:100%;font-weight:normal; }
    ul { list-style: none; }
    body { overflow: hidden; }
    img,video { height: auto;max-width: 100%; }
    .clearfix::before,.clearfix::after { content: " ";display: table; }
    .clearfix::after { clear: both; } */
    /* END GENERIC RESETS */
    .body.dark {
      background: rgba(34,34,34,1);
      color: whitesmoke;
    }

    /* BEGIN */
    @import url("https://fonts.googleapis.com/css?family=Work+Sans:300,600");

      :root {
        --background: rgba(0, 214, 170, 0.85);
        --background: rgba(20, 110, 200, 0.75);
        --clr-font: rgba(240, 240, 240, 1);
      }

      *,
      *::before,
      *::after {
        box-sizing: border-box;
      }

      body {
        margin: 0;
        background: #222;
        font-family: "Work Sans", sans-serif;
        font-weight: 400;
      }

      .content {
        width: 100vw;
        height: 100vh;
        background-image: url(//unsplash.it/1000/1000);
        background-color: #333;
        background-blend-mode: multiply;
        background-size: cover;
        display: grid;
        place-items: center;
        color: var(--clr-font);
      }

      /* navigation styles start here */

      header {
        background: var(--background);
        text-align: center;
        position: fixed;
        z-index: 999;
        width: 100%;
      }

      /* changed this from the tutorial video to allow it to gain focus, making it tabbable */
      .nav-toggle {
        position: absolute !important;
        top: -9999px !important;
        left: -9999px !important;
      }

      .nav-toggle:focus ~ .nav-toggle-label {
        outline: 3px solid rgba(lightblue, 0.75);
      }

      .nav-toggle-label {
        position: absolute;
        top: 0;
        left: 0;
        margin-left: 1em;
        height: 100%;
        display: flex;
        align-items: center;
      }

      .nav-toggle-label span,
      .nav-toggle-label span::before,
      .nav-toggle-label span::after {
        display: block;
        background: white;
        height: 2px;
        width: 2em;
        border-radius: 2px;
        position: relative;
      }

      .nav-toggle-label span::before,
      .nav-toggle-label span::after {
        content: "";
        position: absolute;
      }

      .nav-toggle-label span::before {
        bottom: 7px;
      }

      .nav-toggle-label span::after {
        top: 7px;
      }

      nav {
        position: absolute;
        text-align: left;
        top: 100%;
        left: 0;
        background: var(--background);
        width: 100%;
        transform: scale(1, 0);
        transform-origin: top;
        transition: transform 400ms ease-in-out;
      }

      nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      nav li {
        margin-bottom: 1em;
        margin-left: 1em;
      }

      nav a {
        color: white;
        text-decoration: none;
        font-size: 1.2rem;
        text-transform: uppercase;
        opacity: 0;
        transition: opacity 150ms ease-in-out;
      }

      nav a:hover {
        color: #000;
      }

      .nav-toggle:checked ~ nav {
        transform: scale(1, 1);
      }

      .nav-toggle:checked ~ nav a {
        opacity: 1;
        transition: opacity 250ms ease-in-out 250ms;
      }

      @media screen and (min-width: 800px) {
        .nav-toggle-label {
          display: none;
        }

        header {
          display: grid;
          grid-template-columns: 1fr auto minmax(600px, 3fr) 1fr;
        }

        .logo {
          grid-column: 2 / 3;
        }

        nav {
          /* all: unset; this causes issues with Edge, since it's unsupported */

          /* the following lines are not from my video, but add Edge support */
          position: relative;
          text-align: left;
          transition: none;
          transform: scale(1, 1);
          background: none;
          top: initial;
          left: initial;
          /* end Edge support stuff */

          grid-column: 3 / 4;
          display: flex;
          justify-content: flex-end;
          align-items: center;
        }

        nav ul {
          display: flex;
        }

        nav li {
          margin-left: 3em;
          margin-bottom: 0;
        }

        nav a {
          opacity: 1;
          position: relative;
        }

        nav a::before {
          content: "";
          display: block;
          height: 5px;
          background: black;
          position: absolute;
          top: -0.75em;
          left: 0;
          right: 0;
          transform: scale(0, 1);
          transition: transform ease-in-out 250ms;
        }

        nav a:hover::before {
          transform: scale(1, 1);
        }
      }
    /* END */
  </style>

  <title>Ashland Valley Soccer League</title>
</head>

<body class="body dark">
  <header>
    <h1 class="logo">LOGO</h1>
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

  <main class="content">
    <p class="p__greet"><?php echo HOME_GREETING; ?></p>
  </main>
</body>
</html>