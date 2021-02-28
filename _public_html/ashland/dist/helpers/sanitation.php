<?php
  /**************************************************************************
   *   DEVELOPER:  J.A. Runnells
   *      COURSE: CIS-206-R11
   *      BRANCH: main
   *        FILE: sanitation.php -> input data sanitization
   ***************************************************************************/

  /**
   * Sanitizes input<br/> -> trim($string)<br/> -> stripslashes($string)<br/> -> htmlspecialchars($string)
   * @param string $input - Value to sanitize
   * @return string Sanitized input
   */
  function sanitize_input(string $input): string { return htmlspecialchars(stripslashes(trim($input))); }

//  function sanitize_input($data) {
//
//    $data = trim($data);
//    $data = stripslashes($data);
//    $data = htmlspecialchars($data);
//
//    return $data;
//  }

?>
