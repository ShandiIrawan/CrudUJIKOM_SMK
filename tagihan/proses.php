<?php
include '../koneksi.php';

$id_tagihan		=$_POST['id_tagihan'];
$id_pelanggan	=$_POST['id_pelanggan'];
$periode_tagihan=$_POST['periode_tagihan'];
$tgl_jatuh_tempo=$_POST['tgl_jatuh_tempo'];
$meter_awal		=$_POST['meter_awal'];
$meter_akhir	=$_POST['meter_akhir'];
$status_bayar	=$_POST['status_bayar'];

$queryTagihan =mysqli_query($koneksi, "SELECT * FROM tb_tagihan WHERE id_tagihan='$id_tagihan'");
$jmltag=mysqli_num_rows($queryTagihan);
if ($jmltag>0) {
	echo '<script>alert("Id_Tagihan sudah ada");window.location="../admin/index.php?page=input_tagihan"</script>';
} else {

$queryPelanggan=mysqli_query($koneksi, "SELECT * FROM tb_pelanggan WHERE id_Pelanggan='$id_pelanggan'");
$jmlpel=mysqli_num_rows($queryPelanggan);
if ($jmlpel>0) {

$query	=mysqli_query($koneksi, "INSERT INTO tb_tagihan SET id_tagihan='$id_tagihan', id_pelanggan='$id_pelanggan', periode_tagihan='$periode_tagihan', tgl_jatuh_tempo='$tgl_jatuh_tempo', meter_awal='$meter_awal', meter_akhir='$meter_akhir', status_bayar='$status_bayar'");
if ($query) {
	echo '<script>alert("Berhasil Tambah Data");window.location="../admin/index.php?page=tb_tagihan"</script>';
	// header("location:../admin/index.php?page=tb_tagihan");
} else {
	echo "gagal simpan";
}

} else {
	// echo '<script>alert("Id_Pelanggan tidak ditemukan");window.location="../admin/index.php?page=input_tagihan"</script>';
}
}
?>