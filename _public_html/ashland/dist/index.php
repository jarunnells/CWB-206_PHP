<!--
    DEVELOPER: J.A. Runnells
       COURSE: CIS-206-R11
       BRANCH: main
         FILE: index.php
-->
<?php $greeting = 'Hello World -> PHP'; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLESHEET(S) -->
    <link rel="stylesheet" href="./css/styles.min.css">

    <!-- SCRIPT(S) -->
    <script src="./js/main.js" defer></script>

    <title>Ashland</title>
</head>
<body class="dark">
    <main>
        <p class="test">
            <?php echo $greeting; ?>
        </p>        
    </main>
</body>
</html>
