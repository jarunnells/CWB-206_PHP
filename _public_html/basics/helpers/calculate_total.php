<?php declare(strict_types=1);
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: sanitation.php -> Form Includes :: input data sanitization
   ***************************************************************************/

  define(
    'TICKET_COST', [
      'adult'=>15.0,
      'youth'=>7.5
    ]
  );

  function calc_total(array $tickets_purchased): array {
    $adult = $tickets_purchased['adult'] > 0 && $tickets_purchased['adult'] !== ''
      ? TICKET_COST['adult']*$tickets_purchased['adult']
      : 0.0;
    $youth = $tickets_purchased['youth'] > 0 && $tickets_purchased['youth'] !== ''
      ? TICKET_COST['youth']*$tickets_purchased['youth']
      : 0.0;
    return ['adult'=>$adult, 'youth'=>$youth];
  }

  function format_currency(float $total): string {
    return '$ '.number_format($total, 2);
  }

  function get_date(): string {
    date_default_timezone_set('America/Denver');
    return date("Y-m-d @ h:ia");
  }
