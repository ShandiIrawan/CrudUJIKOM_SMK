<?php
include 'koneksi.php';

$id_pelanggan = $_GET['id_pelanggan'];
$query =mysqli_query($koneksi, "SELECT * FROM tb_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif WHERE id_pelanggan='$id_pelanggan'");
while ($row=mysqli_fetch_assoc($query)) 
{
	
?>
<h2>Ubah Data Pelanggan</h2>
<hr>
<form action="../admin/index.php?page=simpan_update_pelanggan" method="POST">

    <div class="form-group">
        <label>Id Pelanggan</label>
        <input value="<?php echo $row['id_pelanggan']?>" readonly required="" name="id_pelanggan" type="text"
            class="form-control" placeholder="Masukkan ID Pelanggan">
    </div>

    <div class="form-group">
        <label>Pelanggan</label>
        <input value="<?php echo $row['pelanggan']?>" name="pelanggan" type="text" class="form-control"
            placeholder="Masukkan Nama Pelanggan" required>
    </div>

    <div class="form-group">
        <label>Golongan</label>
        <select class="form-control" name="id_tarif" required>
            <option><?php echo $row['id_tarif'];?></option>
            <?php
				// $querytarif		=mysqli_query($koneksi, "SELECT * FROM tb_tarif");
				// while ($row=mysqli_fetch_assoc($querytarif)) {
			?>
            <option value="<?php echo $row['id_tarif'] ?>">
                <?php echo $row['golongan']; echo "_".$row['daya'];?></option>
            <?php
				// }
			?>
        </select>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea value="<?php echo $row['alamat']?>" required="" name="alamat" class="form-control" id="" cols="30"
            rows="3" placeholder="Masukkan Alamat Pelanggan"><?php echo $row['alamat']?></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>
</form>
<?php
}
?>