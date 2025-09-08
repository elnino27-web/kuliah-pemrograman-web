# Analisis File `prestasi.html`

File `prestasi.html` adalah halaman website yang menampilkan daftar **prestasi/award** dengan desain modern berbasis HTML, CSS, dan animasi menggunakan AOS.

---

## Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Mendeklarasikan bahwa dokumen ini menggunakan standar **HTML5**.

2. `<html lang="en">`  
   → Elemen root dokumen, atribut `lang="en"` menunjukkan bahasa utama dokumen adalah Inggris.

3. `<head>`  
   → Berisi metadata, judul halaman, link CSS eksternal, serta style internal.

4. `<meta charset="UTF-8" />`  
   → Encoding karakter UTF-8 agar teks mendukung simbol/karakter global.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Membuat halaman **responsif** terhadap ukuran layar perangkat.

6. `<title>Award</title>`  
   → Judul yang tampil pada tab browser.

---

## Link Eksternal CSS

7. `<!-- AOS CSS -->`  
   → Komentar untuk menandai pemanggilan library animasi AOS.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Mengimpor stylesheet **Animate On Scroll (AOS)** agar animasi dapat digunakan.

9. `<!-- Boxicons CSS -->`  
   → Komentar untuk menandai pemanggilan ikon Boxicons.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>`  
    → Mengimpor **Boxicons** untuk penggunaan ikon vektor.

---

## CSS Internal

11. `<style>` → Awal blok CSS.

### Reset CSS
12. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset default browser: menghilangkan margin/padding, menerapkan `box-sizing: border-box`, dan font default Arial.

### Body
13. `body { background-color: #0e1217; ... }`  
    → Mengatur warna latar belakang gelap, tinggi `100vh`, dan menggunakan **flexbox** untuk menempatkan konten di tengah.

### Main Section
14. `.main-section { ... }`  
    → Kontainer utama dengan properti:  
       - Lebar 90%, maksimal 1200px  
       - Tinggi 80% layar  
       - Background semi-transparan + efek blur (`backdrop-filter`)  
       - Border-radius besar (`50px`) dan shadow neon biru  
       - Flexbox kolom untuk tata letak.

### Navbar
15. `nav { display: flex; justify-content: space-between; ... }`  
    → Navbar dengan logo di kiri, menu di kanan.

16. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Styling logo/brand.

17. `nav h1 span { color: #4acfee; }`  
    → Warna aksen biru khusus untuk teks dalam `<span>`.

18. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Hilangkan bullet, atur menu horizontal dengan jarak antar item.

19. `nav ul li a { ... }`  
    → Styling link menu: tombol mini dengan border biru, teks putih, efek hover.

20. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Efek hover/aktif: background biru, teks gelap, dan glow.

### Hero Section
21. `.hero { display: flex; align-items: center; justify-content: space-between; ... }`  
    → Bagian utama konten menggunakan flexbox.

22. `.hero-info h2 { ... }`  
    → Judul besar "PRESTASI" dengan animasi gradasi berjalan (`background-clip` + `@keyframes`).

23. `@keyframes animate-gradient { to { background-position: 200%; } }`  
    → Animasi gradien bergerak dari kiri ke kanan.

### Grid Prestasi
24. `.education-boxes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; ... }`  
    → Layout grid 3 kolom untuk kartu prestasi.

25. `.edu-card { ... }`  
    → Styling kartu prestasi: border biru, background transparan, hover naik + shadow.

26. `.edu-card h4 { font-size: 10px; color: #4acfee; text-align: center; }`  
    → Judul prestasi berwarna biru.

27. `.edu-card p { font-size: 12px; color: white; }`  
    → Tahun prestasi ditampilkan dalam teks putih.

### Responsif
28. `@media (max-width: 980px) { ... }`  
    → Untuk layar kecil:  
       - `.hero` berubah jadi kolom  
       - Navbar (`ul`) disembunyikan.

---

## Struktur Body

29. `<body>` → Awal isi dokumen.

30. `<section class="main-section">` → Membungkus seluruh konten halaman.

### Navbar
31. `<nav>` → Bagian navigasi dengan logo `<h1><span>27</span>Elnino</h1>`.  
    - Daftar menu (`ul li a`) → Home, About Me, Education, Award (aktif), Contact.  
    - Atribut `data-aos` dipakai untuk animasi scroll.

### Hero Section
32. `<div class="hero">` → Container hero.

33. `<div class="hero-info">` → Info utama berisi judul dan daftar prestasi.

34. `<h2 data-aos="fade-left">PRESTASI</h2>`  
    → Judul utama dengan animasi **fade-left** dari AOS.

35. `<div class="education-boxes"> ... </div>`  
    → Grid berisi daftar prestasi dalam kartu (`.edu-card`).  
    - Setiap kartu menggunakan animasi `data-aos="zoom-in"`.  
    - Struktur tiap kartu:  
      - `<h4>` → Nama prestasi.  
      - `<p>` → Tahun prestasi.

**Prestasi yang ditampilkan:**
- Olimpiade Matematika (2023, 2019, 2018)  
- Olimpiade Fisika (2022)  
- GenRe Runner Up (2021)  
- Cerdas Cermat (2017)  
- Wisudawan TK/TPA (2016)

---

## Script Eksternal

36. `<!-- AOS JS -->` → Komentar penanda.

37. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import library AOS JavaScript.

38. `<script> AOS.init(); </script>`  
    → Inisialisasi AOS agar animasi aktif.

39. `</body>` dan `</html>` → Penutup dokumen.

---

## Kesimpulan

File `prestasi.html` membangun halaman daftar prestasi dengan:  
- **HTML5** sebagai struktur utama.  
- **CSS internal** untuk styling modern (dark theme + neon biru).  
- **Navbar konsisten** dengan halaman lain.  
- **Grid system** untuk menampilkan kartu prestasi.  
- **AOS library** untuk animasi scroll (fade, zoom).  
- **Responsif** dengan media query agar tampilan menyesuaikan perangkat.  
