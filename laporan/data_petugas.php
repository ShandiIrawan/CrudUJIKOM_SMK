<?php
include '../koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"SELECT*FROM tb_petugas ")

?>
<style type="text/css">
</style>
<h2>Data Petugas PLN</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
    </thead>
    <?php
		while ($row=mysqli_fetch_assoc($query)) {
		?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $row['petugas']; ?></td>
        <td><?php echo $row['alamat']; ?></td>
        <td><?php echo $row['jabatan']; ?></td>
    </tr>
    <?php
		}
		?>
</table>