<?php
// Mulai session dan cek status login
session_start();
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
    exit;
}

// Sertakan file koneksi
include 'includes/koneksi.php';

// Cek apakah ada ID dan hari di URL
if (isset($_GET['id']) && isset($_GET['hari'])) {
    $id_catatan = $_GET['id'];
    $hari = $_GET['hari'];
    $user_id = $_SESSION['user_id'];

    // Query DELETE dengan prepared statement
    // SANGAT PENTING: selalu sertakan 'AND user_id = ?'
    // untuk memastikan pengguna hanya bisa menghapus catatannya sendiri.
    $query = "DELETE FROM catatan_harian WHERE id = ? AND user_id = ?";
    $stmt = mysqli_prepare($koneksi, $query);

    // Ikat parameter (integer, integer)
    mysqli_stmt_bind_param($stmt, "ii", $id_catatan, $user_id);

    // Eksekusi
    if (mysqli_stmt_execute($stmt)) {
        // Jika berhasil, redirect kembali ke hari yang benar
        header("Location: index.php?hari=" . $hari);
        exit();
    } else {
        // Jika gagal, tampilkan error
        echo "Error: Gagal menghapus catatan. " . mysqli_error($koneksi);
    }

    // Tutup statement dan koneksi
    mysqli_stmt_close($stmt);
    mysqli_close($koneksi);

} else {
    // Jika tidak ada ID, redirect ke halaman utama
    header("Location: index.php");
    exit();
}
?>