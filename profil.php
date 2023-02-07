<?php
include'koneksi.php';
$nm_lengkap 	= $_POST['nm_lengkap'];
$alamat 	    = $_POST['alamat'];
$no_hp 	        = $_POST['no_hp'];
$email 	        = $_POST['email'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];


//pembuatan syntax SQL
if($user_name != '' && $password != ''){
	$sql = mysqli_query($con,"SELECT * FROM pelanggan WHERE user_name = '$user_name' AND password = '$password'");
	$result = mysqli_fetch_array($sql);
}
if($result){
	echo "berhasil";
}else{
	echo "gagal";
}
mysqli_close($con);
?>