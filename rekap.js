document.addEventListener("DOMContentLoaded", function () {
  fetch("database/rekap.php")
    .then(response => response.json())
    .then(data => {
      let tbody = document.getElementById("data-absen");
      tbody.innerHTML = "";

      if (data.length === 0) {
        tbody.innerHTML = `
          <tr>
            <td colspan="7" class="loading">Belum ada data absen.</td>
          </tr>`;
        return;
      }

      let no = 1;

      data.forEach(row => {
        let tr = document.createElement("tr");
        tr.innerHTML = `
          <td>${no++}</td>
          <td>${row.nis}</td>
          <td>${row.nama}</td>
          <td>${row.kelas}</td>
          <td>${row.jurusan}</td>
          <td>${row.keterangan}</td>
          <td>${row.tanggal} ${row.jam}</td>
        `;
        tbody.appendChild(tr);
      });
    })
    .catch(err => {
      console.error(err);
      document.getElementById("data-absen").innerHTML = `
        <tr>
          <td colspan="7" class="loading">Gagal mengambil data.</td>
        </tr>`;
    });
});
