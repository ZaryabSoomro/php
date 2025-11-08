<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Authentication (after login) -->
    <?php
        session_start();
    ?>
    <h1>Class 8 (authentication)</h1>
    <h2>WELCOME <?php echo $_SESSION['get_user_name'] ?></h2>
</body>
</html>