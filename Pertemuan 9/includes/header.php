<?php
// Kita mulai session di sini karena header.php akan selalu di-include pertama kali
session_start();

// SECURITY: Cek apakah pengguna sudah login
if (!isset($_SESSION['is_login'])) {
    // Jika tidak, redirect ke halaman login
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Diary</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="main-header">
    <div class="container">
        <h1>Diary Digital</h1>
        <div class="user-info">
            <span>Halo, <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong>!</span>
            <a href="logout.php" class="logout-btn">Logout</a>
        </div>
    </div>
</header>

<nav class="day-nav">
    <div class="container">
        <ul>
            <li><a href="index.php?hari=monday">Senin</a></li>
            <li><a href="index.php?hari=tuesday">Selasa</a></li>
            <li><a href="index.php?hari=wednesday">Rabu</a></li>
            <li><a href="index.php?hari=thursday">Kamis</a></li>
            <li><a href="index.php?hari=friday">Jumat</a></li>
            <li><a href="index.php?hari=saturday">Sabtu</a></li>
            <li><a href="index.php?hari=sunday">Minggu</a></li>
        </ul>
    </div>
</nav>

<main class="container">