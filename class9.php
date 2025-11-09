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
        $select = "SELECT * FROM info";
        $data = mysqli_query($conn,$select);

        echo "<table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Correction</th>
        </tr>";

        while($row = mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['password']}</td>
                    <td>
                        <a href='delete.php?id={$row['id']}'>Delete</a>
                    </td>
            </tr>";}
        echo "</table>";
      ?>
</body>
</html>