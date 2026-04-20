<?php
include "../config/connection.php";

$orders = $conn->query("SELECT * FROM orders ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Admin Orders</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #0d0d0d;
            color: white;
            font-family: Orbitron;
        }

        .card-box {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid cyan;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.2);
        }

        table {
            color: white;
        }

        th {
            color: cyan;
        }

        .btn-edit {
            background: cyan;
            color: black;
            padding: 5px 10px;
            border-radius: 8px;
            text-decoration: none;
        }

        .btn-delete {
            background: red;
            color: white;
            padding: 5px 10px;
            border-radius: 8px;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center text-info mb-4"> Admin Orders Panel</h2>

        <div class="card-box">
            <table class="table table-dark table-hover text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($orders as $o): ?>
                        <tr>
                            <td><?= $o['id'] ?></td>
                            <td><?= $o['product_name'] ?></td>
                            <td><?= $o['total'] ?> MMK</td>
                            <td>
                                <span class="badge bg-info">
                                    <?= $o['status'] ?>
                                </span>
                            </td>

                            <td>
                                <a class="btn-edit" href="update.php?id=<?= $o['id'] ?>">
                                    Edit
                                </a>

                                <a class="btn-delete"
                                    href="delete.php?id=<?= $o['id'] ?>"
                                    onclick="return confirm('Are you sure to delete this order?')">
                                     Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="/gamingsetup/admin/dashboard.php" class="btn btn-secondary">Back</a>
        </div>
    </div>

</body>

</html>