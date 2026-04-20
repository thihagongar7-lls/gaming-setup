<?php
include '../config/connection.php'; // must contain session_start()

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $email = trim($_POST['email']);
  $password = $_POST['password'];

  // Get user
  $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
  $stmt->execute([$email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);

  // Check user + verify password (HASH)
  if ($user && password_verify($password, $user['password'])) {

    // Save session
    $_SESSION['user'] = $user;

    // Check role
    $role = strtolower(trim($user['role']));

    if (strtolower(trim($user['role'])) === 'admin') {
      header("Location: /gamingsetup/admin/dashboard.php");
      exit();
    } else {
      header("Location: /gamingsetup/index.php");
      exit();
    }

  } else {
    // Login failed
    header("Location: /gamingsetup/auth/signin.php?error=1");
    exit();
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #0d0d0d;
      color: white;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      background: #111;
      padding: 40px;
      border-radius: 15px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 0 20px #0ff;
    }

    .neon-text {
      color: #0ff;
      text-shadow: 0 0 10px #0ff;
    }

    .form-control {
      background: #222;
      border: none;
      color: white;
    }

    .form-control:focus {
      box-shadow: 0 0 10px #0ff;
      background: #222;
      color: white;
    }

    .btn-neon {
      background: #0ff;
      color: black;
      border-radius: 25px;
    }

    .btn-neon:hover {
      background: #00cccc;
    }

    a {
      color: #0ff;
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="login-box text-center">
  <h2 class="neon-text mb-4">🎮 Login</h2>

  <?php if ($error): ?>
    <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>

  <form method="POST">

    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

    <button class="btn btn-neon w-100 mb-3">Login</button>

    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

  </form>
</div>

</body>
</html>

