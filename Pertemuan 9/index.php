<?php
// Sertakan file header, koneksi, dll.
include 'includes/header.php'; // Session start dan cek login sudah ada di sini
include 'includes/koneksi.php';

// Tentukan hari yang akan ditampilkan
// Map nama hari dari Inggris ke Indonesia untuk judul
$hari_map = [
    'monday'    => 'Senin',
    'tuesday'   => 'Selasa',
    'wednesday' => 'Rabu',
    'thursday'  => 'Kamis',
    'friday'    => 'Jumat',
    'saturday'  => 'Sabtu',
    'sunday'    => 'Minggu'
];

// Ambil hari dari URL, jika tidak ada, gunakan hari ini
$hari_inggris = strtolower(isset($_GET['hari']) ? $_GET['hari'] : date('l'));
$hari_indonesia = $hari_map[$hari_inggris] ?? 'Tidak Valid';

// Ambil ID pengguna dari session
$user_id = $_SESSION['user_id'];

// Query untuk mengambil catatan berdasarkan user_id dan hari
// DAYNAME() adalah fungsi SQL untuk mendapatkan nama hari dari sebuah tanggal
$query = "SELECT id, judul, isi_catatan, tanggal_entri FROM catatan_harian 
          WHERE user_id = ? AND LOWER(DAYNAME(tanggal_entri)) = ? 
          ORDER BY tanggal_entri DESC";

$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "is", $user_id, $hari_inggris);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
?>

<div class="content">
    <h2>Catatan Harian untuk Hari: <?php echo $hari_indonesia; ?></h2>
    <a href="tambah_catatan.php" class="btn-tambah"> Tulis Catatan Baru</a>

    <div class="diary-list">
        <?php
        if (mysqli_num_rows($result) > 0) {
            // Tampilkan setiap catatan
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='diary-entry'>";
                echo "<h3>" . htmlspecialchars($row['judul']) . "</h3>";
                echo "<small>Tanggal: " . date('d M Y', strtotime($row['tanggal_entri'])) . "</small>";
                echo "<p>" . nl2br(htmlspecialchars(substr($row['isi_catatan'], 0, 200))) . "...</p>";
                echo "<a href='edit_catatan.php?id=" . $row['id'] . "'>Edit</a> | ";
                echo "<a href='hapus_catatan.php?id=" . $row['id'] . "&hari=" . $hari_inggris . "' onclick='return confirm(\"Yakin ingin menghapus?\")'>Hapus</a>";
                echo "</div>";
            }
        } else {
            // Jika tidak ada catatan
            echo "<p>Belum ada catatan untuk hari " . $hari_indonesia . ".</p>";
        }
        ?>
    </div>
</div>

<?php
// Sertakan file footer
include 'includes/footer.php';
?>