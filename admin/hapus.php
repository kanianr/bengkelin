<?php
	$id = $_GET['id'];
	$table = $_GET['table'];
	include "../koneksi.php";

	if($id != "" && $table != "") {
		$query = mysqli_query($koneksi, "DELETE FROM $table WHERE id='$id'");
			if($table == "pelanggan") {
				$link = "pelanggan";
			}
			else {
				$link = "index";
			}
		if($query) {
			header("location: $link.php?hapus=yes");
		}
		else {
			header("location: $link.php?hapus=no");
		}
	}
?>