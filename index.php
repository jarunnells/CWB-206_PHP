<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
  define('TITLE', '<h2>ROOT Landing Page -> index.php</h2>');
  define('NAV_PUBLIC_HTML', './_public_html/');
  define('NAV_BOOK_APPS', './book_apps/');
  define('NAV_EX_SOLUTIONS', './ex_solutions/');
  define('NAV_EX_STARTS', './ex_starts/');
  define('NAV_TEST', './test/');
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    html {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-size: 100%;
    }
    body {
      --clr-white: rgba(245, 245, 245, 1);
      --clr-cornflower: rgba(100, 149, 237, 1);
      --clr-lt-grn: rgba(144, 238, 144, 1);
      --clr-royal: rgba(65, 105, 225, 1);
      --clr-indian: rgba(205, 92, 92, 1);
      --clr-dodger: rgba(30, 144, 255, 1);
      --clr-coral: rgba(255, 127, 80, 0.7);
      
      background: var(--clr-cornflower);
    }
    h2 {
      color: var(--clr-white);
      font-family: monospace;
      font-size: 1.5rem;
    }
    /* hr { color: var(--clr-white); } */
    a {
      color: var(--clr-white);
      text-decoration: none;
      font-family: monospace;
      letter-spacing: 0.5rem;
    }
    section {
      height: max-content;
      width: max-content;
      background: var(--clr-coral);
      padding: 1rem 3rem;
      text-align: center;
      font-size: 1.5rem;
      border-radius: 20px;
    }
    a:hover { color: var(--clr-lt-grn); }
    .flex {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      align-content: center;
    }
  </style>
  <title>CWB-206-R11 | J.A. Runnells</title>
</head>

<body class="flex">
  <?php echo TITLE; ?>
  <!-- <hr /> -->
  <section id="nav_root" class="flex">
    <p><a href=<?php echo NAV_PUBLIC_HTML; ?> target="_self" title='Go To -> ./public_html/'>_public_html/</a></p>
    <p><a href=<?php echo NAV_BOOK_APPS; ?> target="_self" title='Go To -> ./book_apps/'>book_apps/</a></p>
    <p><a href=<?php echo NAV_EX_SOLUTIONS; ?> target="_self" title='Go To -> ./ex_solutions/'>ex_solutions/</a></p>
    <p><a href=<?php echo NAV_EX_STARTS; ?> target="_self" title='Go To -> ./ex_starts/'>ex_starts/</a></p>
    <p><a href=<?php echo NAV_TEST; ?> target="_self" title='Go To -> ./test/'>test/</a></p>
  </section>
</body>

</html>