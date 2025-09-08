# Analisis File tentang-saya.html (About Me Page)

## 1. Struktur Dasar HTML
File ini menggunakan struktur standar HTML5:
- `<!DOCTYPE html>` → mendefinisikan dokumen HTML5.
- `<html lang="en">` → bahasa utama dokumen adalah Inggris.
- `<head>` → berisi metadata, link CSS eksternal (AOS & Boxicons), dan style internal.
- `<body>` → berisi konten utama halaman.

---

## 2. Bagian `<head>`
- **Meta Tag**: 
  - `charset="UTF-8"` memastikan dukungan semua karakter.
  - `viewport="width=device-width, initial-scale=1.0"` membuat halaman responsif di semua perangkat.
- **Title**: "About Me".
- **CSS Eksternal**: 
  - AOS (Animate On Scroll) untuk animasi saat scroll.
  - Boxicons untuk ikon hobi.
- **CSS Internal**:
  - Reset CSS (`* { margin: 0; padding: 0; box-sizing: border-box; }`).
  - Warna dominan: `#0e1217` (dark) dan aksen biru `#4acfee`.
  - Mengatur layout responsif dengan media query.

---

## 3. Struktur Body
### a. Section Utama `.main-section`
- Container utama dengan **background blur (glassmorphism)**, `border-radius: 50px`, dan **shadow** biru.
- Digunakan **flexbox** untuk tata letak kolom.

### b. Navbar (`<nav>`)
- Terdiri dari:
  - **Judul Logo**: `<h1><span>27</span>Elnino</h1>`.
  - **Menu Navigasi**: daftar `<ul><li><a>` menuju halaman lain (Home, About Me, Education, Award, Contact).
- Efek interaktif:
  - Hover: background biru, teks gelap, dan glowing effect.
  - Class `active` menandai halaman aktif.

### c. Hero Section (`.hero`)
- Dibagi dua bagian utama dengan **flexbox**:
  1. **Hero Info**:
     - Heading utama: `"TENTANG SAYA"` dengan efek **gradient animasi**.
     - Paragraf tentang diri (asal, kuliah, minat coding/web).
     - Daftar hobi dengan ikon **Boxicons**:
       - Coding, Gaming, Football, Movie, Music, Cycling.
     - Setiap ikon memiliki efek hover → berubah warna, glowing.
  2. **Hero Image**:
     - Foto profil berbentuk lingkaran (`border-radius: 50%`).
     - Efek hover: **shadow glowing** biru.

---

## 4. Animasi (AOS)
- Elemen menggunakan atribut `data-aos`, `data-aos-duration`, dan `data-aos-delay`.
- Contoh:
  - Logo: `data-aos="zoom-in"`.
  - Judul "TENTANG SAYA": `data-aos="fade-left"`.
  - Hobi: `data-aos="fade-up"` dengan delay bertahap.
- AOS diinisialisasi dengan `AOS.init();` di bagian bawah `<body>`.

---

## 5. Responsivitas
- **Breakpoint 980px**:
  - `.hero` berubah dari **row** ke **column**.
  - Navbar `<ul>` disembunyikan (hanya logo tampil).
- **Breakpoint 440px**:
  - Ukuran teks heading dan gambar diperkecil.
  - Menyesuaikan agar tetap rapi di layar HP.

---

## 6. Kelebihan
- Tampilan modern dengan **glassmorphism**.
- **Animasi interaktif** menggunakan AOS.
- **Warna konsisten** (biru & hitam).
- **Responsive** di layar kecil.
- Navigasi mudah dipahami.

---

## 7. Kekurangan
- Navbar mobile belum ada menu toggle (hamburger).
- Semua CSS masih dalam satu file → sebaiknya dipisahkan ke file `style.css`.
- Gambar profil (`fotoProfil.jpg`) harus tersedia agar tidak broken.
- Paragraf masih sederhana, bisa ditambah pengalaman atau skill.

---

## 8. Saran Pengembangan
- Tambahkan **menu hamburger** untuk navigasi mobile.
- Pisahkan CSS ke file eksternal.
- Tambahkan efek animasi untuk foto profil (misalnya rotate atau zoom).
- Buat bagian skill dengan **progress bar** atau **rating bintang**.
- Optimalkan SEO dengan meta tag tambahan.

---

## 9. Kesimpulan
File ini adalah halaman **tentang-saya.html** dengan desain modern, responsif, dan animasi menarik.  
Cocok sebagai bagian dari **website portofolio pribadi** untuk memperkenalkan identitas, latar belakang, serta hobi.
