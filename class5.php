<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Premium Dashboard</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

    .card {
      background: white;
      padding: 60px;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0,0,0,0.1);
      text-align: center;
      animation: fadeIn 0.7s ease;
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
    <div class="card">
      <h1>Welcome!</h1>
      <p style="margin-top:10px; font-size:15px; color:#555;">Use the sidebar to Post or Fetch your Database Data.</p>
    </div>
    
  </div>

</body>
</html>