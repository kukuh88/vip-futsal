<?php
	include 'koneksi.php';
	$user_name = $_GET['user_name'];
	$query = "SELECT * from booking a
				LEFT JOIN pelanggan b on a.id_pelanggan = b.id_pelanggan
				LEFT JOIN lapangan c on a.id_lapangan = c.id_lapangan
				WHERE a.id_pelanggan='$user_name'";
	$result = $con->query ($query);
	// Fetch all
	$data_booking = $result->fetch_all(MYSQLI_ASSOC);

	echo json_encode($data_booking)
?>