<?php
include 'koneksi.php';

$id_tarif=$_GET['id_tarif'];
$query =mysqli_query($koneksi,"SELECT * FROM tb_tarif WHERE id_tarif='$id_tarif'");
while ($row=mysqli_fetch_assoc($query)) {
	
?>
<form action="../admin/index.php?page=simpan_update_tarif" method="POST">
<table border="1" align="center">
		<tr>
			<td>id_tarif</td>
			<td><input type="text" name="id_tarif" value="<?php echo $row['id_tarif']?>"></td>
		</tr>
		<tr>
			<td>golongan</td>
			<td><input type="text" name="golongan" value="<?php echo $row['golongan']?>"></td>
		</tr>
		<tr>
			<td>daya</td>
			<td><input type="text" name="daya" value="<?php echo $row['daya']?>"></td>
		</tr>
		<tr>
			<td>tarifpermeter</td>
			<td><input type="text" name="tarifpermeter" value="<?php echo $row['tarifpermeter']?>"></td>
		</tr>
		<tr>
			<td>abonemen</td>
			<td><input type="text" name="abonemen" value="<?php echo $row['abonemen']?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="SIMPAN">
				<input type="reset" value="BATAL" onclick="window.history.go(-1)">
			</td>
		</tr>
	</table>	
</form>
<?php
}
?>