<?php
include '../koneksi.php';

$id_tagihan	=$_GET['id_tagihan'];
$query		=mysqli_query($koneksi, "DELETE FROM tb_tagihan WHERE id_tagihan='$id_tagihan' ");
if ($query) {
	echo '<script>alert("Berhasil Hapus Data");window.location="../admin/index.php?page=tb_tagihan"</script>';
	// header("location:../admin/index.php?page=tb_tagihan");
} else {
	echo "GAGAL HAPUS DATA";
}


?>