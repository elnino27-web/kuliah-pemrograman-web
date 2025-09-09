# Dokumentasi Proyek Portofolio

Proyek ini adalah website portofolio pribadi **Washiatul Akmal** yang terdiri dari 5 halaman utama. Setiap halaman didesain menggunakan **HTML5**, **CSS3**, **Boxicons**, dan **AOS (Animate On Scroll)** untuk animasi.  

## Daftar File
1. `home.html` → Halaman utama portofolio.  
2. `tentang-saya.html` → Halaman About Me.  
3. `pendidikan.html` → Halaman Education.  
4. `prestasi.html` → Halaman Award.  
5. `kontak.html` → Halaman Contact.



# Analisis File `home.html`

File ini adalah halaman utama website portofolio **Washiatul Akmal**, berfungsi sebagai **landing page** dengan tampilan foto, perkenalan singkat, tombol kontak, dan link ke media sosial.

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Mendefinisikan dokumen menggunakan standar **HTML5**.

2. `<html lang="en">`  
   → Tag HTML pembuka dengan atribut bahasa **Inggris**.

3. `<head>` … `</head>`  
   → Bagian kepala berisi metadata, judul, link CSS eksternal, dan style.

4. `<meta charset="UTF-8" />`  
   → Encoding UTF-8 agar mendukung teks multibahasa.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Membuat tampilan halaman responsif di berbagai ukuran layar.

6. `<title>Portofolio Akmal</title>`  
   → Judul tab browser: **Portofolio Akmal**.

---

## Bagian Link Eksternal

7. `<!-- AOS CSS -->`  
   → Komentar library animasi AOS.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import stylesheet AOS.

