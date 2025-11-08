<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- logout page that trigger logout -->
    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>
</body>
</html>