<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: footer.php ©
-->
<?php 
  $title = 'Ashland Valley Soccer League';
  $year = date("Y");
  $copyright = '<span class="copy">&copy;</span>';
  echo '
  <footer class="footer footer--styled">
    <h1 class="footer__h1--styled">
      '.$copyright.' '.$title.' '.$year.' '.$copyright.'
    </h1>
  </footer>
';
?>