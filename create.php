<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: ../backend/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>
    <a href="show.php">Lihat Data Produk</a>
    <a href="admin.php">Kembali ke Halaman</a><br>
    <form action="./backend/create.php" method="post" enctype="multipart/form-data">
        <input type="text" name="name" placeholder="Input Nama Produk" required>
        <input type="number" name="price" placeholder="Input Harga Produk" required>
        <input type="file" name="image" required>
        <input type="submit" value="Simpan" name="submit">
    </form>
</body>
</html>
