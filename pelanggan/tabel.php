<?php 
include 'koneksi.php';

$query		=mysqli_query($koneksi, "SELECT * FROM tb_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif ORDER BY tb_pelanggan.id_pelanggan ASC");
$jml		=mysqli_num_rows($query);
$no 		=1;
 ?>

<header>
    <h2>DATA PELANGGAN</h2>
    <hr>
</header>
<a href="../admin/index.php?page=input_pelanggan"><button type="button" class="btn btn-primary">TAMBAH
        DATA</button></a><br><br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Plg</th>
            <th>Pelanggan</th>
            <th>Alamat</th>
            <th>Daya</th>
            <th>Golongan</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <?php 
 	while ($row=mysqli_fetch_assoc($query)) {
		?>
    <tr>
        <td><?php echo $row['id_pelanggan']?></td>
        <td><?php echo $row['pelanggan']?></td>
        <td><?php echo $row['alamat']?></td>
        <td><?php echo $row['daya']?></td>
        <td><?php echo $row['golongan']?></td>
        <td><a href="../admin/index.php?page=update_pelanggan&id_pelanggan=<?php echo $row['id_pelanggan']?>">Update</a>
        </td>
        <td><a href="../admin/index.php?page=delete_pelanggan&id_pelanggan=<?php echo $row['id_pelanggan']?>"
                onclick="return confirm('apakah anda yakin???')">Hapus</a></td>
    </tr>
    <?php  
}
 ?>
</table>
</center>