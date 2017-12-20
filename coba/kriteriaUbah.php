<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Kriteria</title>
</head>
<body>

<h4>Ubah Data Kriteria</h4>

<?php 
include "menu.php";
include "koneksi.php";

if($_GET) {
	$sql = "SELECT nama_kriteria FROM tbl_kriteria WHERE id='".$_GET['id']."'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
}
?>

<h4>Ubah Data Barang</h4>

<form action="" method="POST">
	<table>
		<tr>
			<td>Nama Kriteria</td>
			<td></td>
			<td><input type="text" name="nama_kriteria" value="<?php echo $data['nama_kriteria']; ?>" required></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<input type="submit" name="ubah" value="Ubah">
			</td>
		</tr>
	</table>
</form>

<?php 

if ($_POST) {
	$nama_kriteria = $_POST['nama_kriteria'];

	$sql = "UPDATE tbl_kriteria SET nama_kriteria = '$nama_kriteria' WHERE id = '".$_GET['id']."'";
		
	if (mysqli_query($conn, $sql)) {
		header("location:kriteria.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>

