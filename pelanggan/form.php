<!DOCTYPE html>
<?php
include 'koneksi.php';
?>
<html>

<head>
    <title>FORM INPUT PELANGGAN PLN</title>
</head>

<body>
    <h2>Input Pelanggan</h2>
    <hr>
    <form action="../admin/index.php?page=simpan_pelanggan" method="POST">

        <div class="form-group">
            <label>Id Pelanggan</label>
            <input required="" name="id_pelanggan" type="text" class="form-control" placeholder="Masukkan ID Pelanggan"
                required>
        </div>

        <div class="form-group">
            <label>Golongan</label>
            <select class="form-control" name="id_tarif" required>
                <option>Pilih Golongan</option>
                <?php
				$querytarif		=mysqli_query($koneksi, "SELECT * FROM tb_tarif");
				while ($row=mysqli_fetch_assoc($querytarif)) {
					?>
                <option value="<?php echo $row['id_tarif'] ?>">
                    <?php echo $row['golongan']; echo "_".$row['daya'];?></option>
                <?php
				}
				?>
            </select>
        </div>

        <div class="form-group">
            <label>Pelanggan</label>
            <input required="" name="pelanggan" type="text" class="form-control" placeholder="Masukkan Nama Pelanggan"
                required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <textarea required="" name="alamat" class="form-control" id="" cols="30" rows="3"
                placeholder="Masukkan Alamat Pelanggan"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>
    </form>
</body>

</html>