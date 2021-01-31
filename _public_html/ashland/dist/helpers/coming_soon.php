<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: coming_soon.php
-->
<?php
  define('HOME', array('path'=>'../home.php', 'inner'=>'-> GO BACK <-'));
  $coming_soon = '<h2>...Coming Soon...</h2>';
  $go_home = '<a href="'.HOME['path'].'">'.HOME['inner'].'</a>';
?>
<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coming Soon...</title>
  <style>
    body { 
      background-image: url(../assets/img/background_ball.jpg); 
      background-size: cover; 
      font: normal small-caps 1.5em/1em 'JetBrains Mono', monospace;
      text-align: center;
      color: whitesmoke;
    }
    a { font-size: 1em; text-decoration: none; color: inherit; }
    a:hover { letter-spacing: 0.15em; color: #436b51; }
  </style>
</head>

<body>
  <?php echo $coming_soon; ?>
  <?php echo $go_home; ?>
</body>

</html>