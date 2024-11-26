<?php
session_start();
if ($_SESSION['role'] != 'user') {
    header('Location: index.php'); // Jika bukan user, redirect ke halaman login
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil User</title>
</head>
<body>
    <h1>Selamat datang, <?= $_SESSION['name']; ?>!</h1>
    <p>Email: <?= $_SESSION['email']; ?></p>
    <a href="logout.php">Logout</a>
</body>
</html>
