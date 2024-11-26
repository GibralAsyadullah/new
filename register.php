<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Register</h2>
    <form action="./backend/register.php" method="post">
        <input type="text" name="name" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Masukkan email Anda" required>
        <input type="password" name="password" placeholder="Masukkan password Anda" required>
        <input type="password" name="confirm_password" placeholder="Konfirmasi password" required>
        <input type="submit" value="Register" name="submit">
    </form>
</body>
</html>