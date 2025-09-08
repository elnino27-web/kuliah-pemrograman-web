1. <!DOCTYPE html>
   → Mendefinisikan bahwa dokumen ini adalah HTML5.

2. <html lang="en">
   → Elemen root HTML dengan atribut bahasa "en" (Inggris).

3. <head>
   → Bagian head untuk metadata, judul, CSS, dan link eksternal.

4. <meta charset="UTF-8" />
   → Mengatur karakter encoding menjadi UTF-8 agar mendukung semua simbol/karakter.

5. <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   → Membuat tampilan responsive sesuai ukuran layar perangkat.

6. <title>Education</title>
   → Judul halaman yang akan tampil di tab browser: "Education".

7. <!-- AOS CSS -->
   → Komentar penanda untuk library AOS.

8. <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   → Menghubungkan file CSS eksternal dari AOS (Animate On Scroll).

9. <!-- Boxicons CSS -->
   → Komentar penanda untuk icon library Boxicons.

10. <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    → Menghubungkan library Boxicons untuk ikon.

11. <style> ... </style>
    → Bagian CSS internal untuk styling halaman.

12. * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
    → Reset CSS global, menghapus margin/padding default, mengatur font standar, dan box-sizing untuk ukuran konsisten.

13. body { background-color: #0e1217; margin: 0; padding: 0; height: 100vh; display: flex; justify-content: center; align-items: center; }
    → Warna latar belakang gelap, body memenuhi tinggi layar, konten di tengah secara horizontal dan vertikal.

14. .main-section { ... }
    → Container utama dengan lebar max 1200px, tinggi 80%, background semi-transparan, efek blur, border-radius, box-shadow, flex column, dan padding.

15. nav { display: flex; justify-content: space-between; align-items: center; padding: 0 40px; }
    → Navigasi dengan flexbox, rata kiri-kanan, dan padding horizontal.

16. nav h1 { color: white; font-size: 30px; font-weight: 900; }
    → Logo teks di navbar berwarna putih, tebal, ukuran 30px.

17. nav h1 span { color: #4acfee; }
    → Memberi warna biru pada teks dalam <span>.

18. nav ul { list-style: none; display: flex; gap: 10px; }
    → Menghapus bullet list, menampilkan menu secara horizontal dengan jarak antar item.

19. nav ul li a { ... }
    → Style untuk link navigasi: padding, border biru, radius 15px, teks putih, bold, dengan transisi animasi hover.

20. nav ul li a:hover, nav ul li a.active { background-color: #4acfee; color: #0e1217; box-shadow: 0 0 10px #4acfee; }
    → Efek hover dan link aktif: background biru, teks hitam, ada glow.

21. .hero { display: flex; align-items: center; justify-content: space-between; padding: 20px 7%; color: white; }
    → Bagian utama hero, elemen diatur sejajar secara horizontal, teks putih.

22. .hero-info h2 { ... }
    → Judul "PENDIDIKAN" dengan font besar, uppercase, gradient animasi bergerak.

23. @keyframes animate-gradient { to { background-position: 200%; } }
    → Animasi gradient berjalan horizontal.

24. .education-boxes { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; margin-top: 20px; margin-bottom: 30px; }
    → Grid dua kolom untuk menampilkan daftar sekolah.

25. .edu-card { ... }
    → Style kartu pendidikan: border biru, padding, transparan, flex column center, animasi hover.

26. .edu-card:hover { transform: translateY(-5px); box-shadow: 0 6px 12px #4acfee; border: rgba(255, 255, 255, 0.05); }
    → Efek hover: kartu naik sedikit, shadow biru.

27. .edu-card h3 { font-size: 18px; color: #4acfee; margin-bottom: 10px; }
    → Judul sekolah berwarna biru.

28. .edu-card p { font-size: 14px; color: white; }
    → Tahun pendidikan ditulis putih.

29. .education-motto { position: fixed; bottom: 50px; left: 100px; font-size: 16px; font-style: italic; color: #ffffff; max-width: 750px; line-height: 1.5; }
    → Motto pendidikan selalu muncul di pojok kiri bawah layar.

30. .hero-img { width: 200px; height: 300px; border-radius: 20px; display: flex; justify-content: center; overflow: hidden; box-shadow: 0 0 10px #4eddfd; margin-top: 55px; }
    → Foto profil pendidikan berbentuk kotak dengan radius, bayangan biru, rasio 3:4.

31. .hero-img:hover { box-shadow: 0 0 25px #4acfee; }
    → Efek hover foto: glow biru lebih terang.

32. .hero-img img { width: 100%; height: 100%; object-fit: cover; border-radius: 20px; }
    → Gambar dalam kotak menyesuaikan tanpa distorsi.

33. @media (max-width: 980px) { ... }
    → Responsif: hero jadi kolom, foto lebih besar, menu disembunyikan.

34. @media (max-width: 440px) { ... }
    → Responsif tambahan: ukuran foto jadi lebih kecil.

35. <body> <section class="main-section"> ... </section> </body>
    → Struktur utama halaman berisi section dengan konten pendidikan.

36. <nav> ... </nav>
    → Bagian navigasi dengan logo "27Elnino" dan daftar menu halaman.

37. <h1 data-aos="zoom-in" data-aos-duration="1000"><span>27</span>Elnino</h1>
    → Judul logo dengan animasi AOS zoom-in 1 detik.

38. <ul> <li><a href="...">...</a></li> ... </ul>
    → Daftar menu navigasi ke halaman lain: Home, About Me, Education, Award, Contact.

39. <div class="hero"> ... </div>
    → Bagian utama hero section berisi info pendidikan, motto, dan foto.

40. <h2 data-aos="fade-left" ...>PENDIDIKAN</h2>
    → Judul utama hero dengan animasi AOS fade-left.

41. <div class="education-boxes"> ... </div>
    → Grid daftar sekolah.

42. <div class="edu-card" ...><h3>SD Negeri 59 Batulappa</h3><p>(2012 - 2018)</p></div>
    → Kartu pendidikan pertama dengan nama SD dan tahun.

43. <div class="edu-card" ...><h3>SMP Negeri 15 Sinjai</h3><p>(2018 - 2021)</p></div>
    → Kartu pendidikan kedua dengan animasi delay 200ms.

44. <div class="edu-card" ...><h3>SMA Negeri 7 Sinjai</h3><p>(2021 - 2024)</p></div>
    → Kartu pendidikan ketiga dengan delay 400ms.

45. <div class="edu-card" ...><h3>Universitas Negeri Makassar (UNM)</h3><p>(2024 - Sekarang)</p></div>
    → Kartu pendidikan keempat dengan delay 600ms.

46. <div class="education-motto" ...> ... </div>
    → Motto pendidikan ditampilkan dengan animasi AOS fade-left.

47. <div class="hero-img" ...><img src="fotoEdu.jpg" alt="person-img" /></div>
    → Foto pendidikan di sebelah kanan dengan efek animasi zoom-in-left.

48. <!-- AOS JS -->
    → Komentar penanda untuk JavaScript AOS.

49. <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    → Menyertakan file JavaScript library AOS.

50. <script> AOS.init(); </script>
    → Mengaktifkan animasi AOS di halaman.

51. </html>
    → Penutup dokumen HTML.
