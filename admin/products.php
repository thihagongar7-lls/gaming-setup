<?php
include '../config/connection.php';

// Protect admin
if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
  header("Location: /gamingsetup/index.php");
  exit();
}

// DELETE PRODUCT
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $stmt = $conn->prepare("DELETE FROM products WHERE id=?");
  $stmt->execute([$id]);
  header("Location: products.php");
  exit();
}

// FETCH PRODUCTS
$stmt = $conn->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
  <title>Products</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #0d0d0d;
      color: white;
    }

    .neon {
      color: #0ff;
      text-shadow: 0 0 10px #0ff;
    }

    .btn-neon {
      background: #0ff;
      color: black;
    }
  </style>
</head>

<body class="p-4">

  <h2 class="neon mb-4"> Manage Products</h2>

  <a href="add_product.php" class="btn btn-neon mb-3">+ Add Product</a>
  <a href="/gamingsetup/admin/dashboard.php" class="btn btn-secondary mb-3">Back</a>

  <table class="table table-dark table-striped">
    <thead>
      <tr class="neon">
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($products as $row): ?>
        <tr>
          <td><?= $row['id'] ?></td>
          <td>
            <img src="img/<?= $row['image'] ?>" width="60">
          </td>
          <td><?= $row['name'] ?></td>
          <td>$<?= $row['price'] ?></td>
          <td>
            <a href="edit_product.php?id=<?= $row['id'] ?>"
              class="btn btn-info btn-sm">
              Edit
            </a>
            <a href="products.php?delete=<?= $row['id'] ?>"
              class="btn btn-danger btn-sm"
              onclick="return confirm('Delete this product?')">
              Delete
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>