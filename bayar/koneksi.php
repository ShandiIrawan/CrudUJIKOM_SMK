<?php

$host="localhost";
$user="root";
$pass="";
$db="db_pln";

$koneksi=mysqli_connect($host, $user, $pass);
mysqli_select_db($koneksi, $db);
?>
