# Dokumentasi Proyek Portofolio

Folder ini merupakan salinan dari folder pertemuan 3, tetapi ditambahkan 1 halaman yaitu halaman 'gallery.html' yang berisi style gambar dan navbar yang mengarahkan ke tiap halaman lainnya

Proyek ini adalah website portofolio pribadi **Washiatul Akmal** yang terdiri dari 6 halaman utama. Setiap halaman didesain menggunakan **HTML5**, **CSS3**, **Boxicons**, dan **AOS (Animate On Scroll)** untuk animasi.  

## Daftar File
1. `home.html` → Halaman utama (Home) portofolio.  
2. `tentang-saya.html` → Halaman About Me.  
3. `pendidikan.html` → Halaman Education.  
4. `prestasi.html` → Halaman Award.
5. `gallery.html` → Halaman Gallery
6. `kontak.html` → Halaman Contact.
7. `fotoUtama.jpg` → Foto yang diletakkan pada halaman utama (Home).
8. `fotoProfil.jpg` → Foto yang diletakkan pada About Me.
9. `fotoEdu.jpg` → Foto yang diletakkan pada halaman Education.
10. `Gallery` → Folder yang berisi foto yang akan diimpor ke halaman 'gallery.html'.

---
---
# Analisis File gallery.html
---
## Struktur Dasar

`DOCTYPE` & `<html lang="en">` → Menentukan dokumen HTML5 dengan bahasa Inggris.

`<head>` → Berisi metadata, judul halaman (Gallery), serta link ke stylesheet eksternal (AOS dan Boxicons).

`<body>` → Bagian utama berisi tampilan halaman: navbar, hero section, dan galeri.

## CSS Utama
### Reset & Font
* `{`
  `margin: 0;`
  `padding: 0;`
  `box-sizing: border-box;`
  `font-family: Arial, Helvetica, sans-serif;`
`}`


Semua elemen disetel ulang marginnya, padding, dan memakai font default Arial.

### Body
`body {`
  `background-color: #0e1217;`
  `height: 100vh;`
  `display: flex;`
  `justify-content: center;`
  `align-items: center;`
`}`

Warna background gelap.

Isi halaman dipusatkan secara horizontal & vertikal.

### Main Section
`.main-section {`
  `width: 90%;`
  `max-width: 1200px;`
  `height: 80%;`
  `background-color: #4ad0ee1b;`
  `backdrop-filter: blur(10px);`
  `border-radius: 50px;`
  `box-shadow: 5px 5px 20px 1px #4acfee;`
`}`


Kotak utama transparan dengan efek blur.

Border bulat + shadow biru membuat tampilan futuristik.

### Navbar

Logo: `<h1><span>`27`</span>`Elnino`</h1>` → angka 27 berwarna biru (#4acfee).

Menu: list `<ul><li><a>...</a></li></ul>` dengan hover effect (warna biru + glow).

### Hero Section

Teks "GALLERY" dengan efek gradient berjalan `(@keyframes animate-gradient)`.

Disusun dalam flex, antara teks dan konten galeri.

### Gallery Boxes
`.gallery-boxes {`
  `display: grid;`
  `grid-template-columns: repeat(5, 1fr);`
  `gap: 10px;`
`}`


Galeri berupa grid 5 kolom.

Tiap kartu `(.gal-card)` punya border biru, rounded, dan efek hover.

Gambar dipotong dengan object-fit: cover agar proporsional.

## Isi Konten
### Navbar

Home → home.html

About Me → about-me.html

Education → edu.html

Award → award.html

Gallery (active) → gallery.html

Contact → contact.html

Hero Section (Gallery)

Berisi 5 kartu foto:

foto1.png → Santai Estetik

foto2.png → Potrait Berkesan

foto3.png → Gaya Malam

foto4.png → Aura Klasik

foto5.png → Street Casual

Semua diberi animasi AOS (Animate On Scroll) seperti zoom-in dengan delay bertahap.

## Script
`<script src="https://unpkg.com/aos@next/dist/aos.js">``</script>`
`<script>`
  `AOS.init();`
`</script>`


→ Mengaktifkan animasi AOS saat halaman discroll.

## Responsive

Jika layar `<980px`, maka navbar menu `(ul)` hilang (disembunyikan).

Hero berubah jadi kolom agar konten tetap rapi di layar HP.

## Ringkasan

gallery.html adalah halaman galeri dengan desain futuristik & modern.

Navbar rapi dengan efek glow.

Galeri berbentuk grid 5 foto dengan animasi saat muncul.

Warna dominan biru neon di atas background gelap, memberi kesan elegan.

Sudah mendukung responsive untuk perangkat kecil.
