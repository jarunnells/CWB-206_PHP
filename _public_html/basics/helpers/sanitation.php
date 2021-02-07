<?php declare(strict_types=1);
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: sanitation.php -> Form Includes :: input data sanitization
   ***************************************************************************/
  /**
   * @param $data
   * @return string // trim($string) -> stripslashes($string) -> htmlspecialchars($string)
   */
  function sanitize_input($data): string { return htmlspecialchars(stripslashes(trim($data))); }
?>
