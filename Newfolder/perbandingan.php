<!DOCTYPE html>
<html>
<head>
	<title>Input Perbandingan</title>
</head>
<body>
<?php


?>
<form action="hasil.php" method="post">
	<p>Perbandingan Kriteria</p>
	<table>
		<tr>
			<td><?php echo $_POST['k1']; ?> <select name="p1">
				<option value="1">1. Sama penting dengan</option>
				<option value="2">2. Mendekati sedikit lebih penting dari</option>
				<option value="3">3. Sedikit lebih penting dari</option>
				<option value="4">4. Mendekati lebih penting dari</option>
				<option value="5">5. Lebih penting dari</option>
				<option value="6">6. Mendekati sangat penting dari</option>
				<option value="7">7. Sangat penting dari</option>
				<option value="8">8. Mendekati multak dari</option>
				<option value="9">9. Mutlak sangat penting dari</option>
			</select> <?php echo $_POST['k2']; ?></td>
		</tr>
		<tr>
			<td><?php echo $_POST['k1']; ?> <select name="p2">
				<option value="1">1. Sama penting dengan</option>
				<option value="2">2. Mendekati sedikit lebih penting dari</option>
				<option value="3">3. Sedikit lebih penting dari</option>
				<option value="4">4. Mendekati lebih penting dari</option>
				<option value="5">5. Lebih penting dari</option>
				<option value="6">6. Mendekati sangat penting dari</option>
				<option value="7">7. Sangat penting dari</option>
				<option value="8">8. Mendekati multak dari</option>
				<option value="9">9. Mutlak sangat penting dari</option>
			</select> <?php echo $_POST['k3']; ?></td>
		</tr>
		<tr>
			<td><?php echo $_POST['k2']; ?> <select name="p2">
				<option value="1">1. Sama penting dengan</option>
				<option value="2">2. Mendekati sedikit lebih penting dari</option>
				<option value="3">3. Sedikit lebih penting dari</option>
				<option value="4">4. Mendekati lebih penting dari</option>
				<option value="5">5. Lebih penting dari</option>
				<option value="6">6. Mendekati sangat penting dari</option>
				<option value="7">7. Sangat penting dari</option>
				<option value="8">8. Mendekati multak dari</option>
				<option value="9">9. Mutlak sangat penting dari</option>
			</select>  <?php echo $_POST['k3']; ?></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="hitung" value="hitung">
			</td>
		</tr>
	</table>
</form>

</body>
</html>