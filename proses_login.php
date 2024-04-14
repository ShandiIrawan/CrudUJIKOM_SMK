<?php
include 'koneksi.php';

$user			=$_POST['user_name'];
$pass			=$_POST['sandi'];
$jabatan		=$_POST['jabatan'];
$query			=mysqli_query($koneksi,"SELECT*FROM tb_petugas WHERE user_name='$user' and sandi='$pass' and jabatan='$jabatan' ");
$baris			=mysqli_num_rows($query);
$row 			=mysqli_fetch_assoc($query);
$petugas 		= $row['petugas'];

if ($baris>0) {
	session_start();
	$_SESSION['status']="login";
	$_SESSION['user_name']=$user;
	$_SESSION['petugas']=$petugas;

	if ($jabatan!="ADMIN") {
		header("location:index.php");
	}
	else{
		header("location:admin/index.php");
	}
}
else{
	// echo '<script>alert("Password atau Username Salah !!");window.location="form_login.php"</script> ';
}


?>