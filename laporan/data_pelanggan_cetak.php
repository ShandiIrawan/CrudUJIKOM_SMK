<?php
include '../koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"SELECT*FROM tb_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif ")

?>
<style type="text/css">

</style>
<center>
    <h2>DATA PELANGGAN PLN</h2>
    <table width="900" border="1" cellpadding="5" cellspacing="0">
        <tr style="background-color: #	9ff; font-size: 16pt;">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Golongan</th>
        </tr>
        <?php
		while ($row=mysqli_fetch_assoc($query)) {
		?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $row['pelanggan']; ?></td>
            <td><?php echo $row['alamat']; ?></td>
            <td><?php echo $row['golongan']; ?></td>
        </tr>
        <?php
		}
		?>
    </table>
</center>
<script type="text/javascript">
window.print()
</script>