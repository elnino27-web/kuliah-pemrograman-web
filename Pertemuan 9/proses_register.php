<?php

// 1. Sertakan file koneksi.php
// Ini akan menghubungkan file ini dengan database.
include 'includes/koneksi.php';

// 2. Ambil data dari formulir (method POST)
$username = $_POST['username'];
$password = $_POST['password'];

// 3. SANGAT PENTING: Enkripsi (hash) password
// Jangan pernah menyimpan password dalam bentuk teks biasa di database!
// Kita gunakan password_hash() untuk mengubahnya menjadi kode acak yang aman.
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// 4. Buat query SQL untuk menyimpan data menggunakan prepared statements
// Menggunakan '?' sebagai placeholder adalah praktik keamanan untuk mencegah SQL Injection.
$query = "INSERT INTO users (username, password) VALUES (?, ?)";

// 5. Siapkan statement
$stmt = mysqli_prepare($koneksi, $query);

// 6. Ikat parameter ke statement
// "ss" berarti kedua parameter ($username dan $hashed_password) adalah tipe data string.
mysqli_stmt_bind_param($stmt, "ss", $username, $hashed_password);

// 7. Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    // Jika berhasil, arahkan pengguna ke halaman login dengan pesan sukses
    header("Location: login.php?status=registrasi_sukses");
    exit();
} else {
    // Jika gagal (misalnya username sudah ada), tampilkan pesan error
    // Error: Duplicate entry 'namauser' for key 'username'
    if (mysqli_errno($koneksi) == 1062) {
        echo "Error: Username sudah digunakan. Silakan pilih username lain.";
    } else {
        echo "Error: " . mysqli_stmt_error($stmt);
    }
}

// 8. Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);

?>