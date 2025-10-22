# Aplikasi Diary Digital Sederhana

Sebuah aplikasi web berbasis PHP dan MySQL yang memungkinkan pengguna untuk membuat akun, login, dan mengelola catatan harian pribadi mereka. Proyek ini dibangun sebagai latihan untuk memahami konsep dasar pengembangan web, termasuk otentikasi pengguna dan operasi C.R.U.D (Create, Read, Update, Delete).

---

## ✨ Fitur Utama

* **Otentikasi Pengguna:** Sistem pendaftaran (register) dan masuk (login) yang aman menggunakan *password hashing*.
* **Manajemen Catatan (CRUD):**
    **Create:** Menulis dan menyimpan catatan diary baru.
    **Read:** Menampilkan daftar catatan berdasarkan hari (Senin-Minggu).
    **Update:** Mengedit catatan yang sudah ada.
    **Delete:** Menghapus catatan.
* **Isolasi Data:** Setiap pengguna hanya dapat melihat dan mengelola catatannya sendiri.
* **Tampilan Responsif:** Desain antarmuka yang dapat beradaptasi dengan baik di layar desktop maupun mobile.

---

## 🚀 Teknologi yang Digunakan

* **Backend:** PHP
* **Database:** MySQL
* **Frontend:** HTML & CSS
* **Web Server Lokal:** XAMPP (Apache)

---

## 📂 Struktur Proyek

Berikut adalah struktur file dan folder dari proyek ini:

```text
📁 Pertemuan 9/
│
├── 📁 css/
│   └── 📄 style.css              (Styling untuk seluruh aplikasi)
│
├── 📁 includes/
│   ├── 📄 koneksi.php             (Koneksi ke database - DIABAIKAN GIT)
│   ├── 📄 koneksi.php.example   (Contoh file koneksi untuk diunggah)
│   ├── 📄 header.php              (Bagian atas halaman & menu navigasi)
│   └── 📄 footer.php              (Bagian bawah halaman)
│
├── 📄 index.php                  (Halaman utama/dashboard setelah login)
│
├── 📄 register.php               (Formulir pendaftaran)
├── 📄 proses_register.php        (Logika untuk memproses pendaftaran)
│
├── 📄 login.php                  (Formulir login)
├── 📄 proses_login.php           (Logika untuk memproses login)
│
├── 📄 logout.php                 (Logika untuk proses logout)
│
├── 📄 tambah_catatan.php         (Formulir untuk menambah catatan)
├── 📄 proses_tambah.php          (Logika untuk menyimpan catatan baru)
│
├── 📄 edit_catatan.php           (Formulir untuk mengedit catatan)
├── 📄 proses_edit.php            (Logika untuk memperbarui catatan)
│
├── 📄 hapus_catatan.php           (Logika untuk menghapus catatan)
│
├── 📄 .gitignore                 (Memberitahu Git file mana yang harus diabaikan)
├── 📄 db_diary.sql               (Struktur/Blueprint database, bukan datanya)
└── 📄 README.md                  (File instruksi dan penjelasan proyek)
```

---

## 📂 Penjelasan File Proyek

Berikut adalah penjelasan fungsi dari setiap file dan folder dalam proyek ini.

### Folder Utama & Komponen Inti

* `📁 css/`: Folder ini berisi semua file styling.
    * `style.css`: File utama yang mengatur seluruh tampilan dan nuansa aplikasi, mulai dari warna, font, layout, hingga desain responsif.
* `📁 includes/`: Berisi file-file PHP yang digunakan berulang kali di berbagai halaman.
    *`header.php`: Bagian atas dari setiap halaman web. File ini berisi tag pembuka HTML, menu navigasi, tombol logout, dan yang terpenting, kode untuk memulai *session* dan memeriksa apakah pengguna sudah login.
    * `footer.php`: Bagian bawah dari setiap halaman, berisi tag penutup HTML dan info footer.
    * `koneksi.php`: Jembatan antara aplikasi PHP dan database MySQL. File ini berisi detail koneksi dan logika untuk terhubung ke server database.
* `index.php`: Halaman utama atau "dashboard" yang dilihat pengguna setelah berhasil login. Halaman ini menampilkan daftar catatan harian milik pengguna tersebut.

### Otentikasi Pengguna

* `register.php`: Menampilkan halaman formulir HTML bagi pengguna baru untuk membuat akun.
* `proses_register.php`: File logika yang berjalan di latar belakang. Menerima data dari `register.php`, mengenkripsi password, dan menyimpannya ke tabel `users` di database.
* `login.php`: Menampilkan halaman formulir HTML bagi pengguna untuk masuk ke akun mereka.
* `proses_login.php`: File logika yang memverifikasi username dan password yang dimasukkan pengguna. Jika cocok, file ini akan membuat *session* yang menandakan pengguna berhasil login.
* `logout.php`: File yang menghancurkan *session* pengguna, secara efektif mengeluarkan mereka dari sistem dan mengarahkannya kembali ke halaman login.

### Fitur Manajemen Catatan (CRUD)

* `tambah_catatan.php`: Menampilkan formulir HTML untuk menulis judul, memilih tanggal, dan mengisi isi catatan baru.
* `proses_tambah.php`: Logika untuk menerima data dari `tambah_catatan.php` dan menyimpannya sebagai baris baru di tabel `catatan_harian`, lengkap dengan `user_id` pemiliknya.
* `edit_catatan.php`: Formulir untuk mengedit catatan yang sudah ada. File ini terlebih dahulu mengambil data lama dari database untuk ditampilkan di dalam form.
* `proses_edit.php`: Logika untuk menerima data yang telah diubah dari `edit_catatan.php` dan memperbarui (UPDATE) data tersebut di database.
* `hapus_catatan.php`: Logika untuk menghapus (DELETE) sebuah catatan dari database berdasarkan ID-nya.

### File Pendukung

* `.gitignore`: File konfigurasi untuk Git yang memberitahu file atau folder mana yang tidak perlu diunggah ke repositori (contoh: `koneksi.php` yang berisi password).
* `db_diary.sql`: File "cetak biru" atau skema database. Berisi perintah SQL (`CREATE TABLE`) untuk membuat struktur tabel yang dibutuhkan oleh aplikasi, tanpa menyertakan data apa pun.
* `README.md`: File ini. Berisi dokumentasi dan penjelasan mengenai proyek.

---
