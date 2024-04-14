<?php
include 'koneksi.php';

$id 			= $_POST['id_tagihan'];
$id_tagihan 	= $_POST['id_tagihan'];
$id_petugas		= $_POST['id_petugas'];
$tglbyr 		= date('Y-m-d');
$jml_tagihan 	= $_POST['total_tagihan'];
$abonemen		= $_POST['abonemen'];
$denda 			= $_POST['denda'];
$biayaadmin 	= $_POST['biayaadmin'];
$totalbayar 	= $_POST['totalbayar'];

$querybayar=mysqli_query($koneksi, "INSERT INTO tb_bayar SET id_tagihan='$id', id_petugas='$id_petugas', tgl_bayar='$tglbyr', jml_tagihan='$jml_tagihan', abonemen='$abonemen', denda='$denda', biaya_admin='$biayaadmin', total_bayar='$totalbayar' ");

$query = mysqli_query($koneksi, "UPDATE tb_tagihan SET status_bayar='LUNAS' WHERE id_tagihan='$id_tagihan' ");
if ($query) {
	echo '<script>alert("Selamat Tagihan Sudah Di Lunasi!!");window.location="index.php?page=cari"</script>' ;
} else {
	echo '<script>alert("Yaaaahhh Gagal");window.location="index.php?page=cari"</script>';
}

?>