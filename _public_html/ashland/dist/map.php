<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: map.php
-->
<?php
  include './helpers/photos.php';
  define('MAP_GREETING', 'Hello World -> map.php');
  define('LOGO', 'Logo');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- STYLESHEET(S) -->
  <link rel="stylesheet" href="./css/styles.min.css">
  <link rel="stylesheet" href="../src/css/ashland_base.css">

  <!-- TEMP EMBEDDED STYLING -->
  <style>
    /* FIXME: adjust .content spacing (h/w) to media query */
    .content {
      overflow: scroll;
    }
  </style>

  <!-- SCRIPT(S) -->
  <script src="./js/map.js" defer></script>

  <title>Map</title>
</head>
<body class="body dark">

  <?php include 'navbar.php'; ?>

  <main class="content flex flex--center flex--col">
    <p class="p__greet"><?php echo MAP_GREETING; ?></p>

    <section class='maps flex flex--center'>
      <div class="maps__map map-1 current">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6076.108919193754!2d-104.77429318686323!3d40.40764431910019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876ea4028c00f3a3%3A0x5d070e83b3e16530!2sAims%20Community%20College!5e0!3m2!1sen!2sus!4v1612147430377!5m2!1sen!2sus" width="600" height="450" title="Map One" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="maps__map map-2">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2320.1888337743344!2d-104.78223759389167!3d40.08258701924549!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c13debe024c0b%3A0x2ac7f9f37c5f5b3e!2sAims%20Community%20College!5e0!3m2!1sen!2sus!4v1612147521426!5m2!1sen!2sus" width="600" height="450" title="Map Two" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>  
      <div class="maps__map map-3">  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6105.389845851795!2d-104.82221343759117!3d40.082215260677835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c118aca097991%3A0x1d38629de5c6ba80!2sPearson%20Park!5e0!3m2!1sen!2sus!4v1612147622759!5m2!1sen!2sus" width="600" height="450" title="Map Three" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>  
      <div class="maps__map map-4">  
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4652.027107667047!2d-104.75986887274948!3d40.40165088205714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876ea6ae762e6f65%3A0xad2d603c691af266!2sMonfort%20Soccer%20Fields!5e0!3m2!1sen!2sus!4v1612147739261!5m2!1sen!2sus" width="600" height="450" title="Map Four" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </section>
    <div class="btn-maps-nav">
      <button id="btn-map-1" class="btn-maps-nav__link map">MAP 1</button>
      <button id="btn-map-2" class="btn-maps-nav__link map">MAP 2</button>
      <button id="btn-map-3" class="btn-maps-nav__link map">MAP 3</button>
      <button id="btn-map-4" class="btn-maps-nav__link map">MAP 4</button>
    </div>

    <!-- <section class='maps flex flex--center flex--row'>
      <div class="flex flex--center flex--col">Map Image #01
        <img src=<?php //echo $images_map[0]?> alt="complexmap.jpg">
      </div>

      <div class="flex--col">Map Image #02
        <img src=<?php //echo $images_map[1]?> alt="map1.gif">
      </div>

      <div class="flex--col">Map Image #03
        <img src=<?php //echo $images_map[2]?> alt="map2.gif">
      </div>
    </section>
    <section class='maps flex flex--center flex--row'>
      <div class="flex flex--center flex--col">Map Image #04
        <img src=<?php //echo $images_map[3]?> alt="map3.gif">
      </div>

      <div class="fflex--col">Map Image #05
        <img src=<?php //echo $images_map[4]?> alt="map4.gif">
      </div>

      <div class="flex--col">Map Image #06
        <img src=<?php //echo $images_map[5]?> alt="map5.gif">
      </div>
    </section> -->

  </main>

  <?php include 'footer.php'; ?>

</body>
</html>