<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Customer</title>
    <link rel="stylesheet" href="style.css"> <!-- Menggunakan file CSS yang telah Anda sebutkan -->
</head>

<body>
    <div class="header">
        <h1>Bengkel INUL</h1>
    </div>
    <div class="container">
        <h2>Halaman Data Customer</h2>
        <div class="menu-container">
            <a href="costumeradd.php" class="btn customer">Tambah Data</a>
            <a href="index.php" class="btn transaction">Home</a>
        </div>
    </div>
    <div class="data-table">
        <table border="1" cellpadding="5" cellspacing="0" align="center" width="100%">
            <tr>
                <th>no.</th>
                <th>no_registrasi</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>notlp</th>
                <th>noplat</th>
                <th>nama_kendaraan</th>
                <th>type_kendaraan</th>
                <th>aksi</th>
            </tr>
            <?php
            include "koneksi.php";
            $sqln = mysqli_query($kon, "SELECT * FROM data_costumer");
            $no = 1;

            if (!$sqln) {
                echo "Error: " . mysqli_error($kon);
            }

            while ($rn = mysqli_fetch_array($sqln)) {
                echo "
                <tr>
                    <td>$no</td>
                    <td>$rn[no_registrasi]</td>
                    <td>$rn[nama]</td>
                    <td>$rn[alamat]</td>
                    <td>$rn[notlp]</td>
                    <td>$rn[noplat]</td>
                    <td>$rn[nama_kendaraan]</td>
                    <td>$rn[tipe_kendaraan]</td>
                    <td>
                        <a href='costumeredit.php?idn=$rn[no_registrasi]' class='btn customer'>Edit</a>
                        <a href='costumerdel.php?idn=$rn[no_registrasi]' class='btn transaction'>Delete</a>
                    </td>
                </tr>";
                $no++;
            }
            ?>
        </table>
    </div>
</body>

</html>