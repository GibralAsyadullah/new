<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header('Location: ../backend/login.php');
    exit;
}

require './config/db.php'; // Hubungkan ke database
$products = mysqli_query($db_connect, "SELECT * FROM products");
$no = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h1>Data Produk</h1>
    <a href="create.php">Tambah Produk</a>
    <a href="admin.php">Kembali ke Halaman</a><br>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Gambar Produk</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($products)) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row['name']; ?></td>
                <td><?= $row['price']; ?></td>
                <td><a href="<?= $row['image']; ?>" target="_blank">Unduh</a></td>
                <td>
                    <a href="edit.php?id=<?= $row['id']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id']; ?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
