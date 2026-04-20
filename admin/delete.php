<?php
include "../config/connection.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: orders.php");
    exit;
}
?>