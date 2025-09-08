# Analisis File index.html (Portofolio)

## Analisis Baris demi Baris

1. `<!DOCTYPE html>`  
   Menentukan bahwa file ini menggunakan standar **HTML5**.

2. `<html lang="en">`  
   Membuka elemen HTML utama dan mendeklarasikan bahwa bahasa utama adalah **Inggris**.

3. `<head>`  
   Bagian kepala dokumen HTML yang berisi metadata, judul halaman, dan link CSS/JS eksternal.

4. `<meta charset="UTF-8" />`  
   Menentukan encoding karakter UTF-8 agar semua simbol/karakter bisa ditampilkan dengan benar.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   Membuat tampilan web **responsif** sesuai ukuran layar perangkat.

6. `<title>Portofolio Akmal</title>`  
   Memberikan judul pada tab browser.

7. `<!-- AOS CSS -->`  
   Komentar untuk menandai penggunaan library AOS (Animate On Scroll).

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   Memanggil **CSS AOS** agar animasi scroll bisa digunakan.

9. `<!-- Boxicons CSS -->`  
   Komentar untuk menandai penggunaan library ikon.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>`  
    Memanggil **Boxicons CSS** untuk menampilkan ikon sosial media (GitHub, LinkedIn, Instagram, TikTok).

11. `<style> ... </style>`  
    Bagian ini berisi **CSS internal** untuk mengatur tampilan web.  

    ### Isi CSS:
    - Reset default (`* { margin:0; padding:0; box-sizing:border-box; font-family:... }`).  
    - `body` → latar belakang gelap (#0e1217), konten dipusatkan dengan flexbox.  
    - `.main-section` → kontainer utama dengan efek **glassmorphism** (blur, transparan, rounded, shadow).  
    - `nav` → navbar horizontal dengan judul kiri dan menu kanan.  
    - `nav h1 span` → teks angka `27` diberi warna biru (#4acfee).  
    - `nav ul li a` → tombol menu dengan border biru, hover = warna background berubah biru.  
    - `.hero` → bagian utama isi halaman (perkenalan + foto).  
    - `.hero-info` → teks judul, subjudul dengan animasi gradient bergerak.  
    - `.btn` → tombol utama "Hubungi Saya", dengan efek hover (warna terbalik).  
    - `.ul-icons` → ikon sosial media bundar dengan border biru dan efek hover glow.  
    - `.hero-img` → foto profil berbentuk lingkaran, efek shadow glow.  
    - `@media` → aturan **responsif** untuk layar <980px (hero jadi kolom, navbar disembunyikan), <440px (teks & gambar lebih kecil).

12. `<body>`  
    Membuka isi utama dokumen.

13. `<section class="main-section">`  
    Kontainer utama seluruh konten halaman.

14. `<!-- Navbar -->`  
    Komentar untuk menandai bagian navigasi.

15. `<nav> ... </nav>`  
    Membuat navigasi atas dengan 2 bagian:  
    - Judul portofolio: `<h1><span>27</span>Elnino</h1>` (angka `27` berwarna biru).  
    - Daftar menu (`ul > li > a`): `Home, About Me, Education, Award, Contact`.  
      - Masing-masing link punya animasi AOS (`fade-up`, `delay` bertingkat 100ms).

16. `<!-- Hero Section -->`  
    Komentar untuk menandai bagian perkenalan utama.

17. `<div class="hero">`  
    Membuat container hero (split jadi 2 kolom: teks + gambar).

18. `<div class="hero-info">`  
    Bagian teks perkenalan.

19. `<h1 data-aos="fade-right"...>Hi, Saya</h1>`  
    Judul pertama dengan animasi fade-right.

20. `<h1 ...>Washiatul Akmal</h1>`  
    Judul kedua, menampilkan nama pemilik web.

21. `<h2 ...>Mahasiswa Informatika</h2>`  
    Subjudul dengan **efek gradient animasi teks**.

22. `<p ...>Selamat datang di website saya!...`  
    Paragraf perkenalan singkat dengan animasi `flip-down`.

23. `<div class="Buttons">`  
    Kontainer untuk tombol aksi (Hubungi Saya + sosial media).

24. `<a href="https://wa.me/6282291714497" ... class="btn">Hubungi Saya</a>`  
    Tombol utama untuk menghubungi lewat WhatsApp.

25. `<ul class="ul-icons">`  
    Daftar ikon sosial media.  
    - GitHub → `<i class="bx bxl-github"></i>`  
    - LinkedIn → `<i class="bx bxl-linkedin"></i>`  
    - Instagram → `<i class="bx bxl-instagram"></i>`  
    - TikTok → `<i class="bx bxl-tiktok"></i>`  
    Semua diberi animasi `fade-up` dengan delay bertingkat (1200–1500ms).

26. `</div>`  
    Menutup `hero-info`.

27. `<div class="hero-img"> <img src="fotoUtama.jpg" alt="person-img"/> </div>`  
    Menampilkan foto profil bulat dengan efek glow.  
    - Gambar diambil dari file lokal `fotoUtama.jpg`.

28. `</div>`  
    Menutup `hero`.

29. `</section>`  
    Menutup kontainer utama.

30. `<!-- AOS JS -->`  
    Komentar untuk menandai penggunaan script AOS.

31. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    Memanggil library AOS JavaScript.

32. `<script> AOS.init(); </script>`  
    Mengaktifkan animasi AOS pada elemen yang diberi atribut `data-aos`.

33. `</body>`  
    Menutup body dokumen.

34. `</html>`  
    Menutup file HTML.
