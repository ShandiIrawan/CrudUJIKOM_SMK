<?php 
include '../koneksi.php';

$id_petugas			=$_POST['id_petugas'];
$petugas			=$_POST['petugas'];
$alamat 			=$_POST['alamat'];
$jabatan			=$_POST['jabatan'];
$user_name			=$_POST['user_name'];
$sandi				=$_POST['sandi'];

$queryptg			=mysqli_query($koneksi, "SELECT * FROM tb_petugas WHERE user_name='$user_name'");
echo $hasil			=mysqli_num_rows($queryptg);
if ($hasil>0) {
	echo '<script>alert("Username Sudah Ada");window.location="../admin/index.php?page=input_petugas"</script>';
} else {

$query				=mysqli_query($koneksi, "INSERT INTO tb_petugas SET id_petugas='$id_petugas', petugas='$petugas', alamat='$alamat', jabatan='$jabatan', user_name='$user_name', sandi='$sandi' ");
if ($query) {
	echo '<script>alert("Berhasil Tambah Data");window.location="../admin/index.php?page=tb_petugas"</script>';
	// header("location:../admin/index.php?page=tb_petugas");
} else {
	echo "Gagal Simpan Data";
}
}
?>