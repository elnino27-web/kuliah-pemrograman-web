<?php
// 1. Mulai session
// Session digunakan untuk menyimpan status login pengguna.
session_start();

// 2. Sertakan file koneksi.php
include 'includes/koneksi.php';

// 3. Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// 4. Buat query untuk mencari pengguna berdasarkan username (gunakan prepared statement)
$query = "SELECT id, username, password FROM users WHERE username = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// 5. Cek apakah pengguna ditemukan
if (mysqli_num_rows($result) == 1) {
    // Jika user ada, ambil datanya
    $user = mysqli_fetch_assoc($result);

    // 6. Verifikasi password yang di-hash
    // password_verify() akan membandingkan password dari form dengan hash di database.
    if (password_verify($password, $user['password'])) {
        // Jika password cocok, LOGIN BERHASIL

        // Simpan informasi pengguna ke dalam session
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['is_login'] = true;

        // Arahkan (redirect) ke halaman utama aplikasi
        header("Location: index.php");
        exit();

    } else {
        // Jika password tidak cocok, LOGIN GAGAL
        header("Location: login.php?status=gagal");
        exit();
    }
} else {
    // Jika username tidak ditemukan, LOGIN GAGAL
    header("Location: login.php?status=gagal");
    exit();
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);

?>