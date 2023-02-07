<?php
	include 'koneksi.php';
	$user_name = $_GET['user_name'];
	$query = "SELECT * from denda a 
				left join pembayaran b on a.id_pembayaran = b.id_pembayaran
				left join booking c on b.id_booking = c.id_booking
				WHERE c.id_pelanggan='$user_name'";
	$result = $con->query ($query);

	// Fetch all
	$denda = $result->fetch_all(MYSQLI_ASSOC);

	echo json_encode($denda)
?>