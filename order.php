<?php
include "config/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $product = $_POST['product_name'];
    $price = $_POST['price'];

    $qty = 1;
    $total = $price * $qty;

    // simple demo customer (later login system add)
    $name = "Guest";
    $phone = "000000";

    $stmt = $conn->prepare("INSERT INTO orders 
    (product_name, price, qty, total, customer_name, phone) 
    VALUES (?, ?, ?, ?, ?, ?)");

    $stmt->execute([$product, $price, $qty, $total, $name, $phone]);
}

$stmt = $conn->query("SELECT * FROM orders ORDER BY id ASC");
$orders = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap + Google Font (optional gaming font) -->
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: #0d0d0d;
            color: white;
        }

        /* Neon Card */
        .card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(0, 255, 255, 0.2);
            box-shadow: 0 0 15px rgba(0, 255, 255, 0.15);
            border-radius: 15px;
            padding: 20px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 0 25px cyan;
        }

        /* Neon Button */
        .btn-neon {
            background: cyan;
            color: black;
            padding: 10px 20px;
            border-radius: 30px;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-neon:hover {
            box-shadow: 0 0 20px cyan;
            transform: scale(1.05);
        }

        /* Table */
        table {
            width: 100%;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 10px;
            overflow: hidden;
        }

        th,
        td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        th {
            background: rgba(0, 255, 255, 0.1);
            color: cyan;
        }

        .btn-danger:hover {
            box-shadow: 0 0 15px red;
            transform: scale(1.05);
        }
    </style>

</head>

<body>
    <h2 style="text-align:center; color:cyan;"> My Orders</h2>
    <div class="card">
        <table>
            <tr>
                <th>ID</th>
                <th><i class="bi bi-controller"></i> Product</th>
                <th><i class="bi bi-cash"></i> Total</th>
                <th><i class="bi bi-lightning"></i> Status</th>
                <th>Action</th>
            </tr>

            <?php if (!empty($orders)): ?>
                <?php foreach ($orders as $o): ?>
                    <tr>
                        <td><?= $o['id'] ?></td>
                        <td><?= $o['product_name'] ?></td>
                        <td><?= $o['total'] ?> MMK</td>
                        <td><?= $o['status'] ?></td>
                        <td>
                            <?php if ($o['status'] != "cancelled"): ?>
                                <a href="cancel_order.php?id=<?= $o['id'] ?>"
                                    class="btn btn-sm btn-danger">
                                     Cancel
                                </a>
                                <a href="cancel_order.php?id=<?= $o['id'] ?>"
                                    class="btn btn-sm btn-success">
                                    Buy
                                </a>
                            <?php else: ?>
                                <span style="color:gray;">Cancelled</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4">No orders yet 😢</td>
                </tr>
            <?php endif; ?>
        </table>
        <a href="/gamingsetup/index.php" class="btn btn-secondary">Back</a>
    </div>
</body>

</html>