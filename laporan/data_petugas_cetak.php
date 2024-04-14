<?php
include '../koneksi.php';
$no = 1;
$query = mysqli_query($koneksi,"SELECT*FROM tb_petugas ")

?>
<style type="text/css">
</style>
<center class="font">
    <h2>DATA PETUGAS PLN</h2>
    <table width="900" border="1" cellpadding="5" cellspacing="0">
        <tr style="background-color: #0099ff; font-size: 16pt;">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jabatan</th>
        </tr>
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
</center>
<script type="text/javascript">
window.print()
</script>