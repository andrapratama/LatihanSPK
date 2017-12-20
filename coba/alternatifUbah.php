<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data alternatif</title>
</head>
<body>

<h4>Ubah Data alternatif</h4>

<?php 
include "menu.php";
include "koneksi.php";

if($_GET) {
	$sql = "SELECT nama_alternatif FROM tbl_alternatif WHERE id='".$_GET['id']."'";
	$query = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($query);
}
?>

<form action="" method="POST">
	<table>
		<tr>
			<td>Nama alternatif</td>
			<td></td>
			<td><input type="text" name="nama_alternatif" value="<?php echo $data['nama_alternatif']; ?>" required></td>
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
	$nama_alternatif = $_POST['nama_alternatif'];

	$sql = "UPDATE tbl_alternatif SET nama_alternatif = '$nama_alternatif' WHERE id = '".$_GET['id']."'";
		
	if (mysqli_query($conn, $sql)) {
		header("location:alternatif.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>

