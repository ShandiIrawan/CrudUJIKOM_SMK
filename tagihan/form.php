<!DOCTYPE html>
<html>

<head>
    <title>FORM INPUT TAGIHAN</title>
</head>

<body>
    <h2>Form Input Tagihan</h2>
    <hr>
    <form action="../admin/index.php?page=simpan_tagihan" method="POST">

        <div class="form-group">
            <label>Id Pelanggan</label>
            <input required="" name="id_pelanggan" type="text" class="form-control" placeholder="Masukkan ID Pelanggan">
            <input hidden name="id_tagihan" type="text" class="form-control" placeholder="Masukkan ID Pelanggan">
        </div>

        <div class="form-group">
            <label>Periode Tagihan</label>
            <select class="form-control" name="periode_tagihan" required>
                <option>Pilih Periode</option>
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
            <input required="" name="tgl_jatuh_tempo" type="date" class="form-control">
        </div>

        <div class="form-group">
            <label>Meter Awal</label>
            <input required="" name="meter_awal" type="number" class="form-control" placeholder="Masukkan Meter Awal">
        </div>

        <div class="form-group">
            <label>Meter Akhir</label>
            <input required="" name="meter_akhir" type="number" class="form-control" placeholder="Masukkan Meter Akhir">
        </div>

        <div class="form-group">
            <label>Status Bayar</label>
            <input readonly required="" name="status_bayar" type="text" class="form-control" value="BELUM BAYAR">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>
    </form>
</body>

</html>