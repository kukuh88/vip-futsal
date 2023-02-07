<?php
	include 'koneksi.php';
	$query = "SELECT * from lapangan";
	$result = $con->query ($query);

	// Fetch all
	$data_lapangan = $result->fetch_all(MYSQLI_ASSOC);

	echo json_encode($data_lapangan)
?>