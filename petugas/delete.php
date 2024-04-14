<?php
include 'koneksi.php';

$id_petugas =$_GET['id_petugas'];
$query =mysqli_query($koneksi, "DELETE FROM tb_petugas WHERE id_petugas='$id_petugas'");
if ($query) {
	echo '<script>alert("Berhasil Hapus Data");window.location="../admin/index.php?page=tb_petugas"</script>';
	// header("location:../admin/index.php?page=tb_petugas");
} else {
	echo "Gagal Hapus Data";
}
?>