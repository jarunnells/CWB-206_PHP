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

  function calc_total($adult_tix, $youth_tix): float {
    return ($adult_tix > 0 && $adult_tix != '' ? TICKET_COST['adult']*$adult_tix : 0.0)
      + ($youth_tix > 0 && $youth_tix != '' ? TICKET_COST['youth']*$youth_tix : 0.0);
  }

  function format_currency(float $total): string {
    return '$ '.number_format($total, 2);
  }

  function get_date(): string {
    date_default_timezone_set('America/Denver');
    return date("Y-m-d @ h:ia");
  }
