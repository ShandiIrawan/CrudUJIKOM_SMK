<?php
include 'koneksi.php';

$cari	= $_POST['cari'];

$querycari	= mysqli_query($koneksi, "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan=tb_pelanggan.id_pelanggan WHERE tb_tagihan.id_pelanggan='$cari' and tb_tagihan.status_bayar='BELUM BAYAR' ");

$jmlid = mysqli_num_rows($querycari);
if ($jmlid<1) {
	echo '<script>alert("ID Pelanggan tidak ditemukan ATAU Tidak Ada Tagihan");window.location="index.php?page=cari" </script>';
} else {

?>
<h2>Data Tagihan</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Pelanggan</th>
            <th>Nama</th>
            <th>Periode</th>
            <th>Jumlah Meter</th>
            <th width="80">AKSI</th>
        </tr>
    </thead>
    <?php
		$no = 1;
		while ($row = mysqli_fetch_assoc($querycari)) {
			$jmlmeter = $row['meter_akhir']-$row['meter_awal'];
		?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['id_pelanggan'] ?></td>
        <td><?php echo $row['pelanggan'] ?></td>
        <td><?php echo $row['periode_tagihan'] ?></td>
        <td><?php echo $jmlmeter?></td>
        <td><a href="index.php?page=bayar&id_tagihan=<?php echo $row['id_tagihan'] ?>">Bayar</a></td>
    </tr>
    <?php
	}
	?>
</table>
<?php
}
?>