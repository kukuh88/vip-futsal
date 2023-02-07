<?php
	include 'koneksi.php';
	$user_name = $_GET['user_name'];
	$query = "SELECT * from pembayaran a left join booking b on a.id_booking = b.id_booking
				WHERE b.id_pelanggan='$user_name'";
	$result = $con->query ($query);

	// Fetch all
	$pembayaran = $result->fetch_all(MYSQLI_ASSOC);

	echo json_encode($pembayaran)
?>