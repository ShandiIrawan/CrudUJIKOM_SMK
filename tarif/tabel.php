<?php 
include 'koneksi.php';

$query		=mysqli_query($koneksi, "SELECT * FROM tb_tarif");
 ?>
<a href="../admin/index.php?page=input_tarif"><button type="button" class="btn btn-primary">TAMBAH
        DATA</button></a><br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Id Tarif</th>
            <th>Golongan</th>
            <th>Daya</th>
            <th>Tarifpermeter</th>
            <th>Abonemen</th>
            <th colspan="2" align="center">Action</th>
        </tr>
    </thead>
    <?php 
 	while ($row=mysqli_fetch_assoc($query)) {
		?>
    <tr align="center">
        <td><?php echo $row['id_tarif']?></td>
        <td><?php echo $row['golongan']?></td>
        <td><?php echo $row['daya']?></td>
        <td><?php echo $row['tarifpermeter']?></td>
        <td><?php echo $row['abonemen']?></td>
        <td><a href="../admin/index.php?page=update_tarif&id_tarif=<?php echo $row['id_tarif']?>">Update</a></td>
        <td><a href="../admin/index.php?page=delete_tarif&id_tarif=<?php echo $row['id_tarif']?>"
                onclick="return confirm('Apakah Anda Yakin?')">Hapus</a></td>
    </tr>
    <?php  
}
 ?>
</table>