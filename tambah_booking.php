<?php
include'koneksi.php';

$auto_kode = mysqli_query($con, "select * from booking");
    $nomor = mysqli_num_rows($auto_kode) + 1;
    if($nomor >= 1 && $nomor <=9) $kode = "BK-000$nomor";
    else if($nomor >= 10 && $nomor <=99) $kode = "BK-00$nomor";
    else if($nomor >= 100 && $nomor <= 999) $kode = "BK-0$nomor";
    else $kode = "BK-000$nomor";

$id_booking 	= $kode;
$id_lapangan 	= $_POST['id_lapangan'];
$id_pelanggan 	= $_POST['id_pelanggan'];
$tgl_pemesanan 	= $_POST['tgl_pemesanan'];
$tgl_main 		= $_POST['tgl_main'];
$jam_main 		= $_POST['jam_main'];
$durasi 		= $_POST['durasi'];
$status 		= 'on process';

$query = mysqli_query($con, "SELECT * FROM lapangan WHERE id_lapangan='$id_lapangan'");
$data  = mysqli_fetch_array($query);

$data_explode2 = explode(" ",$durasi);
$jam = $data_explode2[0];
$total_booking = $data['harga'] * $jam;

//pembuatan syntax SQL
if($id_booking != '' && $id_lapangan != ''){
	$sql = mysqli_query($con,"INSERT INTO booking(id_booking, id_lapangan,id_pelanggan, tgl_pemesanan, tgl_main,total_booking, jam_main, durasi, status)
	VALUES('$id_booking','$id_lapangan', '$id_pelanggan', '$tgl_pemesanan', '$tgl_main', '$total_booking',  '$jam_main', '$durasi','$status')");
}
if($sql){
	echo "berhasil";
}else{
	echo "gagal";
}
mysqli_close($con);
?>
