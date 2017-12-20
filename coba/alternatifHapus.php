<?php
include "koneksi.php";

if ($_GET) {

	$sql = "DELETE FROM tbl_alternatif WHERE id = '".$_GET['id']."'";

	if (mysqli_query($conn, $sql)) {
		header("location:alternatif.php");
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

?>