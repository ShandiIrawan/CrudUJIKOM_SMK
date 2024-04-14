<?php 
include 'koneksi.php';

$id_pelanggan		=$_POST['id_pelanggan'];
$id_tarif			=$_POST['id_tarif'];
$pelanggan			=$_POST['pelanggan'];
$alamat				=$_POST['alamat'];


$query =mysqli_query($koneksi,"UPDATE tb_pelanggan SET id_pelanggan='$id_pelanggan', id_tarif='$id_tarif', pelanggan='$pelanggan', alamat='$alamat' WHERE id_pelanggan='$id_pelanggan' ");

if ($query) {
	echo '<script>alert("Berhasil Ubah Data");window.location="../admin/index.php?page=tb_pelanggan"</script>';
	// header("location:../admin/index.php?page=tb_pelanggan");
} else {
	echo "Gagal Input Data";
}
 ?>