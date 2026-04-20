<?php
include "config/connection.php";

$stmt = $conn->query("SELECT * FROM orders ORDER BY id DESC");
$orders = $stmt->fetchAll();
?>

<h2>My Orders</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Product</th>
    <th>Total</th>
    <th>Status</th>
</tr>

<?php foreach($orders as $o): ?>
<tr>
    <td><?= $o['id'] ?></td>
    <td><?= $o['product_name'] ?></td>
    <td><?= $o['total'] ?></td>
    <td><?= $o['status'] ?></td>
</tr>
<?php endforeach; ?>
</table>