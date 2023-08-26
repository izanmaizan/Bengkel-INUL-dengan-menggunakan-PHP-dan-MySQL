<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="costumeradd.css">
</head>

<body>
    <title>edit data</title>
    <?php
    include "koneksi.php";

    if (isset($_GET['idn'])) {
        $idn = $_GET['idn'];

        $sqln = mysqli_query($kon, "SELECT * FROM data_costumer WHERE no_registrasi='$idn'");
        $rn = mysqli_fetch_array($sqln);
    }

    if (isset($_POST["simpan"])) {
        $no_registrasi = $_POST['no_registrasi'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $notlp = $_POST['notlp'];
        $noplat = $_POST['noplat'];
        $nama_kendaraan = $_POST['nama_kendaraan'];
        $tipe_kendaraan = $_POST['tipe_kendaraan'];

        $update_query = "UPDATE data_costumer SET nama=?, alamat=?, notlp=?, noplat=?, nama_kendaraan=?, tipe_kendaraan=? WHERE no_registrasi=?";
        $stmt = mysqli_prepare($kon, $update_query);
        mysqli_stmt_bind_param($stmt, "sssssss", $nama, $alamat, $notlp, $noplat, $nama_kendaraan, $tipe_kendaraan, $no_registrasi);

        if (mysqli_stmt_execute($stmt)) {
            echo "Data berhasil diubah";
        } else {
            echo "Gagal mengubah";
        }

        mysqli_stmt_close($stmt);
        echo "<META HTTP-EQUIV='refresh' content='1 ;URL=costumer.php'>";
    }

    mysqli_close($kon);
    ?>
    <div class="entry-container">
        <div class="entry-header">Edit Data</div>

        <form name="form1" method="post" action="" enctype="multipart/form-data" class="entry-form">
            <center>
                <table>
                    <tr>
                        <td>no.registrasi</td>
                        <td><input type="text" name="no_registrasi" id="no_registrasi" readonly
                                value="<?php echo $rn['no_registrasi']; ?>"></td>
                    </tr>
                    <tr>
                        <td>nama</td>
                        <td><input type="text" name="nama" id="nama" value="<?php echo $rn['nama']; ?>"></td>
                    </tr>
                    <tr>
                        <td>alamat</td>
                        <td><input type="text" name="alamat" id="alamat" value="<?php echo $rn['alamat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>notlp</td>
                        <td><input type="text" name="notlp" id="notlp" value="<?php echo $rn['notlp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>noplat</td>
                        <td><input type="text" name="noplat" id="noplat" value="<?php echo $rn['noplat']; ?>"></td>
                    </tr>
                    <tr>
                        <td>nama_kendaraan</td>
                        <td><input type="text" name="nama_kendaraan" id="nama_kendaraan"
                                value="<?php echo $rn['nama_kendaraan']; ?>"></td>
                    </tr>
                    <tr>
                        <td>tipe_kendaraan</td>
                        <td><input type="text" name="tipe_kendaraan" id="tipe_kendaraan"
                                value="<?php echo $rn['tipe_kendaraan']; ?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" name="simpan" id="simpan" value="Edit Data"
                                class="edit-data"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="costumer.php" class="kembali">Kembali</a></td>
                    </tr>
                </table>
        </form>
    </div>
</body>

</html>