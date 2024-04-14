 <?php
include 'koneksi.php';

$id_pelanggan =$_GET['id_pelanggan'];
$query =mysqli_query($koneksi, "DELETE FROM tb_pelanggan where id_pelanggan='$id_pelanggan'");
if ($query) {
	echo '<script>alert("Berhasil Hapus Data");window.location="../admin/index.php?page=tb_pelanggan"</script>';
	// header("location:../admin/index.php?page=tb_pelanggan");
} else {
	echo "Gagal Hapus Data";
}
?>