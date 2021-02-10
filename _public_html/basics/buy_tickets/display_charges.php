<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: display_charges.php -> Buy Tickets

    [ - ] COMPLETE?
-->
<?php include('../helpers/calculate_total.php');
  // VARS
  $NAV_LINK = './index.php';
  $BACK = '<< FORM >>';
  $TITLE = 'Order Summary';
  $LOGO = '../../ashland/dist/assets/img/provided/logos/soccerball.gif';

  define(
    'QTY_MAX', [
      'adult'=>5,
      'youth'=>5,
      'total'=>5
    ]
  );

//  $tickets_purchased = [
//    'adult'=>$_POST['adult'] ?? '',
//    'youth'=>$_POST['youth'] ?? ''
//  ];

  $error = '';
  $tickets_purchased = [
    'adult'=>filter_input(INPUT_POST,'adult', FILTER_VALIDATE_INT),
    'youth'=>filter_input(INPUT_POST,'youth', FILTER_VALIDATE_INT)
  ];

  // TODO: implement $tickets_purchased.forEach() w/in if conditions
  // FIXME: check !empty($tickets_purchased['...']) first
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($tickets_purchased['adult']) && !empty($tickets_purchased['youth'])) {
      $error = 'Youth Tickets Require Adult Accompaniment!';
    } elseif ($tickets_purchased['adult'] === false || $tickets_purchased['youth'] === false) {
      $error = 'Whole Numbers Only! ';
    } elseif ($tickets_purchased['adult'] + $tickets_purchased['youth'] > 5) {
      $error = 'Maximum Ticket Quantity Exceeded!';
    } elseif (!is_numeric($tickets_purchased['adult']) || !is_numeric($tickets_purchased['youth'])) {
      $error = 'Invalid Purchase Quantity';
    } else {
      $error = '';
    }
  }

//  $error = 'OOPS!';
//  $test = [
//    'adult_cost'=>TICKET_COST['adult'],
//    'youth_cost'=>TICKET_COST['youth'],
//    'adult_tix'=>$tickets_purchased['adult'],
//    'youth_tix'=>$tickets_purchased['youth'],
//    'error'=>$error
//  ];

  // DEBUGGING ---------------------------------------------------------------------
  echo '<pre>';
//    var_dump($test);
//    var_dump($_GET);
    var_dump($_POST);
    var_dump($tickets_purchased);
    var_dump(calc_total($tickets_purchased['adult'],$tickets_purchased['youth']));
  echo '</pre>';
  // DEBUGGING ---------------------------------------------------------------------

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
        <div>
          <pre><?php echo get_date(); ?></pre>
          <pre><?php echo format_currency(calc_total($tickets_purchased['adult'],$tickets_purchased['youth'])); ?></pre>
        </div>
        <hr class="title" />
        <a href="<?php echo $NAV_LINK ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo $BACK; ?></a>
      </section>
    </main>
  </body>
</html>
