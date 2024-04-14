<?php 
include 'koneksi.php';

$id_pelanggan		=$_POST['id_pelanggan'];
$id_tarif			=$_POST['id_tarif'];
$pelanggan 			=$_POST['pelanggan'];
$alamat				=$_POST['alamat'];

$query				=mysqli_query($koneksi, "INSERT INTO tb_pelanggan SET id_pelanggan='$id_pelanggan', id_tarif='$id_tarif', pelanggan='$pelanggan', alamat='$alamat' ");
if ($query) {
	echo '<script>alert("Berhasil Tambah Data");window.location="../admin/index.php?page=tb_pelanggan"</script>';
	// header("location:../admin/index.php?page=tb_pelanggan");
} else {
	echo '<script>alert("ID Pelanggan Sudah Ada");window.location="../admin/index.php?page=tb_pelanggan"</script>';
}
?>