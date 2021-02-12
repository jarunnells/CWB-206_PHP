<?php declare(strict_types=1);
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: sanitation.php -> input data sanitization
   ***************************************************************************/

  /**
   * Sanitizes input<br/> -> trim($string)<br/> -> stripslashes($string)<br/> -> htmlspecialchars($string)
   * @param $input - Value to sanitize
   * @return string Sanitized input
   */
  function sanitize_input($input): string { return htmlspecialchars(stripslashes(trim($input))); }
