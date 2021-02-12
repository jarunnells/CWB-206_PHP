<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: display_charges.php -> Buy Tickets

    [ - ] COMPLETE?
-->
<?php
  include_once('../helpers/buy_tix/calculate_total.php');

  // VARS
  include_once('../helpers/buy_tix/vars.php');
  $error = '';
  $tickets_purchased = [
    'adult'=>filter_input(INPUT_POST,'adult', FILTER_VALIDATE_INT),
    'youth'=>filter_input(INPUT_POST,'youth', FILTER_VALIDATE_INT)
  ];

  // TODO: implement $tickets_purchased.forEach() w/in if conditions
  // FIXME: elseif() -> alpha
  // [1] empty(adult) -> [ x ]
  // [2] !is_numeric(adult) -> [ - ]
  // [3] adult <= 0
  // [4] is_int(adult)
  // [5] !empty(youth) && !is_numeric(youth)
  // [6] !empty(youth) && !is_int(youth)
  // [7] !sum(adult, youth) > 5
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // if (empty($tickets_purchased['adult']|$tickets_purchased['youth'])) { $error = 'Minimum One Adult Ticket!'; }
    if (empty($tickets_purchased['adult']) && empty($tickets_purchased['youth'])) {
      $error = 'Minimum One Adult Ticket!';
    } elseif (empty($tickets_purchased['adult']) && !empty($tickets_purchased['youth'])) {
      $error = 'Youth Tickets Require Adult Accompaniment!';
    } elseif (
        $tickets_purchased['adult'] === false && !empty($tickets_purchased['adult']) ||
        $tickets_purchased['youth'] === false && !empty($tickets_purchased['youth'])) {
      $error = 'Whole Numbers Only! ';
    } elseif ($tickets_purchased['adult'] + $tickets_purchased['youth'] > QTY['TOTAL']) {
      $error = 'Maximum Ticket Quantity (5) Exceeded!';
//    } elseif ($tickets_purchased['adult']|$tickets_purchased['youth'] < 0) { $error = 'Negative Quantities Not Allowed!';
    } elseif ($tickets_purchased['adult'] < 0 || $tickets_purchased['youth'] < 0) {
      $error = 'Negative Quantities Not Allowed!';
    } elseif (
        !is_numeric($tickets_purchased['adult']) && !empty($tickets_purchased['adult']) ||
        !is_numeric($tickets_purchased['youth']) && !empty($tickets_purchased['youth'])) {
      $error = 'Invalid Purchase Quantity!';
    } else {
      $error = '';
    }
  }

  // DEBUGGING -------------------------------------
//  echo '<pre>';
//    var_dump($_GET);
//    var_dump($_POST);
//    var_dump($tickets_purchased);
//    var_dump(calc_total($tickets_purchased));
//  echo '</pre>';
  // DEBUGGING -------------------------------------

  if ($error != '') {
    include('./index.php');
    exit();
  }

  $totals = calc_total($tickets_purchased);
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
      <section id="holder" class="section__styled order-summary">
        <div class="logo totheleft"><img src="<?php echo LOGO; ?>" alt="AVSL Logo"></div>
        <h3 id="form_title" class="tickets"><?php echo TITLE['charges'] ?></h3>
        <hr class="title" />
        <div>
          <pre class="purchase_date"><?php echo get_date(); ?></pre>
          <pre class="adult-total">Adult (<?php echo $tickets_purchased['adult']; ?>x<?php echo format_currency(TICKET_COST['adult']); ?>): <?php echo format_currency($totals['adult']); ?></pre>
          <?php if ($tickets_purchased['youth'] > 0): ?>
            <pre class="youth-total">Youth (<?php echo $tickets_purchased['youth']; ?>x<?php echo format_currency(TICKET_COST['youth']); ?>): <?php echo format_currency($totals['youth']); ?></pre>
          <?php endif; ?>
          <pre class="total">ORDER TOTAL: <?php echo format_currency($totals['adult']+$totals['youth']); ?></pre>
          <pre class="thank-you">Thank You!</pre>
        </div>
        <hr class="title" />
        <a href="<?php echo NAV_LINK['charges'] ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo BACK['charges']; ?></a>
      </section>
    </main>
  </body>
</html>
