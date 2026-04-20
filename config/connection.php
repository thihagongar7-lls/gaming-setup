<?php
$conn = new PDO("mysql:host=localhost;dbname=gamingsetup_db", "root", "");
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

// Helper functions
// function isLoggedIn() {
//   return isset($_SESSION['user']);
// }

// function isAdmin() {
//   return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
// }
// ?>