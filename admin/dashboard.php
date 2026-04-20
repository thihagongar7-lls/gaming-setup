<?php
include '../config/connection.php'; // already has session_start()

// Check login
if (!isset($_SESSION['user'])) {
  header("Location: /gamingsetup/auth/signin.php");
  exit();
}

// Check admin
if ($_SESSION['user']['role'] !== 'admin') {
  header("Location: /gamingsetup/index.php");
  exit();
}

// total users
$users = $conn->query("SELECT COUNT(*) FROM users")->fetchColumn();

// total products
$products = $conn->query("SELECT COUNT(*) FROM products")->fetchColumn();

// total orders
$orders = $conn->query("SELECT COUNT(*) FROM orders")->fetchColumn();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <!-- CSS style -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Bootstrap + Google Font (optional gaming font) -->
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .text-neon {
      color: #0ff;
      text-shadow: 0 0 10px #0ff;
    }

    .btn-neon {
      background: #0ff;
      color: black;
      border-radius: 25px;
      transition: 0.3s;
    }

    .btn-neon:hover {
      background: #00cccc;
      box-shadow: 0 0 10px #0ff;
    }

    .gaming-card {
      background: #111;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.3);
      transition: 0.3s;
    }

    .gaming-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 25px #0ff;
    }

    .neon-number {
      font-size: 40px;
      color: #0ff;
      text-shadow: 0 0 15px #0ff;
    }
  </style>
</head>

<body style="background:#0d0d0d; color:white; font-family: 'Segoe UI', sans-serif;">

  <div class="container py-5">
    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="text-neon"> Admin Dashboard</h2>
      <div>
        <span class="me-3">Welcome, <b><?= $_SESSION['user']['name']; ?></b></span>
        <a href="/gamingsetup/auth/logout.php" class="btn btn-neon">Logout</a>
      </div>
    </div>

    <!-- STATS CARDS -->
    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="card gaming-card text-center p-4">
          <h1 class="neon-number"><?= $users ?></h1>
          <p>Total Users</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card gaming-card text-center p-4">
          <h1 class="neon-number"><?= $products ?></h1>
          <p>Total Products</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card gaming-card text-center p-4">
          <h1 class="neon-number"><?= $orders ?></h1>
          <p>Total Orders</p>
        </div>
      </div>

    </div>

    <!-- ACTION CARDS -->
    <div class="row g-4">
      <div class="col-md-6">
        <div class="card gaming-card p-4">
          <h4 class="text-neon"> Product Management</h4>
          <p>Manage your gaming products easily.</p>
          <a href="/gamingsetup/admin/products.php" class="btn btn-neon w-100">Manage Products</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card gaming-card p-4">
          <h4 class="text-neon"> Orders</h4>
          <p>View and track all customer orders.</p>
          <a href="/gamingsetup/admin/orders.php" class="btn btn-neon w-100">View Orders</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>