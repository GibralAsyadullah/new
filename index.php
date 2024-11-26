<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login atau Register</title>
</head>
<body>
    <h1>Login atau Register</h1>

    <!-- Pilihan untuk memilih Login atau Register -->
    <p>Apakah Anda sudah memiliki akun?</p>
    
    <!-- Tombol Pilihan -->
    <button id="loginBtn">Login</button>
    <button id="registerBtn">Register</button>

    <hr>

    <!-- Form Login -->
    <div id="loginForm" style="display:none;">
        <h2>Login</h2>
        <form action="./backend/login.php" method="post">
            <input type="email" name="email" placeholder="Masukkan email Anda" required>
            <input type="password" name="password" placeholder="Masukkan password Anda" required>
            <input type="submit" value="Login" name="submit">
        </form>
    </div>

    <!-- Form Register -->
    <div id="registerForm" style="display:none;">
        <h2>Register</h2>
        <form action="./backend/register.php" method="post">
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Masukkan email Anda" required>
            <input type="password" name="password" placeholder="Masukkan password Anda" required>
            <input type="password" name="confirm_password" placeholder="Konfirmasi password" required>
            <input type="submit" value="Register" name="submit">
        </form>
    </div>

    <script>
        // Menyembunyikan semua form saat halaman pertama kali dimuat
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('registerForm').style.display = 'none';

        // Menampilkan form login jika tombol Login ditekan
        document.getElementById('loginBtn').onclick = function() {
            document.getElementById('loginForm').style.display = 'block';
            document.getElementById('registerForm').style.display = 'none';
        }

        // Menampilkan form register jika tombol Register ditekan
        document.getElementById('registerBtn').onclick = function() {
            document.getElementById('registerForm').style.display = 'block';
            document.getElementById('loginForm').style.display = 'none';
        }
    </script>
</body>
</html>
