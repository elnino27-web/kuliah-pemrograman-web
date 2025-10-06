// Menjalankan kode setelah seluruh dokumen HTML siap
$(document).ready(function () {
  // Toggle class active untuk hamburger menu
  $("#hamburger-menu").on("click", function (e) {
    e.preventDefault();
    $(".navbar-nav").toggleClass("active");
  });

  // Klik di luar elemen untuk menghilangkan nav
  $(document).on("click", function (e) {
    // Jika yang diklik bukan hamburger DAN bukan bagian dari navbar
    if (
      !$(e.target).closest("#hamburger-menu").length &&
      !$(e.target).closest(".navbar-nav").length
    ) {
      $(".navbar-nav").removeClass("active");
    }
  });

  // Konek form reservasi ke WhatsApp
  $("#reservationForm").on("submit", function (e) {
    e.preventDefault();

    // Mengambil nilai dari setiap input menggunakan .val()
    var r_nama = $("#r_nama").val();
    var r_nomor = $("#r_nomor").val();
    var r_jumlah = $("#r_jumlah").val();
    var r_meja = $("#r_meja").val();
    var r_waktu = $("#r_waktu").val();
    var r_tanggal = $("#r_tanggal").val();
    var r_catatan = $("#r_catatan").val();

    // Validasi sederhana
    if (!r_nama || !r_nomor || !r_jumlah || !r_meja || !r_waktu || !r_tanggal) {
      alert("Mohon isi semua data sebelum mengirim!");
      return;
    }

    var r_text =
      "Halo Kedai Nayra, saya " +
      r_nama +
      " (" +
      r_nomor +
      ")\nIngin melakukan reservasi tempat di Kedai Nayra, berikut keterangan saya lampirkan:\n\n" +
      "Jumlah Orang\t\t: " +
      r_jumlah +
      "\n" +
      "Tempat Pilihan\t\t: " +
      r_meja +
      "\n" +
      "Waktu Kedatangan\t: " +
      r_waktu +
      "\n" +
      "Tanggal Kedatangan\t: " +
      r_tanggal +
      "\n" +
      "Catatan Tambahan\t: " +
      (r_catatan || "-") +
      "\n\n" + // Memberi nilai default jika catatan kosong
      "Terima Kasih!";

    var r_url =
      "https://api.whatsapp.com/send?phone=6281242337310&text=" +
      encodeURIComponent(r_text);

    alert("Reservasi melalui WhatsApp");
    window.open(r_url, "_blank");
  });

  // Konek form kontak ke WhatsApp
  $("#contactForm").on("submit", function (e) {
    e.preventDefault();

    var c_nama = $("#c_nama").val();
    var c_nomor = $("#c_nomor").val();
    var c_alamat = $("#c_alamat").val();
    var c_waktu = $("#c_waktu").val();
    var c_pesanan = $("#c_pesanan").val();
    var c_tambahan = $("#c_tambahan").val();

    if (!c_nama || !c_nomor || !c_alamat || !c_waktu || !c_pesanan) {
      alert("Mohon isi semua data sebelum mengirim!");
      return;
    }

    var c_text =
      "Halo Kedai Nayra, saya " +
      c_nama +
      " (" +
      c_nomor +
      ")\nIngin melakukan pemesanan menu di Kedai Nayra, berikut keterangan saya lampirkan:\n\n" +
      "Alamat\t\t\t\t: " +
      c_alamat +
      "\n" +
      "Waktu Pengambilan\t: " +
      c_waktu +
      "\n" +
      "Pesanan\t\t\t\t: " +
      c_pesanan +
      "\n" +
      "Tambahan\t\t\t: " +
      (c_tambahan || "-") +
      "\n\n" +
      "Terima Kasih!";

    var c_url =
      "https://api.whatsapp.com/send?phone=6281242337310&text=" +
      encodeURIComponent(c_text);

    alert("Kirim detail pesanan ke WhatsApp");
    window.open(c_url, "_blank");
  });
});