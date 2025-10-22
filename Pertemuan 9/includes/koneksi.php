<?php

// 1. Definisikan parameter koneksi
$db_host = "localhost";        // Nama host database
$db_user = "root";             // Username database (default XAMPP)
$db_pass = "";                 // Password database (default XAMPP kosong)
$db_name = "db_diary";         // Nama database yang kita buat

// 2. Buat koneksi menggunakan mysqli_connect
$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// 3. Cek koneksi
// Jika koneksi gagal, hentikan skrip dan tampilkan pesan error
if (!$koneksi) {
    die("KONEKSI GAGAL: " . mysqli_connect_error());
}

?>