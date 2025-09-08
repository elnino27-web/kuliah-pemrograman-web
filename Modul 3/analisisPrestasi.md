# Analisis File `prestasi.html`

Berikut adalah analisis baris per baris dari file `prestasi.html` yang menampilkan halaman **Award/Prestasi** dengan HTML, CSS, dan animasi menggunakan AOS:

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Mendeklarasikan bahwa dokumen ini menggunakan **HTML5** sebagai standar.

2. `<html lang="en">`  
   → Tag pembuka HTML dengan atribut `lang="en"` yang menandakan bahasa dokumen adalah **Inggris** (penting untuk SEO dan aksesibilitas).

3. `<head>`  
   → Bagian ini berisi metadata, judul halaman, dan link ke file CSS eksternal maupun internal.

4. `<meta charset="UTF-8" />`  
   → Mengatur encoding karakter menjadi **UTF-8** agar teks mendukung berbagai karakter dan simbol.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Agar tampilan website **responsif** menyesuaikan dengan ukuran layar perangkat.

6. `<title>Award</title>`  
   → Menentukan judul tab browser yang muncul saat halaman dibuka.

---

## Bagian Link Eksternal CSS

7. `<!-- AOS CSS -->`  
   → Komentar penanda bahwa baris berikut memuat **library AOS** untuk animasi.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import stylesheet AOS (Animate On Scroll).

9. `<!-- Boxicons CSS -->`  
   → Komentar penanda bahwa baris berikut memuat **ikon Boxicons**.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>`  
    → Import **Boxicons CSS** agar bisa menggunakan ikon SVG.

---

## Bagian CSS Internal

11. `<style>`  
    → Membuka blok CSS internal.

### Reset dan Font

12. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset CSS global: menghilangkan margin & padding default, menggunakan `box-sizing: border-box`, serta font default Arial/Helvetica.

13. `body { background-color: #0e1217; ... }`  
    → Mengatur warna background gelap, tinggi layar penuh (`100vh`), dan memposisikan konten agar **center** dengan `flexbox`.

### Main Section

14. `.main-section { ... }`  
    → Container utama dengan:  
       - Lebar `90%`, maksimum `1200px`  
       - Tinggi `80%`  
       - Background transparan dengan efek blur (`backdrop-filter`)  
       - Border-radius `50px` dan shadow biru  
       - Menggunakan `flexbox` arah kolom  

---

### Navbar

15. `nav { display: flex; justify-content: space-between; ... }`  
    → Navbar horizontal dengan posisi logo di kiri dan menu di kanan.

16. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Styling judul/logo.

17. `nav h1 span { color: #4acfee; }`  
    → Memberi warna biru khusus pada bagian `<span>`.

18. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Menghilangkan bullet list dan menampilkan menu secara horizontal.

19. `nav ul li a { ... }`  
    → Styling link menu: berbentuk tombol kecil dengan border biru, teks putih, dan efek hover.

20. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Saat hover atau aktif: background biru, teks gelap, dan glowing effect.

---

### Hero Section

21. `.hero { display: flex; align-items: center; justify-content: space-between; ... }`  
    → Bagian utama konten (judul & prestasi), menggunakan `flexbox`.

22. `.hero-info h2 { ... }`  
    → Judul besar **PRESTASI** dengan efek **gradient bergerak** berkat `background-clip` dan animasi `@keyframes`.

23. `@keyframes animate-gradient { to { background-position: 200%; } }`  
    → Animasi gradient berjalan dari kiri ke kanan.

---

### Education Boxes (Prestasi)

24. `.education-boxes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; ... }`  
    → Membuat grid 3 kolom untuk menampilkan kartu prestasi.

25. `.edu-card { ... }`  
    → Desain kartu prestasi dengan border biru, background transparan, dan efek hover (naik sedikit + shadow).

26. `.edu-card h4 { font-size: 10px; color: #4acfee; text-align: center; }`  
    → Judul prestasi kecil berwarna biru.

27. `.edu-card p { font-size: 12px; color: white; }`  
    → Tahun prestasi dengan teks putih.

---

### Responsif

28. `@media (max-width: 980px) { ... }`  
    → Aturan untuk tampilan mobile:  
       - `.hero` menjadi kolom  
       - Navbar menu (`ul`) disembunyikan  

---

## Bagian Body HTML

29. `<body>`  
    → Bagian konten utama.

30. `<section class="main-section">`  
    → Membungkus seluruh isi halaman dalam section utama.

---

### Navbar

31. `<nav>` … `</nav>`  
    → Bagian navigasi dengan logo `<h1><span>27</span>Elnino</h1>` dan daftar menu (`ul li a`).  
    → Setiap item menu diberi atribut **AOS** (`data-aos`) untuk animasi saat scroll.

- Menu: Home, About Me, Education, Award (aktif), Contact.

---

### Hero + Daftar Prestasi

32. `<div class="hero">`  
    → Container hero.

33. `<div class="hero-info">`  
    → Bagian info teks prestasi.

34. `<h2 data-aos="fade-left"...>PRESTASI</h2>`  
    → Judul animasi gradient dengan efek AOS fade-left.

35. `<div class="education-boxes"> ... </div>`  
    → Grid berisi daftar **prestasi** dalam bentuk kartu (`.edu-card`).  
    → Setiap kartu berisi judul prestasi (`<h4>`) dan tahun (`<p>`).  
    → Atribut `data-aos="zoom-in"` digunakan untuk animasi zoom masuk.

   **Daftar Prestasi yang ditampilkan:**
   - Olimpiade Matematika (2023, 2019, 2018)  
   - Olimpiade Fisika (2022)  
   - GenRe Runner Up (2021)  
   - Cerdas Cermat (2017)  
   - Wisudawan TK/TPA (2016)  

---

## Bagian Script

36. `<!-- AOS JS -->`  
    → Komentar penanda.

37. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import script AOS.

38. `<script> AOS.init(); </script>`  
    → Inisialisasi AOS agar animasi berjalan.

39. `</body>` dan `</html>`  
    → Penutup dokumen HTML.
