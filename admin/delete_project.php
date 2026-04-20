<?php
include './config/connection.php';

if (!isset($_SESSION['user']) || $_SESSION['user']['role'] !== 'admin') {
  header("Location: ../index.php");
  exit();
}
?>
<?php
include 'auth_check.php';

$id = $_GET['id'];

$stmt = $conn->prepare("DELETE FROM products WHERE id=?");
$stmt->execute([$id]);

header("Location: products.php");
?>