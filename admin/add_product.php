<?php
include '../config/connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];

    // image upload
    $image = time() . "_" . $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp, "img/" . $image);

    // insert DB
    $stmt = $conn->prepare("
    INSERT INTO products (name, price, image, description) 
    VALUES (:name, :price, :image, :desc)
");

$stmt->execute([
    ':name' => $name,
    ':price' => $price,
    ':image' => $image,
    ':desc' => $desc
]);
header("Location: products.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: radial-gradient(circle at top, #0d0d0d, #000);
      color: white;
      font-family: Orbitron, sans-serif;
    }

    .box {
      max-width: 600px;
      margin: 60px auto;
      padding: 30px;
      background: rgba(255,255,255,0.05);
      border: 1px solid cyan;
      border-radius: 15px;
      box-shadow: 0 0 25px rgba(0,255,255,0.2);
      backdrop-filter: blur(10px);
    }

    h2 {
      text-align: center;
      color: cyan;
      margin-bottom: 25px;
      text-shadow: 0 0 10px cyan;
    }

    .form-control {
      background: #111;
      border: 1px solid cyan;
      color: white;
    }

    .form-control:focus {
      box-shadow: 0 0 15px cyan;
      border-color: cyan;
      background: #111;
      color: white;
    }

    .btn-neon {
      background: linear-gradient(90deg, cyan, blue);
      border: none;
      color: black;
      font-weight: bold;
      padding: 10px;
      width: 100%;
      border-radius: 10px;
      transition: 0.3s;
    }

    .btn-neon:hover {
      box-shadow: 0 0 25px cyan;
      transform: scale(1.03);
    }

    .btn-back {
      width: 100%;
      margin-top: 10px;
    }

    label {
      color: cyan;
      font-weight: bold;
    }
  </style>
</head>

<body>

<div class="box">

  <h2> Add New Product</h2>

  <form method="POST" action="add_product.php" enctype="multipart/form-data">

    <label>Product Name</label>
    <input type="text" name="name" class="form-control mb-3" placeholder="Enter product name" required>

    <label>Price</label>
    <input type="number" name="price" class="form-control mb-3" placeholder="Enter price" required>

    <label>Image</label>
    <input type="file" name="image" class="form-control mb-3" required>

    <label>Description</label>
    <textarea name="description" class="form-control mb-3" placeholder="Write product details"></textarea>

    <button class="btn-neon"> Add Product</button>

    <a href="products.php" class="btn btn-secondary btn-back">
       Back
    </a>

  </form>

</div>

</body>
</html>