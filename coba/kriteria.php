<!DOCTYPE html>
<html>
<head>
	<title>Data Kriteria</title>
</head>
<body>

<?php
	include "menu.php";
?>

<p><a href="kriteriaTambah.php">Tambah</a></p>

<table>
	<tr>
		<th>Kode</th>
		<th>Nama Kriteria</th>
		<th>Opsi</th>
	</tr>
	<?php
		include "koneksi.php";

		$sql = "SELECT * FROM tbl_kriteria ORDER BY id";
		$query = mysqli_query($conn, $sql);

		while ($data = mysqli_fetch_assoc($query)) {
	?>
	<tr>
		<td><?php echo $data['id']?></td>
		<td><?php echo $data['nama_kriteria']?></td>
		<td><a href="kriteriaUbah.php?id=<?php echo $data['id']?>">Ubah</a> | <a href="kriteriaHapus.php?id=<?php echo $data['id']?>">Hapus</a></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>