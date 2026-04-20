<?php
include '../config/connection.php';

// GET PRODUCT DATA
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $stmt = $conn->prepare("SELECT * FROM products WHERE id=?");
  $stmt->execute([$id]);
  $product = $stmt->fetch(PDO::FETCH_ASSOC);
}

// UPDATE PRODUCT
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['description'];

  // image update (optional)
  if (!empty($_FILES['image']['name'])) {

    $image = time() . "_" . $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../img/" . $image);

  } else {
    $image = $_POST['old_image'];
  }

  $stmt = $conn->prepare("UPDATE products SET name=?, price=?, image=?, description=? WHERE id=?");
  $stmt->execute([$name, $price, $image, $desc, $id]);

  header("Location: products.php");
  exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Product</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: #0d0d0d;
      color: white;
    }

    .card {
      background: #111;
      border: 1px solid #0ff;
      box-shadow: 0 0 15px #0ff;
      border-radius: 15px;
    }

    .neon-text {
      color: #0ff;
      text-shadow: 0 0 10px #0ff;
    }

    .btn-neon {
      background: #0ff;
      color: black;
      border-radius: 20px;
      font-weight: bold;
    }

    .btn-neon:hover {
      background: #00cccc;
    }

    .preview-img {
      width: 120px;
      border-radius: 10px;
      border: 1px solid #0ff;
      margin-bottom: 10px;
    }
  </style>
</head>

<body class="p-4">

<div class="container">
  <h2 class="neon-text mb-4"> Edit Product</h2>

  <div class="card p-4 col-md-6 mx-auto">

    <form method="POST" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?= $product['id'] ?>">
      <input type="hidden" name="old_image" value="<?= $product['image'] ?>">

      <!-- Image Preview -->
      <img src="/gamingsetup/img/<?= $product['image'] ?>" class="preview-img">

      <input type="file" name="image" class="form-control mb-3">

      <input type="text" name="name" value="<?= $product['name'] ?>" class="form-control mb-3" required>

      <input type="number" name="price" value="<?= $product['price'] ?>" class="form-control mb-3" required>

      <textarea name="description" class="form-control mb-3"><?= $product['description'] ?></textarea>

      <button class="btn btn-neon w-100">Update Product</button>
      <a href="products.php" class="btn btn-secondary w-100 mt-2">Back</a>

    </form>

  </div>
</div>

</body>
</html>