9. `<!-- Boxicons CSS -->`  
   → Komentar library ikon.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>`  
    → Import ikon dari Boxicons.

---

## Bagian CSS Internal

11. Reset CSS dan font  
    ```css
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
    ```
    → Mengatur ulang semua elemen dan font default.

12. `body { background-color: #0e1217; ... }`  
    → Background gelap, konten rata tengah secara vertikal.

13. `.main-section { ... }`  
    → Container utama dengan efek blur, border radius, shadow biru.

### Navbar

14. `nav { display: flex; justify-content: space-between; ... }`  
    → Navbar horizontal.

15. `nav h1` dan `nav h1 span`  
    → Logo teks putih dengan highlight biru pada `<span>`.

16. `nav ul`  
    → Menu navigasi horizontal.  

17. `nav ul li a { ... }`  
    → Styling menu: border biru, font bold, efek hover.  
    → Class `active` menandai halaman aktif (**Home**).

### Hero Section

18. `.hero { display: flex; justify-content: space-between; padding: 50px 10%; ... }`  
    → Layout hero, teks di kiri dan gambar di kanan.

19. `.hero-info h1`  
    → Judul utama "Hi, Saya Washiatul Akmal".

20. `.hero-info h2`  
    → Subjudul "Mahasiswa Informatika" dengan **gradien animasi bergerak**.

21. `.hero-info p`  
    → Paragraf deskripsi singkat, dengan teks rata kiri-kanan.

22. `@keyframes animate-gradient`  
    → Efek gradien berjalan dari kiri ke kanan.

### Buttons & Sosial Media

23. `.Buttons`  
    → Container untuk tombol & ikon sosial.

24. `.btn { ... }`  
    → Tombol **"Hubungi Saya"** berwarna biru dengan border-radius bulat.  
    → Hover: jadi transparan, teks biru.

25. `.ul-icons`  
    → List ikon media sosial horizontal.  

26. `.ul-icons a`  
    → Setiap ikon berbentuk lingkaran dengan border biru.  
    → Hover: background biru, teks gelap.

### Hero Image

27. `.hero-img`  
    → Foto profil berbentuk lingkaran 300x300px, dengan shadow biru.  
    → Hover: efek glow lebih besar.

### Responsif

28. `@media (max-width: 980px)`  
    → Hero jadi kolom, teks & gambar ditumpuk, navbar disembunyikan.

29. `@media (max-width: 440px)`  
    → Ukuran teks dan gambar diperkecil.

---

## Bagian Body HTML

30. `<section class="main-section">`  
    → Container utama seluruh halaman.

### Navbar

31. `<nav>` … `</nav>`  
    → Logo `<span>27</span>Elnino` + menu navigasi.  
    → Menu aktif: **Home**.

### Hero Section

32. `<div class="hero">` … `</div>`  
    → Container hero utama.

33. **Hero Info**  
    - `<h1>` → Sapaan dan nama.  
    - `<h2>` → Subjudul dengan gradien animasi.  
    - `<p>` → Deskripsi singkat.  

34. **Buttons**  
    - Tombol "Hubungi Saya" dengan link ke WhatsApp.  
    - Ikon sosial media (GitHub, LinkedIn, Instagram, TikTok) dengan Boxicons.

35. **Hero Image**  
    - Foto `fotoUtama.jpg` ditampilkan dalam lingkaran.

---

## Bagian Script

36. `<!-- AOS JS -->`  
    → Komentar.

37. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import library AOS.

38. `<script> AOS.init(); </script>`  
    → Inisialisasi animasi AOS.

---

## Ringkasan

Halaman `home.html` berfungsi sebagai **halaman utama portofolio**, dengan fitur:  
- Navbar navigasi.  
- Hero section: sapaan, nama, subjudul, deskripsi singkat.  
- Tombol kontak langsung ke WhatsApp.  
- Ikon sosial media interaktif (GitHub, LinkedIn, Instagram, TikTok).  
- Foto profil dengan efek hover.  
- Animasi AOS untuk setiap elemen.  
- Responsif untuk desktop & mobile.  



# Analisis File `tentang-saya.html`

Berikut adalah analisis baris per baris dari file `tentang-saya.html` yang menampilkan halaman **About Me / Tentang Saya** dengan HTML, CSS, dan animasi menggunakan AOS (Animate On Scroll):

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Mendeklarasikan bahwa dokumen menggunakan **HTML5**.

2. `<html lang="en">`  
   → Tag pembuka HTML dengan atribut `lang="en"` menandakan bahasa dokumen adalah **Inggris**.

3. `<head>`  
   → Bagian kepala yang berisi metadata, judul halaman, link eksternal CSS, dan CSS internal.

4. `<meta charset="UTF-8" />`  
   → Mengatur encoding karakter menjadi **UTF-8**.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Agar tampilan website **responsif** di berbagai ukuran layar.

6. `<title>About Me</title>`  
   → Judul tab browser saat halaman dibuka.

---

## Bagian Link Eksternal CSS

7. `<!-- AOS CSS -->`  
   → Komentar penanda library animasi AOS.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import stylesheet AOS.

9. `<!-- Boxicons CSS -->`  
   → Komentar penanda library ikon Boxicons.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />`  
    → Import Boxicons untuk ikon hobi.

---

## Bagian CSS Internal

11. `<style>` … `</style>`  
    → Membuka blok CSS internal.

### Reset dan Body

12. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset CSS global dan set font default.

13. `body { background-color: #0e1217; height: 100vh; display: flex; justify-content: center; align-items: center; }`  
    → Latar belakang gelap, konten diposisikan **center** dengan flexbox.

### Main Section

14. `.main-section { ... }`  
    → Container utama dengan:  
       - Lebar `90%`, max `1200px`  
       - Tinggi `80%`  
       - Efek blur (`backdrop-filter`)  
       - Border radius `50px` dan shadow biru  
       - Flexbox arah kolom  

### Navbar

15. `nav { display: flex; justify-content: space-between; align-items: center; }`  
    → Navbar horizontal dengan logo kiri dan menu kanan.

16. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Styling logo teks.

17. `nav h1 span { color: #4acfee; }`  
    → Memberi warna biru pada teks di dalam `<span>`.

18. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Menu navigasi horizontal.

19. `nav ul li a { ... }`  
    → Link navigasi dengan border biru, padding, border radius, dan transisi.

20. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Saat hover/aktif, background biru dan teks gelap dengan efek glow.

### Hero Section

21. `.hero { display: flex; justify-content: space-between; padding: 20px 9%; }`  
    → Bagian utama konten (info + gambar profil).

22. `.hero-info h1 { font-size: 60px; }`  
    → Judul besar (meskipun tidak digunakan dalam isi).

23. `.hero-info h2 { ... }`  
    → Judul **TENTANG SAYA** dengan animasi gradient teks.

24. `@keyframes animate-gradient { to { background-position: 200%; } }`  
    → Animasi gradien bergerak ke kanan.

25. `.hero-info p { max-width: 550px; text-align: justify; }`  
    → Paragraf deskripsi dengan perataan justify.

### Hobby Section

26. `.hobby-list { display: flex; gap: 25px; }`  
    → Deretan hobi horizontal.

27. `.hobby-item { display: flex; flex-direction: column; align-items: center; }`  
    → Item hobi (ikon + teks).

28. `.hobby-item i { font-size: 20px; border: 2px solid #4acfee; border-radius: 50%; padding: 15px; transition: 0.3s; }`  
    → Ikon hobi dalam lingkaran dengan border biru.

29. `.hobby-item i:hover { background: #4acfee; color: #0e1217; box-shadow: 0 0 10px #4acfee; }`  
    → Efek hover pada ikon.

30. `.hobby-item p { font-size: 12px; color: #4acfee; }`  
    → Teks label hobi.

### Hero Image

31. `.hero-img { width: 300px; height: 300px; border-radius: 50%; overflow: hidden; box-shadow: 0 0 10px #4eddfd; }`  
    → Gambar profil lingkaran dengan shadow.

32. `.hero-img:hover { box-shadow: 0 0 25px #4acfee; }`  
    → Efek hover gambar.

33. `.hero-img img { object-fit: cover; border-radius: 50%; }`  
    → Gambar memenuhi container lingkaran.

### Responsif

34. `@media (max-width: 980px) { ... }`  
    → Layout hero menjadi kolom, gambar membesar, menu navbar disembunyikan.

35. `@media (max-width: 440px) { ... }`  
    → Mengatur ukuran teks dan gambar untuk layar kecil.

---

## Bagian Body HTML

36. `<body>` … `</body>`  
    → Awal konten utama.

37. `<section class="main-section">`  
    → Container utama seluruh isi halaman.

### Navbar

38. `<nav>` … `</nav>`  
    → Berisi logo `<h1><span>27</span>Elnino</h1>` dan menu navigasi.  
    → Tiap `<li>` diberi atribut **AOS** (`data-aos`) untuk animasi scroll.  
    → Menu: Home, About Me (aktif), Education, Award, Contact.

### Hero Section

39. `<div class="hero">`  
    → Container hero.

40. `<div class="hero-info">`  
    → Bagian informasi pribadi.  

41. `<h2 TENTANG SAYA>`  
    → Judul bagian dengan animasi fade-left.

42. `<p> ... </p>`  
    → Paragraf perkenalan diri (nama, asal, jurusan).  

43. `<p> ... </p>`  
    → Paragraf tentang hobi sepakbola, minat web, dan motivasi belajar.  

44. `<h4>HOBBY:</h4>`  
    → Subjudul daftar hobi.  

45. `<div class="hobby-list"> ... </div>`  
    → Daftar hobi dengan ikon Boxicons (Coding, Gaming, Football, Movie, Music, Cycling).  
    → Setiap item diberi animasi `data-aos="fade-up"` dengan delay berbeda.

### Hero Image

46. `<div class="hero-img"> <img src="fotoProfil.jpg" alt="person-img" /> </div>`  
    → Foto profil dalam lingkaran dengan efek animasi `zoom-in-left`.

---

## Bagian Script

47. `<!-- AOS JS -->`  
    → Komentar penanda.

48. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import file JavaScript AOS.

49. `<script> AOS.init(); </script>`  
    → Inisialisasi AOS agar animasi aktif.

50. `</html>`  
    → Penutup dokumen.

---

## Ringkasan
File `tentang-saya.html` menampilkan halaman **About Me** dengan:  
- **Navbar interaktif** (logo + link).  
- **Hero section** berisi teks perkenalan diri, daftar hobi dengan ikon, dan foto profil.  
- **Animasi AOS** pada elemen teks, ikon, dan gambar.  
- **CSS gradient teks** pada judul.  
- **Desain responsif** untuk mobile.  



# Analisis File `pendidikan.html`

Berikut adalah analisis baris per baris dari file `pendidikan.html` yang menampilkan halaman **Education / Pendidikan** dengan HTML, CSS, dan animasi AOS (Animate On Scroll):

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Menentukan dokumen ini menggunakan standar **HTML5**.

2. `<html lang="en">`  
   → Tag pembuka HTML dengan atribut bahasa **Inggris**.

3. `<head>`  
   → Bagian kepala berisi metadata, judul halaman, link CSS eksternal, serta CSS internal.

4. `<meta charset="UTF-8" />`  
   → Encoding teks menggunakan **UTF-8**.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Supaya halaman **responsif** di berbagai perangkat.

6. `<title>Education</title>`  
   → Judul tab browser.

---

## Bagian Link Eksternal CSS

7. `<!-- AOS CSS -->`  
   → Komentar untuk library animasi scroll.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import CSS library **AOS**.

9. `<!-- Boxicons CSS -->`  
   → Komentar untuk ikon Boxicons.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />`  
    → Import ikon Boxicons.

---

## Bagian CSS Internal

11. `<style>` … `</style>`  
    → Membuka blok CSS internal.

### Reset dan Body

12. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset CSS global, set font default.

13. `body { background-color: #0e1217; height: 100vh; display: flex; justify-content: center; align-items: center; }`  
    → Latar belakang gelap, layout flexbox untuk center.

### Main Section

14. `.main-section { ... }`  
    → Container utama dengan efek blur, border radius, dan shadow biru.  
    → Menggunakan flexbox kolom.

### Navbar

15. `nav { display: flex; justify-content: space-between; align-items: center; }`  
    → Navbar horizontal.

16. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Styling teks logo.

17. `nav h1 span { color: #4acfee; }`  
    → Warna khusus pada `<span>`.

18. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Menu navigasi horizontal.

19. `nav ul li a { ... }`  
    → Link dengan border biru, padding, radius, transisi.

20. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Efek hover & link aktif.

### Hero Section

21. `.hero { display: flex; justify-content: space-between; padding: 20px 7%; color: white; }`  
    → Bagian utama: info + gambar.

22. `.hero-info h2 { ... }`  
    → Judul **PENDIDIKAN** dengan efek gradien animasi.

23. `@keyframes animate-gradient { to { background-position: 200%; } }`  
    → Animasi gradien bergerak.

### Education Boxes

24. `.education-boxes { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; }`  
    → Layout grid 2 kolom.

25. `.edu-card { ... }`  
    → Kartu pendidikan dengan border biru, background transparan, transisi hover.

26. `.edu-card:hover { ... }`  
    → Efek hover: naik sedikit dan shadow.

27. `.edu-card h3 { font-size: 18px; color: #4acfee; }`  
    → Nama sekolah berwarna biru.

28. `.edu-card p { font-size: 14px; color: white; }`  
    → Tahun pendidikan.

29. `.education-motto { position: fixed; bottom: 50px; left: 100px; font-style: italic; }`  
    → Motto pendidikan selalu tampil di kiri bawah layar.

### Hero Image

30. `.hero-img { width: 200px; height: 300px; border-radius: 20px; overflow: hidden; box-shadow: 0 0 10px #4eddfd; }`  
    → Foto profil pendidikan dalam bentuk persegi panjang.

31. `.hero-img:hover { box-shadow: 0 0 25px #4acfee; }`  
    → Efek hover gambar.

32. `.hero-img img { object-fit: cover; border-radius: 20px; }`  
    → Gambar menyesuaikan container.

### Responsif

33. `@media (max-width: 980px) { ... }`  
    → Layout hero jadi kolom, gambar lebih besar, menu disembunyikan.

34. `@media (max-width: 440px) { ... }`  
    → Ukuran gambar diperkecil.

---

## Bagian Body HTML

35. `<body>` … `</body>`  
    → Konten utama.

36. `<section class="main-section">`  
    → Pembungkus semua isi.

### Navbar

37. `<nav>` … `</nav>`  
    → Logo `<h1><span>27</span>Elnino</h1>` dan menu navigasi.  
    → Link aktif di halaman ini adalah **Education**.  
    → Semua item menu diberi atribut AOS (`data-aos`) untuk animasi saat scroll.

### Hero Section

38. `<div class="hero">`  
    → Container utama.

39. `<div class="hero-info">`  
    → Bagian teks pendidikan.

40. `<h2>PENDIDIKAN</h2>`  
    → Judul bagian dengan animasi fade-left.

41. `<div class="education-boxes"> ... </div>`  
    → Daftar pendidikan berupa kartu:  
       - **SD Negeri 59 Batulappa (2012-2018)**  
       - **SMP Negeri 15 Sinjai (2018-2021)**  
       - **SMA Negeri 7 Sinjai (2021-2024)**  
       - **Universitas Negeri Makassar (2024-Sekarang)**  
    → Setiap kartu punya animasi `zoom-in` dengan delay berbeda.

42. `<div class="education-motto"> ... </div>`  
    → Motto pendidikan ditampilkan di pojok kiri bawah.

### Hero Image

43. `<div class="hero-img"><img src="fotoEdu.jpg" alt="person-img" /></div>`  
    → Gambar profil pendidikan dengan animasi zoom-in-left.

---

## Bagian Script

44. `<!-- AOS JS -->`  
    → Komentar penanda.

45. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import library AOS.

46. `<script> AOS.init(); </script>`  
    → Inisialisasi AOS.

47. `</html>`  
    → Penutup dokumen.

---

## Ringkasan
File `pendidikan.html` menampilkan halaman **Education** dengan:  
- **Navbar interaktif** dengan link aktif pada Education.  
- **Hero section** berisi judul, daftar pendidikan dalam kartu grid, motto, dan foto.  
- **Animasi AOS** pada teks, kartu pendidikan, dan gambar.  
- **CSS gradient teks** pada judul.  
- **Desain responsif** untuk mobile.  



# Analisis File `prestasi.html`

Halaman ini menampilkan **Prestasi (Award)** dengan desain modern, animasi scroll, dan kartu prestasi.

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Menentukan dokumen menggunakan standar **HTML5**.

2. `<html lang="en">`  
   → Tag pembuka HTML, bahasa default **Inggris**.

3. `<head>`  
   → Bagian kepala berisi metadata, judul halaman, dan link CSS.

4. `<meta charset="UTF-8" />`  
   → Encoding teks UTF-8.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Membuat halaman responsif.

6. `<title>Award</title>`  
   → Judul tab browser: **Award**.

---

## Bagian Link Eksternal CSS

7. `<!-- AOS CSS -->`  
   → Komentar, tanda untuk library animasi scroll.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import CSS AOS.

9. `<!-- Boxicons CSS -->`  
   → Komentar untuk ikon Boxicons.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />`  
    → Import Boxicons.

---

## Bagian CSS Internal

11. `<style>` … `</style>`  
    → CSS internal untuk halaman.

### Reset dan Body

12. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset CSS global, set font default.

13. `body { background-color: #0e1217; height: 100vh; display: flex; justify-content: center; align-items: center; }`  
    → Background gelap, layout flex untuk center.

### Main Section

14. `.main-section { ... }`  
    → Container utama dengan efek blur, border radius, shadow biru, padding.

### Navbar

15. `nav { display: flex; justify-content: space-between; align-items: center; }`  
    → Layout navbar horizontal.

16. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Styling logo teks.

17. `nav h1 span { color: #4acfee; }`  
    → Warna biru khusus pada span di logo.

18. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Menu horizontal tanpa bullet.

19. `nav ul li a { ... }`  
    → Link navigasi: border biru, radius, transisi.

20. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Efek hover dan link aktif.

### Hero Section

21. `.hero { display: flex; align-items: center; justify-content: space-between; padding: 20px 7%; color: white; }`  
    → Bagian utama halaman: teks + konten.

22. `.hero-info h2 { ... }`  
    → Judul "PRESTASI" dengan efek gradien animasi.

23. `@keyframes animate-gradient { to { background-position: 200%; } }`  
    → Animasi gradien bergerak.

### Kartu Prestasi

24. `.education-boxes { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; }`  
    → Layout grid 3 kolom.

25. `.edu-card { ... }`  
    → Styling kartu prestasi: border biru, transparan, efek hover.

26. `.edu-card:hover { ... }`  
    → Saat hover, kartu naik sedikit dan shadow muncul.

27. `.edu-card h4 { font-size: 10px; text-align: center; color: #4acfee; }`  
    → Judul prestasi (kecil, biru, rata tengah).

28. `.edu-card p { font-size: 12px; color: white; }`  
    → Tahun prestasi.

### Responsif

29. `@media (max-width: 980px) { ... }`  
    → Untuk layar kecil: hero jadi kolom, navbar disembunyikan.

---

## Bagian Body HTML

30. `<body>` … `</body>`  
    → Isi utama halaman.

31. `<section class="main-section">`  
    → Bungkus seluruh isi.

### Navbar

32. `<nav>` … `</nav>`  
    → Logo `<h1><span>27</span>Elnino</h1>` + menu navigasi.  
    → Link aktif: **Award (Prestasi)**.  
    → Semua item diberi animasi AOS `fade-up`.

### Hero Section

33. `<div class="hero">`  
    → Container utama.

34. `<div class="hero-info">`  
    → Bagian teks prestasi.

35. `<h2>PRESTASI</h2>`  
    → Judul dengan animasi fade-left.

36. `<div class="education-boxes">`  
    → Daftar prestasi dalam bentuk grid.  
    → Tiap kartu menggunakan `edu-card` dengan animasi `zoom-in`.  
    → Isi prestasi:  
       - Olimpiade Matematika Tingkat Kabupaten (2023)  
       - Olimpiade Fisika Tingkat Kabupaten (2022)  
       - Runner Up 2 GenRe Se-Kabupaten Sinjai (2021)  
       - 5 Besar Olimpiade Matematika SMP (2019)  
       - 3 Besar Olimpiade Matematika SD (2018)  
       - Runner Up Cerdas Cermat BRI (2017)  
       - Runner Up Wisudawan TK/TPA (2016)

37. Penutup `</div>` … `</div>`  
    → Menutup section hero.

---

## Bagian Script

38. `<!-- AOS JS -->`  
    → Komentar.

39. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import JS AOS.

40. `<script> AOS.init(); </script>`  
    → Inisialisasi animasi scroll.

41. `</html>`  
    → Penutup dokumen.

---

## Ringkasan
File `prestasi.html` menampilkan halaman **Prestasi** dengan:  
- **Navbar interaktif**, link aktif pada Award.  
- **Hero section** berisi judul PRESTASI.  
- **Daftar prestasi** ditampilkan dalam bentuk **grid 3 kolom** dengan animasi AOS.  
- **Efek gradien animasi** pada judul.  
- **Desain responsif** untuk layar kecil.  



# Analisis File `kontak.html`

File ini adalah halaman **Contact (Kontak)** pada website portfolio, menampilkan form pesan dan informasi kontak dengan desain modern dan animasi AOS.

---

## Bagian Struktur Dasar HTML

1. `<!DOCTYPE html>`  
   → Menentukan bahwa dokumen menggunakan standar **HTML5**.

2. `<html lang="en">`  
   → Tag pembuka HTML, bahasa default **Inggris**.

3. `<head>` … `</head>`  
   → Bagian kepala berisi metadata, judul, link CSS eksternal, dan style.

4. `<meta charset="UTF-8" />`  
   → Encoding UTF-8 agar mendukung semua karakter.

5. `<meta name="viewport" content="width=device-width, initial-scale=1.0" />`  
   → Membuat halaman responsif di berbagai ukuran layar.

6. `<title>Contact</title>`  
   → Judul tab browser: **Contact**.

---

## Bagian Link Eksternal

7. `<!-- AOS CSS -->`  
   → Komentar untuk library animasi scroll.

8. `<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />`  
   → Import stylesheet AOS.

9. `<!-- Boxicons CSS -->`  
   → Komentar untuk ikon.

10. `<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>`  
    → Import ikon Boxicons.

---

## Bagian CSS Internal

11. `* { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }`  
    → Reset CSS global.

12. `body { background-color: #0e1217; height: 100vh; display: flex; justify-content: center; align-items: center; }`  
    → Background gelap, konten ditengah layar.

13. `.main-section { ... }`  
    → Container utama dengan efek blur, border radius, dan shadow biru.

### Navbar

14. `nav { display: flex; justify-content: space-between; align-items: center; padding: 0 40px; }`  
    → Navbar horizontal.

15. `nav h1 { color: white; font-size: 30px; font-weight: 900; }`  
    → Logo teks.

16. `nav h1 span { color: #4acfee; }`  
    → Warna biru pada bagian logo.

17. `nav ul { list-style: none; display: flex; gap: 10px; }`  
    → Menu horizontal.

18. `nav ul li a { ... }`  
    → Styling menu: border biru, transisi hover.

19. `nav ul li a:hover, nav ul li a.active { ... }`  
    → Efek hover: background biru, teks gelap.

### Hero Section

20. `.hero { display: flex; flex-direction: column; align-items: flex-start; padding: 20px 7%; color: white; }`  
    → Bagian utama, kolom dengan teks dan form.

21. `.hero-info h2 { ... }`  
    → Judul "KONTAK" dengan gradien animasi.

22. `@keyframes animate-gradient { ... }`  
    → Animasi gradien bergerak.

### Contact Section

23. `.contact-container { display: flex; gap: 20px; margin-top: 30px; width: 100%; }`  
    → Container dua kolom (kiri & kanan).

24. `.contact-box { ... }`  
    → Box contact dengan border biru, shadow, dan efek hover.

25. `.contact-left h3 { font-size: 40px; color: #4acfee; }`  
    → Judul box kiri.

26. `.contact-left p { font-size: 20px; color: #ddd; }`  
    → Deskripsi kontak.

27. `.contact-right form { display: flex; flex-direction: column; gap: 12px; }`  
    → Layout form input.

28. `.contact-right input, .contact-right textarea { ... }`  
    → Styling input dan textarea (background hijau muda).

29. `.contact-right button { ... }`  
    → Tombol submit biru dengan hover menjadi lebih gelap.

### Responsif

30. `@media (max-width: 768px) { .contact-container { flex-direction: column; } }`  
    → Jika layar kecil, contact box ditumpuk vertikal.

---

## Bagian Body HTML

31. `<section class="main-section">`  
    → Container utama.

### Navbar

32. `<nav>` … `</nav>`  
    → Logo `<span>27</span>Elnino` + menu navigasi.  
    → Menu aktif: **Contact**.

### Hero

33. `<div class="hero">`  
    → Container utama.

34. `<div class="hero-info"> <h2>KONTAK</h2> </div>`  
    → Judul dengan animasi fade-left.

### Contact Boxes

35. `.contact-container` terbagi dua bagian:

   - **Kiri (contact-left)**  
     → Judul "Mari Terhubung!" + teks deskripsi.  
     → Diberi animasi `zoom-in` delay 200ms.

   - **Kanan (contact-right)**  
     → Form input: Nama, Email, Pesan, dan tombol **Kirim Pesan**.  
     → Diberi animasi `zoom-in` delay 500ms.

36. Penutup `</div>` dan `</section>`.

---

## Bagian Script

37. `<!-- AOS JS -->`  
    → Komentar.

38. `<script src="https://unpkg.com/aos@next/dist/aos.js"></script>`  
    → Import library JS AOS.

39. `<script> AOS.init(); </script>`  
    → Inisialisasi animasi.

---

## Ringkasan

Halaman `kontak.html` menampilkan:  
- **Navbar** dengan highlight menu Contact.  
- **Hero section** dengan judul "KONTAK".  
- **Contact Section** dua kolom:  
  - Kiri → deskripsi & ajakan untuk terhubung.  
  - Kanan → form kontak interaktif (nama, email, pesan).  
- **Animasi AOS** untuk semua elemen.  
- **Desain responsif** untuk mobile.  
