<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: ../index.php'); // Jika bukan admin, redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
</head>
<body>
    <h1>Selamat datang, Admin <?= $_SESSION['name']; ?>!</h1>
    <a href="create.php">Lihat Produk</a><br>
    <a href="backend/logout.php">Logout</a>
</body>
</html>
