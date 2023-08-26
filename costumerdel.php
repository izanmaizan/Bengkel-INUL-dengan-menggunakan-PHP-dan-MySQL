<?php
error_reporting(0);
include "koneksi.php";
$sqln = mysqli_query($kon, "DELETE FROM data_costumer WHERE no_registrasi='$_GET[idn]'");

$pesan = "";
$kelasPesan = "";

if ($sqln) {
    $pesan = "Data berhasil dihapus.";
    $kelasPesan = "sukses";
} else {
    $pesan = "Gagal menghapus data.";
    $kelasPesan = "gagal";
}

echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hapus Data</title>
    <link rel='stylesheet' href='costumerdel.css'>
</head>
<body>
    <div class='pesan $kelasPesan'>$pesan</div>
    <meta http-equiv='refresh' content='1;URL=costumer.php'>
</body>
</html>";
?>