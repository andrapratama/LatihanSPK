<!DOCTYPE html>
<html>
<head>
	<title>Data alternatif</title>
</head>
<body>

<?php
	include "menu.php";
?>

<p><a href="alternatifTambah.php">Tambah</a></p>

<table>
	<tr>
		<th>Kode</th>
		<th>Nama alternatif</th>
		<th>Opsi</th>
	</tr>
	<?php
		include "koneksi.php";

		$sql = "SELECT * FROM tbl_alternatif ORDER BY id";
		$query = mysqli_query($conn, $sql);

		while ($data = mysqli_fetch_assoc($query)) {
	?>
	<tr>
		<td><?php echo $data['id']?></td>
		<td><?php echo $data['nama_alternatif']?></td>
		<td><a href="alternatifUbah.php?id=<?php echo $data['id']?>">Ubah</a> | <a href="alternatifHapus.php?id=<?php echo $data['id']?>">Hapus</a></td>
	</tr>
	<?php } ?>
</table>

</body>
</html>