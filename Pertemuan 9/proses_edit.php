<?php
// Mulai session dan cek status login
session_start();
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit;
}

// Sertakan file koneksi
include 'includes/koneksi.php';

// Ambil semua data dari form
$id_catatan = $_POST['id_catatan'];
$judul = $_POST['judul'];
$tanggal_entri = $_POST['tanggal_entri'];
$isi_catatan = $_POST['isi_catatan'];
$user_id = $_SESSION['user_id'];

// Buat query UPDATE menggunakan prepared statement
// Kita tambahkan 'AND user_id = ?' sebagai lapisan keamanan tambahan
$query = "UPDATE catatan_harian SET judul = ?, tanggal_entri = ?, isi_catatan = ? WHERE id = ? AND user_id = ?";
$stmt = mysqli_prepare($koneksi, $query);

// Ikat parameter
// sssii = string, string, string, integer, integer
mysqli_stmt_bind_param($stmt, "sssii", $judul, $tanggal_entri, $isi_catatan, $id_catatan, $user_id);

// Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    // Jika berhasil, redirect kembali ke halaman utama
    $hari_inggris = strtolower(date('l', strtotime($tanggal_entri)));
    header("Location: index.php?hari=" . $hari_inggris);
    exit();
} else {
    // Jika gagal, tampilkan error
    echo "Error: Gagal mengupdate catatan. " . mysqli_error($koneksi);
}

// Tutup statement dan koneksi
mysqli_stmt_close($stmt);
mysqli_close($koneksi);
?>