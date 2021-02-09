<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: display_charges.php -> Buy Tickets

    [ - ] COMPLETE?
-->
<?php //include('../helpers/sanitation.php');
  // VARS
  $NAV_LINK = './index.php';
  $BACK = '<< FORM >>';
  $TITLE = 'Order Summary';
  $LOGO = '../../ashland/dist/assets/img/provided/logos/soccerball.gif';

  define('TICKET_COST', ['adult'=>15.0, 'youth'=>7.5]);
  define('QTY_MAX', ['adult'=>5, 'youth'=>5, 'total'=>5]);
  $tickets_purchased = ['adult'=>$_POST['adult'] ?? '', 'youth'=>$_POST['youth'] ?? ''];

  $error = 'OOPS!';
  $test = [TICKET_COST['adult'], TICKET_COST['youth'], $tickets_purchased['adult'], $tickets_purchased['youth'], $error];
  echo '<pre>';
  var_dump($test);
//  var_dump($_GET);
//  var_dump($_POST);
  echo '</pre>';

  if ($error != '') {
    include('./index.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/custom.css" />
    <title>Buy Tickets | display_charges.php</title>
  </head>
  <body>
    <main class="container">
      <section id="holder" class="section__styled">
        <div class="logo totheleft"><img src="<?php echo $LOGO; ?>" alt="AVSL Logo"></div>
        <h3 id="form_title" class="tickets"><?php echo $TITLE ?></h3>
        <hr class="title" />

        <hr class="title" />
        <a href="<?php echo $NAV_LINK ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo $BACK; ?></a>
      </section>
    </main>
  </body>
</html>
