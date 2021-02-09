<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: player_output.php -> Team Players

    [ x ] COMPLETE?
-->
<?php include('../helpers/sanitation.php');
  // VARS
  $NAV_LINK = '../basics.php';
  $BACK = '<< BACK >>';
  $TITLE = 'Player List';
  $LOGO = '../../ashland/dist/assets/img/provided/logos/soccerball.gif';
?>
<!DOCTYPE html>
<html lang="en-US">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/custom.css" />
    <title>Team Players | player_output.php</title>
  </head>

  <body>
  <main class="container">
    <section id="holder" class="section__styled">
      <div class="logo totheleft"><img src="<?php echo $LOGO; ?>" alt="AVSL Logo"></div>
      <h3 id="form_title" class="players"><?php echo $TITLE ?></h3>
      <hr class="title" />
      <table id="table_output" class="players">
        <tbody>
          <?php foreach ($players as $player): $phone=substr($player, -14); ?>
            <tr>
              <td><?php echo sanitize_input(chop($player, $phone)); ?></td>
              <td><?php echo sanitize_input($phone); ?></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <hr class="title" />
      <a href="<?php echo $NAV_LINK ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo $BACK; ?></a>
    </section>
  </main>
  </body>

</html>
