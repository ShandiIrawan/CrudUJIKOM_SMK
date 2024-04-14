<?php
$no=1;
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cetak Laporan</title>
    <style type="text/css">
    .head {
        background-color: #66C2FF;
        font-size: 16pt;

    }

    .head:hover {
        background-color: #0099ff;
    }

    .satu:hover {
        background-color: #1aa3ff;
    }

    .dua:hover {
        background-color: #1aa3ff;
    }

    .tiga:hover {
        background-color: #1aa3ff;
    }
    </style>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Laporan</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tr>
            <td>1</td>
            <td>Data Petugas</td>
            <td><a href="../laporan/data_petugas.php" target="_BLANK">Lihat</a></td>
            <td><a href="../laporan/data_petugas_cetak.php" target="_BLANK">Cetak</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Data Pelanggan</td>
            <td><a href="../laporan/data_pelanggan.php" target="_BLANK">Lihat</a></td>
            <td><a href="../laporan/data_pelanggan_cetak.php" target="_BLANK">Cetak</a></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Data Tagihan</td>
            <td><a href="../laporan/data_tagihan.php" target="_BLANK" class="update">Lihat</a></td>
            <td><a href="../laporan/data_tagihan_cetak.php" target="_BLANK" class="hapus">Cetak</a>
            </td>
        </tr>
    </table>
</body>

</html>