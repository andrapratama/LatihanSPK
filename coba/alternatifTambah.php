<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data alternatif</title>
</head>
<body>

<?php
	include "koneksi.php";
	include "menu.php";
?>

<h4>Tambah Data alternatif</h4>

<form action="" method="POST">
	<table>
		<tr>
			<td>Nama alternatif</td>
			<td></td>
			<td><input type="text" name="nama_alternatif" required></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="simpan" value="Simpan">
			</td>
		</tr>
	</table>
</form>

<?php 

if ($_POST) {
	$nama_alternatif = $_POST['nama_alternatif'];

	$sql = "INSERT INTO tbl_alternatif VALUES(NULL, '$nama_alternatif')";
	
	if (mysqli_query($conn, $sql)) {
		header("location:alternatif.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>

</body>
</html>

