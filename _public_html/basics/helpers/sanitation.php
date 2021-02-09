<?php declare(strict_types=1);
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: sanitation.php -> Form Includes :: input data sanitization
   ***************************************************************************/
  /**
   * @param $input - Value to sanitize
   * @return string Sanitized input -> trim($string) -> stripslashes($string) -> htmlspecialchars($string)
   */
  function sanitize_input($input): string { return htmlspecialchars(stripslashes(trim($input))); }
