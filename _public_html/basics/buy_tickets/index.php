<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php -> Buy Tickets

    [ - ] COMPLETE?
-->
<?php
  include('../helpers/sanitation.php');
  include_once('../helpers/buy_tix/calculate_total.php');

  // VARS
  include_once('../helpers/buy_tix/vars.php');
  $tickets_purchased = [
    'adult'=>$_POST['adult'] ?? '',
    'youth'=>$_POST['youth'] ?? ''
  ];
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/custom.css" />
    <script src="../js/reset_num_fields.js" defer></script>
    <title>Buy Tickets | index.php</title>
  </head>
  <body>
    <main class="container">
      <section id="holder" class="section__styled">
        <div class="logo totheleft"><img src="<?php echo LOGO; ?>" alt="AVSL Logo"></div>
        <h3 id="form_title" class="tickets"><?php echo TITLE['index'] ?></h3>
        <hr class="title" />
<!--        --><?php //if (!empty($error)) { echo '<div class="error">'.sanitize_input($error).'</div>'; } ?>
        <?php if (!empty($error)): ?>
          <div class="error"><?php echo sanitize_input($error) ?></div>
        <?php endif; ?>
        <form action="./display_charges.php" method="post" id="form_process">
          <table class="players">
            <!-- <caption>Player Info</caption> -->
            <tbody>
              <tr>
                <td class="tix"><label for="adult_qty">Adult Ticket <span class="price">(<?php echo format_currency(TICKET_COST['adult']); ?>)</span>:</label></td>
                <td><input type="number" name="adult" id="adult_qty" min="<?php echo QTY['MIN']['adult'] ?>" max="<?php echo QTY['MAX'] ?>" step="1" maxlength="2" value="<?php echo sanitize_input($tickets_purchased['adult']); ?>"></td>
<!--                <td><input type="text" name="adult" id="adult_qty" value="--><?php //echo sanitize_input($tickets_purchased['adult']); ?><!--"></td>-->
              </tr>
              <tr>
                <td class="tix"><label for="youth_qty">Youth Ticket <span class="price">(<?php echo format_currency(TICKET_COST['youth']); ?>)</span>:</label></td>
                <td><input type="number" name="youth" id="youth_qty" min="<?php echo QTY['MIN']['youth'] ?>" max="<?php echo QTY['MAX'] ?>" step="1" maxlength="2" value="<?php echo sanitize_input($tickets_purchased['youth']); ?>"></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <td colspan="2">
                  <button type="submit" class="btn btn-submit styled-buy-tix">ORDER<br/>TICKETS</button>
                  <button type="submit" class="btn btn-clr styled-buy-tix">CLEAR<br/> FORM</button>
                </td>
              </tr>
            </tfoot>
          </table>
        </form>
        <div class="limit-msg">
          <pre>LIMIT 5 TICKETS PER ORDER</pre>
        </div>
        <hr class="title" />
        <a href="<?php echo NAV_LINK['index'] ?>" class="nav_link" target="_self" title="Go To -> basics.php..."><?php echo BACK['index']; ?></a>
      </section>
    </main>
  </body>
</html>
