<?php
include '../config/connection.php';

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];

  // Validation
  if ($password !== $confirm) {
    $error = "Passwords do not match!";
  } else {

    // Check if email exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email=?");
    $stmt->execute([$email]);

    if ($stmt->rowCount() > 0) {
      $error = "Email already registered!";
    } else {

      $hashed = password_hash($password, PASSWORD_DEFAULT);

      $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
      $stmt->execute([$name, $email, $hashed]);

      // REDIRECT DIRECTLY
      header("Location: signin.php?success=1");
      exit();
  }
  if (isset($_GET['success'])) {
  echo "<div class='alert alert-success'>Account created! Please login.</div>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>

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

    .signup-box {
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

  <div class="signup-box text-center">
    <h2 class="neon-text mb-4">🎮 Sign Up</h2>

    <?php if ($error): ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <?php if ($success): ?>
      <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <form method="POST">

      <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>

      <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

      <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

      <input type="password" name="confirm" class="form-control mb-3" placeholder="Confirm Password" required>

      <button class="btn btn-neon w-100 mb-3">Create Account</button>

      <p>Already have an account? <a href="signin.php">Login</a></p>

    </form>
  </div>

</body>

</html>