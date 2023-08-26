<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Customer</title>
    <link rel="stylesheet" href="costumeradd.css">
</head>

<body>
    <div class="entry-container">
        <div class="entry-header">
            <h2>Entry Data Customer</h2>
        </div>
        <div class="entry-form">
            <form name="form1" method="post" action="" enctype="multipart/form-data">
                <table>

                    <tr>
                        <th>no_registrasi</th>
                        <th><input type="text" name="no_registrasi" id="no_registrasi" /></th>
                    </tr>
                    <tr>
                        <th>nama</th>
                        <th><input type="text" name="nama" id="nama" /></th>
                    </tr>
                    <tr>
                        <th>alamat</th>
                        <th><input type="text" name="alamat" id="alamat" /></th>
                    </tr>
                    <tr>
                        <th>notlp</th>
                        <th><input type="text" name="notlp" id="notlp" /></th>
                    </tr>
                    <tr>
                        <th>noplat</th>
                        <th><input type="text" name="noplat" id="noplat" /></th>
                    </tr>
                    <tr>
                        <th>nama_kendaraan</th>
                        <th><input type="text" name="nama_kendaraan" id="nama_kendaraan" /></th>
                    </tr>
                    <tr>
                        <th>tipe_kendaraan</th>
                        <th><input type="text" name="tipe_kendaraan" id="tipe_kendaraan" /></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <input type="submit" name="simpan" id="simpan" value="simpan data">
                        </th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>
                            <a href="costumer.php"><button type="button">Kembali</button></a>
                        </th>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST["simpan"])) {
        include "koneksi.php";

        $sqlc = mysqli_query($kon, "INSERT INTO data_costumer (no_registrasi, nama, alamat, notlp, noplat, nama_kendaraan, tipe_kendaraan)
        VALUES ('{$_POST['no_registrasi']}', '{$_POST['nama']}', '{$_POST['alamat']}', '{$_POST['notlp']}', '{$_POST['noplat']}', '{$_POST['nama_kendaraan']}', '{$_POST['tipe_kendaraan']}')");

        if ($sqlc) {
            echo "data berhasil di simpan";
        } else {
            echo "data gagal disimpan";
        }
        echo "<META HTTP-EQUIV= 'Refresh' content= '1;URL=costumer.php'>";
    }
    ?>
</body>

</html>