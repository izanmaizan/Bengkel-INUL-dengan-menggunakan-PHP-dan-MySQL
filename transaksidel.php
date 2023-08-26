<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Transaksi</title>
	<link rel="stylesheet" href="transaksidel.css">
</head>

<body>
    <div class="container">
        <?php
        error_reporting(0);
        include "koneksi.php";
        $sqlt = mysqli_query($kon, "DELETE FROM transaksi WHERE no_registrasi='$_GET[idt]'");

        if ($sqlt) {
            echo "<p>Data Berhasil Dihapus</p>";
        } else {
            echo "<p>Gagal Menghapus</p>";
        }
        echo "<META HTTP-EQUIV = 'Refresh' Content = '1;URL=transaksi.php'>";
        ?>
    </div>
</body>

</html>