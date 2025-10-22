<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login ke Diary</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container-form">
        <h1>Aplikasi Diary Digital</h1>
        <p>Selamat Datang Kembali! Silakan masuk untuk melanjutkan.</p>
        <hr>
        <h2>Login</h2>
        
        <?php
        // Menampilkan pesan sukses setelah registrasi
        if(isset($_GET['status']) && $_GET['status'] == 'registrasi_sukses'){
            echo '<p class="pesan-sukses">Pendaftaran berhasil! Silakan login.</p>';
        }
        // Menampilkan pesan error jika login gagal
        if(isset($_GET['status']) && $_GET['status'] == 'gagal'){
            echo '<p class="pesan-gagal">Username atau password salah!</p>';
        }
        ?>

<form action="proses_login.php" method="POST">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" required>
    
    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>
    
    <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>

            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>