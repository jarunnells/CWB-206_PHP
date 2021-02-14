<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: display_charges.php -> Buy Tickets

    [ x ] COMPLETE?
-->
<?php
  include_once('../helpers/buy_tix/calculate_total.php');
  include_once('../helpers/buy_tix/vars.php');
  // VARS
  $error = '';
  $tickets_purchased = [
    'adult'=>$_POST['adult'] ?? '',
    'youth'=>$_POST['youth'] ?? ''
  ];
  $tickets_purchased_f = [
    'adult'=>filter_var($tickets_purchased['adult'], FILTER_VALIDATE_INT),
    'youth'=>filter_var($tickets_purchased['youth'], FILTER_VALIDATE_INT)
  ];

  // TODO: improve...ing...
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($tickets_purchased['adult'])) {
      $error = 'Minimum One Adult Ticket!';
      if (!empty($tickets_purchased['youth'])) {
        $error = 'Youth Tickets Require Adult Accompaniment!';
      }
    } elseif (
      !empty($tickets_purchased['adult']) && !is_numeric($tickets_purchased['adult']) ||
      !empty($tickets_purchased['youth']) && !is_numeric($tickets_purchased['youth'])) {
      $error = 'Invalid Purchase Quantity!';
    } elseif (
      !empty($tickets_purchased['adult']) && $tickets_purchased_f['adult'] === false ||
      !empty($tickets_purchased['youth']) && $tickets_purchased_f['youth'] === false) {
      $error = 'Whole Numbers Only! ';
    } elseif (!valid_positive($tickets_purchased)) {
      $error = 'Negative Quantities Not Allowed!';
    } elseif (!valid_qty($tickets_purchased)) {
      $error = 'Maximum Ticket Quantity (5) Exceeded!';
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
        <div id="order_summary">
          <table>
            <thead>
            <tr>
              <td colspan="4" class="purchase_date"><?php echo get_date(); ?></td>
            </tr>
            </thead>
            <tbody>
            <tr id="cart_header">
              <th class="left">Ticket Type</th>
              <th class="right">Cost</th>
              <th class="right">QTY</th>
              <th class="right">Total</th>
            </tr>
            <tr class="cart_body adult-total">
              <td class="left">ADULT Ticket</td>
              <td class="right"><?php echo format_currency(TICKET_COST['adult']); ?></td>
              <td class="right"><?php echo $tickets_purchased['adult']; ?></td>
              <td class="right"><?php echo format_currency($totals['adult']); ?></td>
            </tr>
            <?php if ($tickets_purchased['youth'] > 0): ?>
              <tr class="cart_body youth-total">
                <td class="left">YOUTH Ticket</td>
                <td class="right"><?php echo format_currency(TICKET_COST['youth']); ?></td>
                <td class="right"><?php echo $tickets_purchased['youth']; ?></td>
                <td class="right"><?php echo format_currency($totals['youth']); ?></td>
              </tr>
            <?php endif; ?>
            <tr id="cart_footer">
              <td class="total" colspan="3">ORDER TOTAL:</td>
              <td class="total"><?php echo format_currency($totals['adult']+$totals['youth']); ?></td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
              <td colspan="4" class="thank-you">Thank You!</td>
            </tr>
            </tfoot>
          </table>
        </div>
        <hr class="title" />
        <a href="<?php echo NAV_LINK['charges'] ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo BACK['charges']; ?></a>
      </section>
    </main>
  </body>
</html>
