<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Kriteria</title>
</head>
<body>

<?php
	include "koneksi.php";
	include "menu.php";
?>

<h4>Tambah Data Kriteria</h4>

<form action="" method="POST">
	<table>
		<tr>
			<td>Nama Kriteria</td>
			<td></td>
			<td><input type="text" name="nama_kriteria" required></td>
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
	$nama_kriteria = $_POST['nama_kriteria'];

	$sql = "INSERT INTO tbl_kriteria VALUES(NULL, '$nama_kriteria')";
	
	if (mysqli_query($conn, $sql)) {
		header("location:kriteria.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}
?>

</body>
</html>

