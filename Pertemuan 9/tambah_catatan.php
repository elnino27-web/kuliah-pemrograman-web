<?php
// Sertakan header.php, di dalamnya sudah ada session_start() dan pengecekan login
include 'includes/header.php';
?>

<div class="content">
    <h2>Tulis Catatan Harian Baru</h2>
    <p><a href="index.php"> &larr; Kembali ke Dashboard</a></p>

    <form action="proses_tambah.php" method="POST" class="form-diary">
        <div class="form-group">
            <label for="judul">Judul Catatan</label>
            <input type="text" name="judul" id="judul" required>
        </div>
        <div class="form-group">
            <label for="tanggal_entri">Tanggal Catatan</label>
            <input type="date" name="tanggal_entri" id="tanggal_entri" required>
        </div>
        <div class="form-group">
            <label for="isi_catatan">Isi Catatan</label>
            <textarea name="isi_catatan" id="isi_catatan" rows="10" required></textarea>
        </div>
        <button type="submit">Simpan Catatan</button>
    </form>
</div>

<?php
// Sertakan footer.php
include 'includes/footer.php';
?>