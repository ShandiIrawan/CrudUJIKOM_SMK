<?php
include '../koneksi.php';

$query		=mysqli_query($koneksi, "SELECT*FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan=tb_pelanggan.id_pelanggan ");
$no =1;

?>
<h2>DATA TAGIHAN PLN</h2>
<a href="../admin/index.php?page=input_tagihan"><button type="button" class="btn btn-primary">TAMBAH
        DATA</button></a><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>ID Pelanggan</th>
            <th>Periode Tagihan</th>
            <th>Tgl Jatuh Tempo</th>
            <th>Jumlah Meter</th>
            <th>Status Bayar</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <?php 
		while ($row=mysqli_fetch_assoc($query)) {
			$meterawal =$row['meter_awal'];
			$meterakhir =$row['meter_akhir'];
			$jml_meter =$meterakhir-$meterawal;
	?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['id_pelanggan']?></td>
        <td><?php echo $row['periode_tagihan']?></td>
        <td><?php echo $row['tgl_jatuh_tempo']?></td>
        <td><?php echo $jml_meter; ?></td>
        <td><?php echo $row['status_bayar']?></td>
        <td><a href="../admin/index.php?page=update_tagihan&id_tagihan=<?php echo $row['id_tagihan']?>">Update</a>
        </td>
        <td><a href="../admin/index.php?page=delete_tagihan&id_tagihan=<?php echo $row['id_tagihan']?>"
                onclick="return confirm('Apakah anda yakin???')">Hapus</a></td>
    </tr>
    <?php
}
?>
</table>
</center>