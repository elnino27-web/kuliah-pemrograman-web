<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Akun Diary</title>
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>

    <div class="container-form">
        <h1>Aplikasi Diary Digital</h1>
        <p>Buat akun baru untuk mulai menulis catatan harian Anda.</p>
        <hr>
        <h2>Buat Akun Baru</h2>
        
        <form action="proses_register.php" method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>
            
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
            
            <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

            <button type="submit">Daftar</button>
        </form>
    </div>

</body>
</html>