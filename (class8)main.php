<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Authentication (Before login page) -->
    <?php
        session_start();
        $_SESSION['get_user_name'] = "zaryab";
    ?>
    <h1>Class 8 (authentication)</h1>
</body>
</html>