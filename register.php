<?php
include'koneksi.php';
$user_name 		= $_POST['user_name'];
$password 		= $_POST['password'];
$nm_lengkap 	= $_POST['nm_lengkap'];
$alamat 		= $_POST['alamat'];
$no_hp 			= $_POST['no_hp'];
$email 			= $_POST['email'];
$jenis_kelamin 	= $_POST['jenis_kelamin'];


//pembuatan syntax SQL
if($user_name != '' && $password != ''){
	$sql = mysqli_query($con,"INSERT INTO pelanggan(id_pelanggan, password, nm_lengkap, alamat, no_hp, email, jenis_kelamin)
	VALUES('$user_name', '$password','$nm_lengkap','$alamat','$no_hp','$email','$jenis_kelamin')");
}
if($sql){
	echo "berhasil";
}else{
	echo "gagal";
}
mysqli_close($con);
?>
