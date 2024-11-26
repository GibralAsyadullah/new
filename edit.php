<?php
require './config/db.php';

// Mendapatkan ID produk dari parameter URL
$id = $_GET['id'];

// Ambil data produk berdasarkan ID
$product = mysqli_query($db_connect, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($product);

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name']; // Mendapatkan nama gambar yang di-upload

    // Jika ada gambar baru yang di-upload
    if ($image != '') {
        // Tentukan folder untuk menyimpan gambar
        $target = "../upload/" . basename($image);

        // Pindahkan file gambar ke folder tujuan
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            // Update produk dengan gambar baru
            mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price', image='$target' WHERE id=$id");
        } else {
            echo "Gagal mengupload gambar.";
            exit();
        }
    } else {
        // Jika tidak ada gambar baru, hanya update nama dan harga
        mysqli_query($db_connect, "UPDATE products SET name='$name', price='$price' WHERE id=$id");
    }

    // Redirect ke halaman data produk
    header("Location: show.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form method="post" enctype="multipart/form-data"> <!-- Form dengan enctype untuk file upload -->
        <label>Nama Produk:</label>
        <input type="text" name="name" value="<?= $row['name']; ?>" required><br><br>

        <label>Harga:</label>
        <input type="text" name="price" value="<?= $row['price']; ?>" required><br><br>

        <label>Gambar (Kosongkan jika tidak ada perubahan):</label>
        <input type="file" name="image"><br><br>

        <button type="submit" name="update">Update</button>
    </form>
    <a href="show.php">Kembali ke Data Produk</a>
</body>
</html>
