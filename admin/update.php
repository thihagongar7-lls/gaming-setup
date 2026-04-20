<?php
include "../config/connection.php";

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->execute([$id]);
$order = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['update'])){
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE orders SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);

    header("Location: orders.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Order</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: radial-gradient(circle, #0d0d0d, #000);
            color: white;
            font-family: Orbitron, sans-serif;
        }

        .box {
            max-width: 500px;
            margin: 100px auto;
            padding: 30px;
            background: rgba(255,255,255,0.05);
            border: 1px solid cyan;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,255,255,0.2);
        }

        h2 {
            text-align: center;
            color: cyan;
            margin-bottom: 20px;
            text-shadow: 0 0 10px cyan;
        }

        .form-control, .form-select {
            background: #111;
            border: 1px solid cyan;
            color: white;
        }

        .btn-neon {
            background: cyan;
            color: black;
            font-weight: bold;
            width: 100%;
            margin-top: 15px;
        }

        .btn-neon:hover {
            box-shadow: 0 0 20px cyan;
        }
    </style>
</head>

<body>

<div class="box">

    <h2> Update Order</h2>

    <p><b>Product:</b> <?= $order['product_name'] ?></p>
    <p><b>Total:</b> <?= $order['total'] ?> MMK</p>

    <form method="POST">

        <label>Status</label>
        <select name="status" class="form-select mt-2">

            <option value="pending" 
                <?= $order['status'] == 'pending' ? 'selected' : '' ?>>
                Pending
            </option>

            <option value="processing"
                <?= $order['status'] == 'processing' ? 'selected' : '' ?>>
                Processing
            </option>

            <option value="completed"
                <?= $order['status'] == 'completed' ? 'selected' : '' ?>>
                Completed
            </option>

            <option value="cancelled"
                <?= $order['status'] == 'cancelled' ? 'selected' : '' ?>>
                Cancelled
            </option>

        </select>

        <button name="update" class="btn btn-neon">
            Update Now
        </button>

    </form>

</div>

</body>
</html>