 <?php
include 'koneksi.php';

$id_tarif =$_GET['id_tarif'];
$query =mysqli_query($koneksi, "DELETE FROM tb_tarif where id_tarif='$id_tarif'");
if ($query) {
	echo '<script>alert("Berhasil Hapus Data");window.location="../admin/index.php?page=tb_tarif"</script>';
	// header("location:../admin/index.php?page=tb_tarif");
} else {
	echo '<script>alert("Gagal Hapus Data");window.location="../admin/index.php?page=tb_tarif"</script>';
	// echo "Gagal Hapus Data";
}
?>