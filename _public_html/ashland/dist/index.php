<?php $greeting = 'Hello World -> PHP'; ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- STYLESHEET(S) -->
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./temp.css">

    <!-- SCRIPT(S) -->
    <script src="./js/main.js" defer></script>

    <title>Ashland</title>
</head>
<body>
    <main>
        <p id="test">
            <?php echo $greeting; ?>
        </p>        
    </main>
</body>
</html>