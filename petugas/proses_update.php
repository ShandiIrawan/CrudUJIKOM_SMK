	<?php 
	include '../koneksi.php';

	$id_petugas			=$_POST['id_petugas'];
	$petugas			=$_POST['petugas'];
	$alamat 			=$_POST['alamat'];
	$jabatan			=$_POST['jabatan'];
	$user_name			=$_POST['user_name'];
	$sandi				=$_POST['sandi'];

	$query =mysqli_query($koneksi,"UPDATE tb_petugas SET id_petugas='$id_petugas', petugas='$petugas', alamat='$alamat', jabatan='$jabatan', user_name='$user_name', sandi='$sandi' WHERE id_petugas='$id_petugas'");

	if ($query) {
		echo '<script>alert("Berhasil Ubah Data");window.location="../admin/index.php?page=tb_petugas"</script>';
		// header("location:../admin/index.php?page=tb_petugas");
	} else {
		echo "Gagal Update Data";
	}
	 ?>