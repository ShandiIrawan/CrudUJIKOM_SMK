<?php
include '../koneksi.php';

$id_tagihan=$_GET['id_tagihan'];
$query	=mysqli_query($koneksi, "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan=tb_pelanggan.id_pelanggan WHERE id_tagihan='$id_tagihan'");
while ($row=mysqli_fetch_assoc($query)) {
	?>
<h2>Form Ubah Tagihan</h2>
<hr>

<form action="../admin/index.php?page=simpan_update_tagihan" method="POST">

    <div class="form-group">
        <label>Id Tagihan</label>
        <input value="<?php echo $row['id_tagihan']?>" readonly="" required="" name="id_tagihan" type="text"
            class="form-control" placeholder="Masukkan ID Tagihan">
    </div>

    <div class="form-group">
        <label>Id Pelanggan</label>
        <input value="<?php echo $row['id_pelanggan']?>" readonly="" required="" name="id_pelanggan" type="text"
            class="form-control" placeholder="Masukkan ID Tagihan">
    </div>

    <div class="form-group">
        <label>Periode Tagihan</label>
        <select class="form-control" name="periode_tagihan" required>
            <option><?php echo $row['periode_tagihan']?></option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>
            <option value="Maret">Maret</option>
            <option value="April">April</option>
            <option value="Mei">Mei</option>
            <option value="Juni">Juni</option>
            <option value="Juli">Juli</option>
            <option value="Agustus">Agustus</option>
            <option value="September">September</option>
            <option value="Oktober">Oktober</option>
            <option value="November">November</option>
            <option value="Desember">Desember</option>
        </select>
    </div>

    <div class="form-group">
        <label>Tgl Jatuh Tempo</label>
        <input value="<?php echo $row['tgl_jatuh_tempo']?>" required="" name="tgl_jatuh_tempo" type="date"
            class="form-control">
    </div>

    <div class="form-group">
        <label hidden>Status Bayar</label>
        <input value="<?php echo $row['status_bayar'] ?>" hidden="" readonly required="" name="status_bayar" type="text"
            class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Ubah</button>
    <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>

</form>
<?php
}
?>