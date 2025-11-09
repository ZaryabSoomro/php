<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("conn.php");
        if(isset($_GET['id'])){
            $id=$_GET['id'];

            $delete="DELETE FROM info WHERE id = $id";
            $final=mysqli_query($conn,$delete);
            header("Location:class9.php");
        }
    ?>
</body>
</html>