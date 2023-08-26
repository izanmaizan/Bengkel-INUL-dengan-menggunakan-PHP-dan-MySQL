<!DOCTYPE html>
<html>

<head>
    <title>Data Transaksi</title>
    <link rel="stylesheet" type="text/css" href="transaksi.css">
</head>

<body>
    <div class="container">
        <div class="header-container">
            <h2 class="header">Halaman Data Transaksi Rental</h2>
        </div>
        <div class="action-buttons">
            <a href="transaksiadd.php" class="button add-button">Tambah Data</a>
            <a href="index.php" class="button home-button">Home</a>
        </div>
        <h2 class="sub-header">Daftar Transaksi</h2>
        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No_Registrasi</th>
                    <th>Nama</th>
                    <th>Nomor Plat</th>
                    <th>Nama Kendaraan</th>
                    <th>Tipe Kendaraan</th>
                    <th>Layanan</th>
                    <th>Biaya Service</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $sqlt = mysqli_query($kon, "SELECT * FROM transaksi");
                $no = 1;
                while ($rt = mysqli_fetch_array($sqlt)) {
                    echo "<tr>
            <td>$no</td>
            <td>$rt[no_registrasi]</td>
            <td>$rt[nama]</td>
            <td>$rt[noplat]</td>
            <td>$rt[nama_kendaraan]</td>
            <td>$rt[tipe_kendaraan]</td>
            <td>$rt[layanan]</td>
            <td>$rt[biaya_service]</td>
            <td><a href='transaksidel.php?idt=$rt[no_registrasi]'>Hapus</a></td>
        </tr>";
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>