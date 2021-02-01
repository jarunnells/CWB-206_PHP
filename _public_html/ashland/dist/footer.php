<?php 
///
///    DEVELOPER: J.A. Runnells
///       COURSE: CIS-206-R11
///       BRANCH: main
///         FILE: footer.php ©
///

  define('MAIN_LANDING', '../../index.php');
  $title = 'Ashland Valley Soccer League';
  $year = date("Y");
  $copyright = '<span class="copy">&copy;</span>';
  /// echo '
  /// <footer class="footer footer--styled">
  ///   <h1 class="footer__h1--styled">
  ///     '.$copyright.' '.$title.' '.$year.' '.$copyright.'
  ///   </h1>
  /// </footer>
  /// ';
  echo '
  <footer class="footer footer--styled">
    <h1 class="footer__h1--styled">
      '.$title.'
      <br />
      '.$copyright.' '.$year.' '.$copyright.'
    </h1>
  </footer>
  <div class="home_icon"><a class="anchor__main-landing" href="'.MAIN_LANDING.'">🏠</a><span>  </span><a href="'.SOON.'">🔐</a></div>
  ';
?>
