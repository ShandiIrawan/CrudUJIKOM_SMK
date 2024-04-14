<!DOCTYPE html>
<html>

<head>
    <title>FORM INPUT PETUGAS</title>
</head>

<body>
    <h2>Form Input Data</h2>
    <hr>
    <form action="../admin/index.php?page=simpan_petugas" method="POST">
        <div class="form-group">
            <label>Nama Petugas</label>
            <input required="" name="petugas" type="text" class="form-control" placeholder="Masukkan Nama Petugas">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea required="" name="alamat" class="form-control" id="" cols="30" rows="3"
                placeholder="Masukkan Alamat Petugas"></textarea>
        </div>

        <div class="form-group">
            <label>Jabatan</label>
            <select class="form-control" name="jabatan" required>
                <option>Pilih Jabatan</option>
                <option value="ADMIN">Admin</option>
                <option value="KASIR">Kasir</option>
            </select>
        </div>

        <div class="form-group">
            <label>Username</label>
            <input required="" name="user_name" type="text" class="form-control" placeholder="Masukkan Username">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input required="" name="sandi" type="password" class="form-control" placeholder="Masukkan Password">
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <button type="reset" class="btn btn-danger" onclick="window.history.go(-1)">Batal</button>
    </form>
</body>

</html>