<?php 
include 'koneksi.php';

$id_tarif				=$_POST['id_tarif'];
$golongan				=$_POST['golongan'];
$daya 					=$_POST['daya'];
$tarifpermeter			=$_POST['tarifpermeter'];
$abonemen				=$_POST['abonemen'];

$query				=mysqli_query($koneksi, "INSERT INTO tb_tarif SET id_tarif='$id_tarif', golongan='$golongan', daya='$daya', tarifpermeter='$tarifpermeter', abonemen='$abonemen' ");
if ($query) {
	// header("window.location:../admin/index.php?page=tb_tarif");
	echo '<script>alert("Berhasil Tambah Data");window.location="../admin/index.php?page=tb_tarif"</script>';
} else {
	echo '<script>alert("Gagal Tambah Data");window.location="../admin/index.php?page=tb_tarif"</script>';
}
?>