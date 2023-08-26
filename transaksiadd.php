<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Transaksi</title>
  <link rel="stylesheet" href="transaksiadd.css">
</head>

<body>
  <div class="container">
    <h2>Input Data Transaksi Rental</h2>
    <form name="form1" method="post" action="" enctype="multipart/form-data">
      <table>
        <tr>
          <th>no_registrasi</th>
          <td><input type="text" name="no_registrasi" id="no_registrasi"></td>
        </tr>
        <tr>
          <th>nama</th>
          <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
          <th>noplat</th>
          <td><input type="text" name="noplat" id="noplat"></td>
        </tr>
        <tr>
          <th>nama_Kendaraan</th>
          <td><input type="text" name="nama_kendaraan" id="nama_kendaraan"></td>
        </tr>
        <tr>
          <th>tipe_kendaraan</th>
          <td><input type="text" name="tipe_kendaraan" id="tipe_kendaraan" placeholder="Manual / Metic"></td>
        </tr>
        <tr>
          <th>layanan</th>
          <td><input type="text" name="layanan" id="layanan" placeholder="Tipe: A / B" onchange="updateBiayaService()">
          </td>
        </tr>
        <tr>
          <th>biaya_service</th>
          <td><input type="text" name="biaya_service" id="biaya_service" readonly></td>
        </tr>
        <tr>
          <th></th>
          <td><input type="submit" name="hitung" id="hitung" value="Simpan Data"></td>
        </tr>
        <tr>
          <th></th>
          <td><a href="transaksi.php"><button type="button">Kembali</button></a></td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>



<?php

// error_reporting(0);
if (isset($_POST["hitung"])) {
  include "koneksi.php";

  $layanan = $_POST['layanan'];
  $biaya_service = $_POST['biaya_service'];

  $sqlt = mysqli_query($kon, "INSERT INTO transaksi (no_registrasi, nama, noplat, nama_kendaraan, tipe_kendaraan, layanan, biaya_service) VALUES ('$_POST[no_registrasi]', '$_POST[nama]', '$_POST[noplat]', '$_POST[nama_kendaraan]', '$_POST[tipe_kendaraan]' , '$layanan', '$biaya_service')");

  if ($sqlt) {
    echo "Data Berhasil Disimpan";
  } else {
    echo "Gagal Menyimpan";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1;URL=transaksi.php'>";
}
?>

<script>
  function updateBiayaService() {
    var layananInput = document.getElementById("layanan");
    var biayaServiceInput = document.getElementById("biaya_service");

    if (layananInput.value === "A") {
      biayaServiceInput.value = "1500000";
    } else if (layananInput.value === "B") {
      biayaServiceInput.value = "1000000";
    } else {
      biayaServiceInput.value = "0";
    }
  }
</script>