1. <!DOCTYPE html>
   → Menentukan bahwa dokumen ini menggunakan standar HTML5.

2. <html lang="en">
   → Elemen root HTML dengan bahasa utama "English".

3. <head> ... </head>
   → Bagian untuk metadata, judul, dan style halaman.

4. <meta charset="UTF-8" />
   → Mengatur encoding karakter menjadi UTF-8 agar mendukung simbol dan teks global.

5. <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   → Membuat halaman responsive pada perangkat mobile.

6. <title>Contact</title>
   → Judul tab browser yang ditampilkan adalah "Contact".

7. <!-- AOS CSS -->
   → Komentar penanda untuk library AOS (Animate On Scroll).

8. <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
   → Menghubungkan stylesheet eksternal dari AOS untuk animasi.

9. <!-- Boxicons CSS -->
   → Komentar penanda untuk library ikon Boxicons.

10. <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet"/>
    → Memanggil Boxicons untuk digunakan sebagai ikon di halaman.

11. <style> ... </style>
    → Bagian CSS internal untuk styling halaman.

12. * { margin: 0; padding: 0; box-sizing: border-box; font-family: Arial, Helvetica, sans-serif; }
    → Reset CSS global dan penggunaan font default.

13. body { background-color: #0e1217; height: 100vh; display: flex; justify-content: center; align-items: center; }
    → Background hitam kebiruan, konten diposisikan di tengah layar.

14. .main-section { width: 90%; max-width: 1200px; min-height: 80%; background: #4ad0ee1b; backdrop-filter: blur(10px); border-radius: 50px; box-shadow: 5px 5px 20px #4acfee; display: flex; flex-direction: column; padding: 30px 20px; margin: auto; }
    → Container utama dengan efek blur, transparansi, dan bayangan.

15. nav { display: flex; justify-content: space-between; align-items: center; padding: 0 40px; }
    → Navigasi horizontal dengan logo di kiri dan menu di kanan.

16. nav h1 { color: white; font-size: 30px; font-weight: 900; }
    → Logo teks besar, putih, bold.

17. nav h1 span { color: #4acfee; }
    → Warna biru khusus untuk teks di dalam <span>.

18. nav ul { list-style: none; display: flex; gap: 10px; }
    → Mengatur menu navigasi horizontal tanpa bullet list.

19. nav ul li a { ... }
    → Link navigasi dengan border biru, radius 15px, teks putih, bold, efek transisi hover.

20. nav ul li a:hover, nav ul li a.active { background-color: #4acfee; color: #0e1217; box-shadow: 0 0 10px #4acfee; }
    → Efek hover dan link aktif: latar biru, teks hitam, ada glow.

21. .hero { display: flex; flex-direction: column; align-items: flex-start; padding: 20px 7%; color: white; }
    → Bagian hero berisi konten utama (judul + kontak).

22. .hero-info h2 { margin-top: 20px; font-size: 30px; text-transform: uppercase; background: linear-gradient(...); background-clip: text; -webkit-text-fill-color: transparent; animation: animate-gradient 2.5s infinite; }
    → Judul "KONTAK" dengan efek teks gradient animasi.

23. @keyframes animate-gradient { to { background-position: 200%; } }
    → Animasi gradient bergerak secara horizontal.

24. .contact-container { display: flex; gap: 20px; margin-top: 30px; width: 100%; }
    → Kontainer utama kontak dengan dua bagian (kiri dan kanan).

25. .contact-box { flex: 1; padding: 25px; border: 2px solid #4acfee; border-radius: 20px; background: rgba(255,255,255,0.03); box-shadow: 0 0 15px rgba(74,207,238,0.3); }
    → Style kotak kontak dengan border biru dan efek transparan.

26. .contact-box:hover { border: 2px solid rgba(255,255,255,0.03); box-shadow: 0 0 20px #4acfee; }
    → Efek hover: glow lebih kuat.

27. .contact-left h3 { color: #4acfee; font-size: 40px; margin-bottom: 15px; }
    → Judul besar pada kotak kiri.

28. .contact-left p { color: #ddd; line-height: 1.6; font-size: 20px; }
    → Paragraf penjelasan pada kotak kiri.

29. .contact-right form { display: flex; flex-direction: column; gap: 12px; }
    → Form input pada kotak kanan, disusun vertikal.

30. .contact-right input, .contact-right textarea { background: #a7eedb; padding: 12px; border: none; border-radius: 10px; font-size: 14px; }
    → Input dan textarea dengan warna latar hijau muda dan border radius.

31. .contact-right textarea { resize: none; height: 120px; }
    → Textarea tidak bisa di-resize, tinggi tetap 120px.

32. .contact-right button { padding: 12px; border: none; border-radius: 10px; background: #4acfee; color: #0e1217; font-size: 16px; font-weight: bold; cursor: pointer; transition: 0.3s; }
    → Tombol submit biru dengan teks bold.

33. .contact-right button:hover { background: #00a4c7; color: white; box-shadow: 0 0 12px #4acfee; }
    → Efek hover tombol: warna biru lebih gelap, teks putih, glow biru.

34. @media (max-width: 768px) { .contact-container { flex-direction: column; } }
    → Responsive design: pada layar kecil, dua kolom kontak menjadi satu kolom vertikal.

35. <body> <section class="main-section"> ... </section> </body>
    → Struktur utama body dengan satu section.

36. <nav> ... </nav>
    → Navigasi halaman dengan logo "27Elnino" dan menu (Home, About Me, Education, Award, Contact).

37. <h1 data-aos="zoom-in"> <span>27</span>Elnino </h1>
    → Logo dengan animasi zoom-in.

38. <ul> <li><a href="...">...</a></li> ... </ul>
    → Menu navigasi, dengan "Contact" sebagai halaman aktif.

39. <div class="hero"> ... </div>
    → Bagian hero berisi judul dan dua kotak kontak.

40. <h2 data-aos="fade-left">KONTAK</h2>
    → Judul utama dengan animasi fade-left.

41. <div class="contact-container"> ... </div>
    → Kontainer dengan dua kolom (kiri dan kanan).

42. <div class="contact-box contact-left"> <h3>Mari Terhubung!</h3> <p>...</p> </div>
    → Kotak kiri berisi teks ajakan untuk menghubungi.

43. <div class="contact-box contact-right"> <form> ... </form> </div>
    → Kotak kanan berisi form input.

44. <form action="#" method="post"> ... </form>
    → Formulir sederhana dengan input teks, email, textarea pesan, dan tombol submit.

45. <input type="text" placeholder="Nama Anda" required />
    → Input teks wajib diisi untuk nama.

46. <input type="email" placeholder="Email Anda" required />
    → Input email wajib diisi.

47. <textarea placeholder="Pesan Anda..." required></textarea>
    → Kotak teks untuk pesan.

48. <button type="submit">Kirim Pesan</button>
    → Tombol untuk mengirim form.

49. <!-- AOS JS -->
    → Komentar penanda untuk JavaScript AOS.

50. <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    → Menambahkan file eksternal AOS JS.

51. <script> AOS.init(); </script>
    → Inisialisasi AOS agar animasi berjalan.

52. </html>
    → Penutup dokumen HTML.
