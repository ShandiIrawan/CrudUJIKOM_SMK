<?php
include 'koneksi.php';

$id_tagihan = $_GET['id_tagihan'];
$query = mysqli_query($koneksi, "SELECT * FROM tb_tagihan INNER JOIN tb_pelanggan ON tb_tagihan.id_pelanggan=tb_pelanggan.id_pelanggan INNER JOIN tb_tarif ON tb_pelanggan.id_tarif=tb_tarif.id_tarif WHERE tb_tagihan.id_tagihan='$id_tagihan'");
$row = mysqli_fetch_assoc($query);

?>
<h2>Bayar Tagihan</h2>
<hr>

<form action="index.php?page=simpan" method="POST">
    <div class="form-group">
        <label>Id Pelanggan</label>
        <input value="<?php echo $row['id_pelanggan']?>" readonly required="" name="id_pelanggan" type="text"
            class="form-control" placeholder="Masukkan ID Pelanggan">
    </div>

    <div class="form-group">
        <label>Petugas</label>
        <input value="<?php echo $_SESSION['petugas']?>" readonly readonly required="" name="petugas" type="text"
            class="form-control" placeholder="Masukkan ID Pelanggan">
    </div>

    <div class="form-group">
        <label>ID Tagihan</label>
        <input value="<?php echo $row['id_tagihan']?>" readonly required="" name="id_tagihan" type="number"
            class="form-control" placeholder="Masukkan ID Pelanggan">
    </div>

    <div class="form-group">
        <label>Nama Pelanggan</label>
        <input value="<?php echo $row['pelanggan']?>" readonly required="" name="pelanggan" type="text"
            class="form-control" placeholder="Masukkan Nama Pelanggan">
    </div>

    <div class="form-group">
        <label>Periode Tagihan</label>
        <input value="<?php echo $row['periode_tagihan']?>" readonly required="" name="periode_tagihan" type="text"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Meter Yang Digunakan</label>
        <?php
		$jmlmeter = $row['meter_akhir']-$row['meter_awal'];
		?>
        <input value="<?php echo $jmlmeter ?>" readonly required="" name="jmlmeter" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label>Daya</label>
        <input value="<?php echo $row['daya']?>" readonly required="" name="daya" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label>Tarif Per Meter</label>
        <input value="<?php echo $row['tarifpermeter']?>" readonly required="" name="tarifpermeter" type="text"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Total Tagihan</label>
        <?php
		$totaltagihan=$row['tarifpermeter']*$jmlmeter;
		?>
        <input value="<?php echo number_format($totaltagihan) ?>" readonly required="" name="total_tagihan" type="text"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Abonemen</label>
        <input value="<?php echo $row['abonemen']?>" readonly required="" name="abonemen" type="text"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Jatuh Tempo</label>
        <input value="<?php echo $row['tgl_jatuh_tempo']?>" readonly required="" name="tgl_jatuh_tempo" type="date"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Denda</label>
        <?php 
		$hariini=date('d/m/y');
		$jatuhtempo = $row['tgl_jatuh_tempo'];
		if ($jatuhtempo<$hariini) {
			 $denda=5000;
		} else {
			 $denda=0;
		}
		
		?>
        <input value="<?php echo $denda ?>" readonly required="" name="denda" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label>Biaya Admin</label>
        <?php
		$biayaadmin=2500;
		?>
        <input value="<?php echo number_format($biayaadmin) ?>" readonly required="" name="biayaadmin" type="text"
            class="form-control">
    </div>

    <div class="form-group">
        <label>Total Bayar</label>
        <?php
		$totalbayar=$totaltagihan+$row['abonemen']+$denda+$biayaadmin;
		?>
        <input value="<?php echo number_format($totalbayar) ?>" readonly required="" name="totalbayar" type="text"
            class="form-control">
    </div>
    <button type="submit" value="Cari" class="btn btn-primary">Bayar</button>
</form>