<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fetch Data</title>
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
    }

    .table-box {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      animation: fadeIn 0.7s ease;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background: #10b981;
      color: white;
    }

    tr:hover {
      background: #f5f5f5;
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
    <div class="table-box">
      <h2 style="margin-bottom: 20px;">All Records</h2>

      <?php
        include("conn.php");
        $select = "SELECT * FROM info";
        $data = mysqli_query($conn,$select);

        echo "<table>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        </tr>";

        while($row = mysqli_fetch_assoc($data)){
            echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['password']}</td>
            </tr>";}
        echo "</table>";
      ?>

    </div>
  </div>

</body>
</html>
