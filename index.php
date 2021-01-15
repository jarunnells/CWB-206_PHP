<!-- 
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php
    define('TITLE', '<h2>ROOT Landing Page -> index.php</h2>');
    define('NAV_PUBLIC_HTML', './_public_html/');
    define('NAV_BOOK_APPS', './book_apps/');
    define('NAV_EX_SOLUTIONS', './ex_solutions/');
    define('NAV_EX_STARTS', './ex_starts/');
    define('NAV_TEST', './test/');
    define('NAV_INHERITANCE_EXAMPLE', './inheritance_example.php');
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CWB-206-R11 | J.A. Runnells</title>
    </head>
    <body>
        <?php echo TITLE; ?>
        <hr />
        <section id='nav_root'>
            <p><a href=<?php echo NAV_PUBLIC_HTML; ?> target="_self" title='Go To -> ./public_html/'>_public_html/</a></p>
            <p><a href=<?php echo NAV_BOOK_APPS; ?> target="_self" title='Go To -> ./book_apps/'>book_apps/</a></p>
            <p><a href=<?php echo NAV_EX_SOLUTIONS; ?> target="_self" title='Go To -> ./ex_solutions/'>ex_solutions/</a></p>
            <p><a href=<?php echo NAV_EX_STARTS; ?> target="_self" title='Go To -> ./ex_starts/'>ex_starts/</a></p>
            <p><a href=<?php echo NAV_TEST; ?> target="_self" title='Go To -> ./test/'>test/</a></p>
            <p><a href=<?php echo NAV_INHERITANCE_EXAMPLE; ?> target="_self" title='Go To -> inheritance_example.php...'>inheritance_example.php</a></p>
        </section>
    </body>
</html>