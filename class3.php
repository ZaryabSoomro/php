<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post Data</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #eef2f7;
      display: flex;
    }

    .sidebar {
      width: 260px;
      background: #1f2937;
      min-height: 100vh;
      color: white;
      padding: 30px 20px;
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .logo {
      font-size: 24px;
      font-weight: 600;
      text-align: center;
      margin-bottom: 20px;
    }

    .menu a {
      display: block;
      padding: 12px;
      text-decoration: none;
      background: #374151;
      color: white;
      border-radius: 6px;
      transition: 0.3s;
      margin-bottom: 10px;
    }

    .menu a:hover {
      background: #10b981;
    }

    .content {
      flex: 1;
      padding: 50px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .form-box {
      background: white;
      padding: 50px 60px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      width: 450px;
      animation: fadeIn 0.7s ease;
    }

    h2 {
      margin: 0 0 20px;
      text-align: center;
      font-weight: 600;
    }

    input {
      width: 100%;
      padding: 12px;
      border-radius: 6px;
      border: 1px solid #ccc;
      margin-bottom: 18px;
      font-size: 14px;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #10b981;
      border: none;
      border-radius: 6px;
      color: white;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    button:hover {
      background: #0e9f75;
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);} 
      to {opacity: 1; transform: translateY(0);} 
    }
  </style>
</head>
<body>

  <div class="sidebar">
    <div class="logo">My Dashboard</div>

    <div class="menu">
      <a href="class5.php">🏠 Dashboard</a>
      <a href="class3.php">➕ Post Data</a>
      <a href="class4.php">📄 Fetch Data</a>
    </div>
  </div>

  <div class="content">
    <div class="form-box">
      <h2>Add New Record</h2>

      <?php
        include("conn.php");
        if(isset($_POST['btn'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $insert = "INSERT into info (name,email,password) VALUES ('$name','$email','$password')";
            $data = mysqli_query($conn,$insert);

            if($data){
              echo "<p style='color:green;text-align:center;'>✔ Data Inserted Successfully!</p>";
            }else{
              echo "<p style='color:red;text-align:center;'>✖ Something Went Wrong!</p>";
            }
        }
      ?>

      <form method="post">
        <input type="text" placeholder="Enter Name" name="name" required>
        <input type="email" placeholder="Enter Email" name="email" required>
        <input type="password" placeholder="Enter Password" name="password" required>
        <button type="submit" name="btn">Submit</button>
      </form>
    </div>
  </div>

</body>
</html>
