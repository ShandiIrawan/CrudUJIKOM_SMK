<?php 
include '../koneksi.php';

$query		=mysqli_query($koneksi, "SELECT * FROM tb_petugas");
 ?>
<h2>Input Data Petugas</h2>
<hr>
<a href="../admin/index.php?page=input_petugas"><button type="button" class="btn btn-primary">TAMBAH
        DATA</button></a><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Petugas</th>
            <th>Alamat</th>
            <th>Jabatan</th>
            <th>Username</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <?php 
 	while ($row=mysqli_fetch_assoc($query)) {
		?>
    <tr>
        <td width="10"><?php echo $row['id_petugas']?></td>
        <td><?php echo $row['petugas']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['jabatan']?></td>
        <td><?php echo $row['user_name']?></td>
        <td><a href="../admin/index.php?page=update_petugas&id_petugas=<?php echo $row['id_petugas']?>">Update</a>
        </td>
        <td><a href="../admin/index.php?page=delete_petugas&id_petugas=<?php echo $row['id_petugas']?>"
                onclick="return confirm('APAKAH ANDA YAKIN?')">Hapus</a></td>
    </tr>
    <?php  
}
 ?>
</table>