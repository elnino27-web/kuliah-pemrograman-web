Analisis File kontak.html

Berikut adalah analisis baris per baris dari file kontak.html yang menampilkan halaman Contact dengan HTML, CSS, dan animasi menggunakan AOS:

Bagian Struktur Dasar HTML

<!DOCTYPE html>
→ Mendeklarasikan dokumen ini menggunakan standar HTML5.

<html lang="en">
→ Elemen pembuka HTML dengan atribut lang="en" menandakan bahasa utama halaman adalah Inggris.

<head>
→ Bagian untuk metadata, judul halaman, dan pemanggilan resource eksternal.

<meta charset="UTF-8" />
→ Mengatur encoding karakter menjadi UTF-8 agar mendukung semua simbol.

<meta name="viewport" content="width=device-width, initial-scale=1.0" />
→ Membuat tampilan responsif agar sesuai di berbagai ukuran layar.

<title>Contact</title>
→ Judul halaman yang tampil pada tab browser.

Bagian Link Eksternal CSS

<!-- AOS CSS -->
→ Komentar penanda untuk stylesheet AOS.

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
→ Mengimpor CSS AOS (Animate On Scroll).

<!-- Boxicons CSS -->
→ Komentar penanda untuk stylesheet ikon Boxicons.

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
→ Mengimpor ikon Boxicons agar bisa dipakai di halaman.

Bagian CSS Internal

<style>
→ Membuka blok CSS internal.

Reset dan Font

* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
→ Reset CSS: menghapus margin/padding default, mengatur box-sizing, dan menetapkan font standar.

body { background-color: #0e1217; ... }
→ Mengatur body agar:

Background hitam kebiruan

Full height (100vh)

Menggunakan flexbox untuk center isi halaman.

Main Section

.main-section { ... }
→ Container utama dengan:

Lebar 90%, maksimum 1200px

Background transparan + efek blur (backdrop-filter)

Border-radius 50px + shadow biru

Menggunakan flexbox arah kolom.

Navbar

nav { display: flex; justify-content: space-between; ... }
→ Navbar horizontal dengan logo di kiri dan menu di kanan.

nav h1 { color: white; font-size: 30px; font-weight: 900; }
→ Logo teks besar.

nav h1 span { color: #4acfee; }
→ Memberi warna biru khusus pada bagian <span>.

nav ul { list-style: none; display: flex; gap: 10px; }
→ Daftar menu horizontal tanpa bullet.

nav ul li a { ... }
→ Styling link menu: tombol kecil dengan border biru, teks putih.

nav ul li a:hover, nav ul li a.active { ... }
→ Saat hover/aktif: background biru, teks hitam, dan efek glow.

Hero Section

.hero { display: flex; flex-direction: column; align-items:flex-start; ... }
→ Bagian utama halaman kontak, diatur kolom agar konten tersusun vertikal.

.hero-info h2 { ... }
→ Judul besar KONTAK dengan efek gradient animasi.

@keyframes animate-gradient { to { background-position: 200%; } }
→ Membuat animasi gradasi bergerak dari kiri ke kanan.

Contact Section

.contact-container { display: flex; gap: 20px; margin-top: 30px; ... }
→ Container untuk dua kolom (kiri = teks, kanan = form).

.contact-box { ... }
→ Styling untuk kotak kontak: border biru, background transparan, shadow glow.

.contact-box:hover { ... }
→ Saat hover: efek glow lebih kuat + border transparan.

Bagian Kiri (Teks)

.contact-left h3 { color: #4acfee; font-size: 40px; ... }
→ Judul besar di kotak kiri.

.contact-left p { color: #ddd; line-height: 1.6; font-size: 20px; }
→ Paragraf deskriptif dengan teks abu terang.

Bagian Kanan (Form)

.contact-right form { display: flex; flex-direction: column; gap: 12px; }
→ Form input disusun secara vertikal dengan jarak antar elemen.

.contact-right input, .contact-right textarea { ... }
→ Input box hijau muda, border radius, tanpa border, teks nyaman dibaca.

.contact-right textarea { resize: none; height: 120px; }
→ Membatasi textarea agar tidak bisa diubah ukuran manual.

.contact-right button { ... }
→ Tombol biru dengan font tebal.

.contact-right button:hover { ... }
→ Efek hover: biru lebih gelap, teks putih, glowing.

Responsif

@media (max-width: 768px) { .contact-container { flex-direction: column; } }
→ Jika layar kecil, layout dua kolom berubah menjadi satu kolom vertikal.

Bagian Body HTML

<body>
→ Awal bagian konten utama.

<section class="main-section">
→ Container utama halaman.

Navbar

<nav> … </nav>
→ Bagian navigasi dengan logo <h1><span>27</span>Elnino</h1> dan daftar menu (ul li a).
→ Menu: Home, About Me, Education, Award, Contact (aktif).

Hero + Contact

<div class="hero">
→ Container untuk hero section.

<div class="hero-info"> <h2>KONTAK</h2> </div>
→ Judul halaman "KONTAK" dengan efek animasi AOS.

<div class="contact-container"> ... </div>
→ Container dua kolom.

Kiri: <div class="contact-box contact-left"> berisi teks ajakan untuk berhubungan.

Kanan: <div class="contact-box contact-right"> berisi form input (nama, email, pesan, tombol kirim).

Bagian Script

<!-- AOS JS -->
→ Komentar penanda script AOS.

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
→ Import file JS AOS.

<script> AOS.init(); </script>
→ Inisialisasi animasi AOS.

</body> dan </html>
→ Penutup dokumen HTML.

