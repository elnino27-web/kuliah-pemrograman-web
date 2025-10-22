<?php
// Sertakan header, di dalamnya sudah ada session_start() dan cek login
include 'includes/header.php';
include 'includes/koneksi.php';

// Cek apakah ada ID catatan di URL
if (!isset($_GET['id'])) {
    // Jika tidak ada ID, redirect ke halaman utama
    header("Location: index.php");
    exit;
}

$id_catatan = $_GET['id'];
$user_id = $_SESSION['user_id'];

// Query untuk mengambil data catatan spesifik milik pengguna yang sedang login
// Ini penting untuk keamanan, agar pengguna tidak bisa mengedit catatan milik orang lain
$query = "SELECT judul, tanggal_entri, isi_catatan FROM catatan_harian WHERE id = ? AND user_id = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "ii", $id_catatan, $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Cek apakah catatan ditemukan
if (mysqli_num_rows($result) > 0) {
    $catatan = mysqli_fetch_assoc($result);
} else {
    // Jika catatan tidak ditemukan atau bukan milik user ini, redirect
    echo "Catatan tidak ditemukan atau Anda tidak punya hak akses.";
    exit;
}
?>

<div class="content">
    <h2>Edit Catatan Harian</h2>
    <p><a href="index.php"> &larr; Kembali ke Dashboard</a></p>

    <form action="proses_edit.php" method="POST" class="form-diary">
        <input type="hidden" name="id_catatan" value="<?php echo $id_catatan; ?>">
        
        <div class="form-group">
            <label for="judul">Judul Catatan</label>
            <input type="text" name="judul" id="judul" value="<?php echo htmlspecialchars($catatan['judul']); ?>" required>
        </div>
        <div class="form-group">
            <label for="tanggal_entri">Tanggal Catatan</label>
            <input type="date" name="tanggal_entri" id="tanggal_entri" value="<?php echo $catatan['tanggal_entri']; ?>" required>
        </div>
        <div class="form-group">
            <label for="isi_catatan">Isi Catatan</label>
            <textarea name="isi_catatan" id="isi_catatan" rows="10" required><?php echo htmlspecialchars($catatan['isi_catatan']); ?></textarea>
        </div>
        <button type="submit">Update Catatan</button>
    </form>
</div>

<?php
// Sertakan footer
include 'includes/footer.php';
?>