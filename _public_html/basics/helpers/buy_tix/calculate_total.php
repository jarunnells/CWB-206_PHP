<?php declare(strict_types=1);
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: calculate_total.php -> Buy Tickets :: calc purchase total
   ***************************************************************************/

  /**
   * Calculate purchase total by category
   * @param array $tix array of qty of tickets purchased by category
   * @return array calculated totals -> [adult_total, youth_total]
   */
  function calc_total(array $tix): array {
    $adult = $tix['adult'] > 0 && $tix['adult'] !== ''
      ? TICKET_COST['adult']*$tix['adult']
      : 0.0;
    $youth = $tix['youth'] > 0 && $tix['youth'] !== ''
      ? TICKET_COST['youth']*$tix['youth']
      : 0.0;
    return ['adult'=>$adult, 'youth'=>$youth];
  }

  /**
   * Format Currency with two-point precision<br/>'$ 0.00'|'$00.00'
   * @param float $total currency value to format for output
   * @return string Formatted currency value
   */
  function format_currency(float $total): string {
    return $total < 10 ? '$ '.number_format($total, 2) : '$'.number_format($total, 2);
  }

  /**
   * Get Current Date & Time => 'America/Denver'
   * @return string date & time formated: 'Y-m-d @ h:ia'
   */
  function get_date(): string {
    date_default_timezone_set('America/Denver');
    return date('Y-m-d @ h:ia');
  }

  /**
   * Validate Purchase QTY
   * @param array $tix array of qty of tickets purchased by category
   * @return bool boolean flag -> is_valid vs !is_valid
   */
  function valid_qty(array $tix): bool {
    if ($tix['adult']) {
      if (!$tix['youth'] || $tix['youth'] === 0) {
        if ($tix['adult'] <= QTY['MAX']) { return true; }
      } elseif ($tix['youth'] || $tix['youth'] > 0) {
        if ($tix['adult'] + $tix['youth'] <= QTY['MAX']) { return true; }
      }
    }
    return false;
  }

  /**
   * Validate Positive Purchase QTY
   * @param array $tix array of qty of tickets purchased by category
   * @return bool boolean flag -> is_valid vs !is_valid
   */
  function valid_positive(array $tix): bool {
    if ($tix['adult'] && !$tix['youth']) {
      if ($tix['adult'] >= 0) { return true; }
    } elseif ($tix['adult'] && $tix['youth']) {
      if ($tix['adult'] >= 0 && $tix['youth'] >= 0) { return true; }
    } elseif (!$tix['adult'] && $tix['youth']) {
      if ($tix['youth'] >= 0) { return true; }
    }
    return false;
  }
