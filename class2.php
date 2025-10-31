<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!--simple display post method  -->
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $name."<br>";
        echo $email."<br>";
        echo $password;
        echo " 
        <form method='post'>
            <input type='text' placeholder='Name' name='name'><br><br>
            <input type='email' placeholder='Email' name='email'><br><br>
            <input type='password' placeholder='Password' name='password'><br><br>
            <input type='submit' name='btn'><br><br>
        </form>";
    ?>
</body>
</html>