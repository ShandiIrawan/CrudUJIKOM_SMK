<?php
include '../koneksi.php';

$id_tagihan		=$_POST['id_tagihan'];
$id_pelanggan	=$_POST['id_pelanggan'];
$periode_tagihan=$_POST['periode_tagihan'];
$tgl_jatuh_tempo=$_POST['tgl_jatuh_tempo'];
$status_bayar	=$_POST['status_bayar'];

$query			=mysqli_query($koneksi, "UPDATE tb_tagihan SET id_tagihan='$id_tagihan', id_pelanggan='$id_pelanggan', periode_tagihan='$periode_tagihan', tgl_jatuh_tempo='$tgl_jatuh_tempo', status_bayar='$status_bayar' WHERE id_tagihan='$id_tagihan' ");

if ($query) {
	echo '<script>alert("Berhasil Ubah Data");window.location="../admin/index.php?page=tb_tagihan"</script>';
	// header("location:../admin/index.php?page=tb_tagihan");
} else {
	echo "Gagal Update Data";
}
?>