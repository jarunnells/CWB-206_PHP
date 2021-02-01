<?php declare(strict_types=1);?>
<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: home.php
-->
<?php
  // include './helpers/photos.php';
  // define('HOME_GREETING', 'Hello World -> home.php');
  define('HOME_GREETING', 'Ashland Valley Soccer');
  define('LOGO', 'Logo');

  // date("m");
  function getMonth(string $month_format_str = "m") : string {
    $months = array('JAN','FEB','MAR','APR','MAY','JUN','JUL','AUG','SEP','OCT','NOV','DEC');    
    return $months[ltrim(date($month_format_str),'0') - 1];
  }

?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./css/styles.min.css">
  <link rel="stylesheet" href="../src/css/ashland_base.css">

  <!-- SCRIPT(S) -->
  <script src="./js/app.js" defer></script>

  <title>Ashland Valley Soccer League</title>  
</head>

<body class="body dark">
  
  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <p class="p__greet"><?php echo HOME_GREETING; ?></p>

    <section class="container mvp">
      <div class="container__img-lg flex">
        <img class="img-lg current" src="./assets/img/provided/solo/john.jpg" alt="john.jpg">
        <article class="container__img-info">
          <h1><?php echo getMonth(); echo ' '; echo date("Y");?> MVPs</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi animi sunt dicta ipsa vitae rem delectus accusantium. Minima, quam assumenda ipsam repudiandae reprehenderit saepe perspiciatis quidem unde veniam consectetur fugit?</p>
        </article>
      </div>
      <div class="container__imgs flex">
        <img class="img_thumb" src="./assets/img/provided/solo/john.jpg" alt="john.jpg">
        <img class="img_thumb" src="./assets/img/provided/solo/amith.jpg" alt="amith.jpg">
        <img class="img_thumb" src="./assets/img/provided/solo/krst.jpg" alt="krst.jpg">
      </div>
    </section>
  </main>

  <?php include 'footer.php'; ?>

</body>
</html>