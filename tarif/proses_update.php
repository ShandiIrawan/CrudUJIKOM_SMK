<?php 
include 'koneksi.php';

$id_tarif				=$_POST['id_tarif'];
$golongan				=$_POST['golongan'];
$daya 					=$_POST['daya'];
$tarifpermeter			=$_POST['tarifpermeter'];
$abonemen				=$_POST['abonemen'];

$query				=mysqli_query($koneksi, "UPDATE tb_tarif SET id_tarif='$id_tarif', golongan='$golongan', daya='$daya', tarifpermeter='$tarifpermeter', abonemen='$abonemen' WHERE id_tarif='$id_tarif' ");

if ($query) {
	echo '<script>alert("Berhasil Ubah Data");window.location="../admin/index.php?page=tb_tarif"</script>';
	// header("location:location:../admin/index.php?page=tb_tarif");
} else {
	echo '<script>alert("Gagal Ubah Data");window.location="../admin/index.php?page=tb_tarif"</script>';
	// echo "Gagal Mengubah Data";
}
 ?>