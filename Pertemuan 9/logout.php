<?php
// Selalu mulai session di awal
session_start();

// 1. Hapus semua variabel session
$_SESSION = array();

// 2. Hancurkan session
if (session_destroy()) {
    // 3. Jika berhasil, arahkan ke halaman login
    header("Location: login.php");
    exit();
}
?>  