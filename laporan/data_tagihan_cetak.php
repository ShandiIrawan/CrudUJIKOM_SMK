<?php
include '../koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"SELECT*FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_pelanggan.id_pelanggan=tb_tagihan.id_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif ")

?>
<style type="text/css">
</style>
<center>
	<h2>DATA TAGIHAN PLN</h2>
	<table width="900" border="1" cellpadding="10" cellspacing="1">
		<tr style="background-color: #0099ff; font-size: 16pt;">
			<th height="50">No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Periode Tagihan</th>
			<th>Jml Meter</th>
			<th>Status Bayar</th>
		</tr>
		<?php
		while ($row=mysqli_fetch_assoc($query)) {
		?>
		<tr align="center">
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['pelanggan']; ?></td>
			<td><?php echo $row['alamat']; ?></td>
			<td><?php echo $row['periode_tagihan']; ?></td>
			<td><?php echo $row['meter_akhir']-$row['meter_awal']; ?> </td>
			<td><?php echo $row['status_bayar']; ?></td>
		</tr>
		<?php
		}
		?>
	</table>
</center>

<script type="text/javascript">
	window.print()
</script>