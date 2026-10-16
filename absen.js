// Ganti halaman
function showPage(page, event) {
  // Hilangkan semua konten aktif
  document.querySelectorAll('.content-page').forEach(p => p.classList.remove('active'));

  // Tampilkan halaman yang dipilih
  document.getElementById(page).classList.add('active');

  // Atur status aktif pada menu sidebar
  document.querySelectorAll('.sidebar a').forEach(link => link.classList.remove('active'));
  
  // Tambahkan class active pada link yang diklik
  event.currentTarget.classList.add('active');
}

// Menampilkan tanggal dan jam secara real-time
function updateWaktu() {
  const now = new Date();
  const tanggal = now.toLocaleDateString('id-ID', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
  const jam = now.toLocaleTimeString('id-ID');
  document.getElementById('tanggal').textContent = `Tanggal: ${tanggal}`;
  document.getElementById('jam').textContent = `Jam Masuk: ${jam}`;
}
setInterval(updateWaktu, 1000);
updateWaktu();

// Fungsi logout
function logout() {
  alert("Anda telah keluar dari dashboard siswa.");
  window.location.href = "index.html";
}














