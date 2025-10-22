<?php
// Mulai session dan cek status login
session_start();
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit;
}

// Sertakan file koneksi database
include 'includes/koneksi.php';

// Ambil data dari form (method POST)
$judul = $_POST['judul'];
$tanggal_entri = $_POST['tanggal_entri'];
$isi_catatan = $_POST['isi_catatan'];

// Ambil user_id dari session yang sedang login
$user_id = $_SESSION['user_id'];

// Buat query INSERT menggunakan prepared statement untuk keamanan
$query = "INSERT INTO catatan_harian (user_id, judul, tanggal_entri, isi_catatan) VALUES (?, ?, ?, ?)";
$stmt = mysqli_prepare($koneksi, $query);

// Ikat parameter ke statement
// "isss" berarti: i=integer (user_id), s=string (judul), s=string (tanggal_entri), s=string (isi_catatan)
mysqli_stmt_bind_param($stmt, "isss", $user_id, $judul, $tanggal_entri, $isi_catatan);

// Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    // Jika berhasil, redirect kembali ke halaman utama
    $hari_inggris = strtolower(date('l', strtotime($tanggal_entri)));
    header("Location: index.php?hari=" . $hari_inggris);
    exit();
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: Gagal menyimpan catatan. " . mysqli_error($koneksi);
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>