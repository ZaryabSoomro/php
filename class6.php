<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
<div class="container-fluid">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <h1 class="text-center">ADMIN PANEL</h1>
            <form method="post" class="text-center">
                <input type="search" name="search" placeholder="Search Here" class="form-control">
                <input type="submit" name="search_btn" value="Search" class="btn btn-outline-primary">
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
    <?php
        include("conn.php");
        
        if(isset($_POST['search_btn'])){
            $search = $_POST['search'];
            $select = "SELECT * from info where name = '$search'";
            $final = mysqli_query($conn,$select);
    ?>
    <div class="container mt-5">
    <table class="table table-bordered text-center">
        <tr class="table-dark">
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Correction</th>
        </tr>
        <?php 
        while($row=mysqli_fetch_assoc($final)){
        ?>
        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['password']?></td>
            <td>
                <a href="#" class="btn btn-success">EDIT</a>
                <a href="#" class="btn btn-danger">DELETE</a>
            </td>
        </tr>
        <?php }?>
    </table>
    </div>
    <?php
        }
    ?>
</body>
</html>