<?php
include "koneksi.php";

if ($_GET) {

	$sql = "DELETE FROM tbl_kriteria WHERE id = '".$_GET['id']."'";

	if (mysqli_query($conn, $sql)) {
		header("location:kriteria.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>