document.getElementById("waForm").addEventListener("submit", function (e) {
  e.preventDefault(); // Supaya form tidak reload halaman

  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var pesan = document.getElementById("pesan").value;

  if (!nama || !email || !pesan) {
    alert("Mohon isi semua data sebelum mengirim.");
    return;
  }

  var text = "Halo, saya " + nama + " (" + email + ")\n\nPesan: " + pesan;
  var url =
    "https://api.whatsapp.com/send?phone=6282291714497&text=" +
    encodeURIComponent(text);

  alert("Kirim pesan ke WhatsApp");

  window.open(url, "_blank");
});
