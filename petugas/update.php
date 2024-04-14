<?php
include '../koneksi.php';

$id_petugas=$_GET['id_petugas'];
$query =mysqli_query($koneksi,"SELECT * FROM tb_petugas WHERE id_petugas='$id_petugas'");
while ($row=mysqli_fetch_assoc($query)) {
	
?>
<h2>Ubah Data Petugas</h2>
<hr>
<form action="../admin/index.php?page=simpan_update_petugas" method="POST">
    <div class="form-group">
        <label>Id Petugas</label>
        <input value="<?php echo $row['id_petugas']?>" readonly required="" name="id_petugas" type="text"
            class="form-control" placeholder="Masukkan ID Petugas">
    </div>

    <div class="form-group">
        <label>Nama Petugas</label>
        <input value="<?php echo $row['petugas']?>" required="" name="petugas" type="text" class="form-control"
            placeholder="Masukkan Nama Petugas">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <textarea value="<?php echo $row['alamat']?>" required="" name="alamat" class="form-control" id="" cols="30"
            rows="3" placeholder="Masukkan Alamat Petugas"><?php echo $row['alamat']?></textarea>
    </div>

    <div class="form-group">
        <label>Jabatan</label>
        <select class="form-control" name="jabatan" value="<?php echo $row['jabatan']?>" required>
            <option><?php echo $row['jabatan']?></option>
            <option value="ADMIN">Admin</option>
            <option value="KASIR">Kasir</option>
        </select>
    </div>

    <div class="form-group">
        <label>Username</label>
        <input value="<?php echo $row['user_name']?>" required="" name="user_name" type="text" class="form-control"
            placeholder="Masukkan Username">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input value="<?php echo $row['sandi']?>" required="" name="sandi" type="password" class="form-control"
            placeholder="Masukkan Password">
    </div>

    <button type="submit" class="btn btn-primary">Ubah</button>
    <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>
</form>
<?php
}
?>