<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: sanitation.php -> Form Includes :: input data sanitization
-->
<?php
  /// returns: trim() -> stripslashes() -> htmlspecialchars()
  function sanitize_input($data) { return htmlspecialchars(stripslashes(trim($data))); }
?>
