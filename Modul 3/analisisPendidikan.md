# Analisis File pendidikan.html (Education Page)

## 1. Struktur Dasar HTML
- Menggunakan standar **HTML5** (`<!DOCTYPE html>`).
- Bahasa dokumen ditetapkan `lang="en"`.
- `<head>` berisi metadata, title, link CSS eksternal (AOS & Boxicons), serta CSS internal.
- `<body>` menampilkan konten utama dalam section `.main-section`.

---

## 2. Bagian `<head>`
- **Meta Tag**:
  - `charset="UTF-8"` mendukung semua karakter.
  - `viewport="width=device-width, initial-scale=1.0"` membuat tampilan responsif di perangkat mobile.
- **Title**: `Education`.
- **CSS Eksternal**:
  - **AOS** → library animasi saat scroll.
  - **Boxicons** → ikon (walau tidak dipakai di halaman ini, tetap terhubung).
- **CSS Internal**:
  - Reset CSS dengan `*`.
  - Dominasi warna: latar belakang gelap `#0e1217` dengan aksen biru `#4acfee`.
  - Efek **glassmorphism** di `.main-section` (background blur + transparan).

---

## 3. Struktur Body
### a. Section Utama `.main-section`
- Container berbentuk **card besar** dengan sudut melengkung (`border-radius: 50px`).
- Efek **box-shadow** biru.

### b. Navbar (`<nav>`)
- Komponen tetap sama dengan halaman lain:
  - Logo `<h1><span>27</span>Elnino</h1>`.
  - Menu navigasi: Home, About Me, Education (aktif), Award, Contact.
- Efek interaktif pada link:
  - Hover: background biru, teks gelap, dan glowing.
  - Class `active` menandai halaman sedang dibuka.

### c. Hero Section (`.hero`)
Dibagi menjadi 3 bagian utama:

1. **Hero Info**
   - Judul `"PENDIDIKAN"` dengan animasi **gradient teks**.
   - Daftar riwayat pendidikan dalam kotak-kotak **.edu-card**:
     - **SD Negeri 59 Batulappa** (2012 - 2018)
     - **SMP Negeri 15 Sinjai** (2018 - 2021)
     - **SMA Negeri 7 Sinjai** (2021 - 2024)
     - **Universitas Negeri Makassar (UNM)** (2024 - Sekarang)
   - Masing-masing kartu memiliki:
     - Border biru, background transparan, radius melengkung.
     - Efek hover → naik ke atas (translateY) + shadow glowing biru.

2. **Education Motto**
   - Kutipan motivasi pendidikan ditempatkan di **pojok kiri bawah layar** dengan `position: fixed`.
   - Memberi kesan inspiratif dan menutup halaman.

3. **Hero Image**
   - Foto pendidikan berbentuk persegi panjang (rasio 3:4).
   - Efek hover: glowing biru lebih terang.
   - Elemen diberi animasi AOS `zoom-in-left`.

---

## 4. Animasi (AOS)
- Atribut `data-aos` dipakai untuk animasi scroll.
- Contoh:
  - Logo: `zoom-in`.
  - Judul "PENDIDIKAN": `fade-left`.
  - Kartu pendidikan: `zoom-in` dengan delay bertahap.
  - Motto: `fade-left`.
  - Foto: `zoom-in-left`.

---

## 5. Responsivitas
- **Breakpoint 980px**:
  - `.hero` berubah dari **row** ke **column**.
  - Foto lebih besar (250x350px).
  - Menu navigasi `<ul>` disembunyikan.
- **Breakpoint 440px**:
  - Foto diperkecil (200x280px).
  - Layout tetap rapih untuk layar kecil.

---

## 6. Kelebihan
- Desain konsisten dengan halaman lain (tema biru-hitam, glassmorphism).
- Riwayat pendidikan ditampilkan jelas dalam bentuk **card grid**.
- Animasi AOS membuat tampilan lebih hidup.
- Teks motto memberi nilai motivatif.
- Responsif di berbagai ukuran layar.

---

## 7. Kekurangan
- **Boxicons** tidak digunakan di halaman ini → bisa dihapus untuk efisiensi.
- **Navbar mobile** belum ada hamburger menu.
- **Motto** menggunakan `position: fixed` → bisa menutupi elemen lain jika konten diperbanyak.
- Semua CSS masih inline di file HTML → lebih baik dipisahkan ke `style.css`.

---

## 8. Saran Pengembangan
- Tambahkan **hamburger menu** untuk navigasi mobile.
- Pisahkan CSS ke file eksternal.
- Ganti `position: fixed` motto dengan layout responsif agar lebih fleksibel.
- Tambahkan animasi unik untuk setiap kartu pendidikan.
- Bisa dikembangkan menjadi **timeline pendidikan** untuk visualisasi lebih menarik.

---

## 9. Kesimpulan
Halaman **pendidikan.html** berhasil menampilkan riwayat pendidikan secara jelas dan menarik.  
Dengan desain modern, animasi interaktif, dan responsif, halaman ini menjadi elemen penting dalam **website portofolio pribadi** untuk menunjukkan latar belakang akademik.
