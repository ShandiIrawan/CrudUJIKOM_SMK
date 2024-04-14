<?php
include 'koneksi.php';

$query	=mysqli_query($koneksi, "SELECT*FROM tb_bayar INNER JOIN  tb_tagihan ON tb_bayar.id_tagihan=tb_tagihan.id_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan=tb_pelanggan.id_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif  ");
$no=1;

?>
<h2>Riwayat Pembayaran</h2>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID Bayar</th>

            <th>ID Pelanggan</th>
            <th>Pelanggan</th>
            <th>Tarif</th>
            <th>Tarif Permeter</th>
            <th>Tgl Bayar </th>
            <th>Denda</th>
            <th>Biaya Admin</th>
            <th>Total Bayar</th>
        </tr>
    </thead>
    <?php
while ($row=mysqli_fetch_assoc($query)) {
	?>
    <tr>
        <td><?php echo $row['id_bayar'] ?></td>
        <td><?php echo $row['id_pelanggan'] ?></td>
        <td><?php echo $row['pelanggan'] ?></td>
        <td><?php echo $row['golongan']; echo "-".$row['daya'];?></td>
        <td><?php echo $row['tarifpermeter'] ?></td>
        <td><?php echo $row['tgl_bayar'] ?></td>
        <td><?php echo $row['denda'] ?></td>
        <td><?php echo $row['biaya_admin'] ?></td>
        <td><?php echo $row['total_bayar'] ?></td>
    </tr>
    <?php
}
?>
</table>