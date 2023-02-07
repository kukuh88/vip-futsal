<?php
include'koneksi.php';
$user_name 	= $_POST['user_name'];
$password 	= $_POST['password'];


//pembuatan syntax SQL
if($user_name != '' && $password != ''){
	$sql = mysqli_query($con,"SELECT * FROM pelanggan WHERE id_pelanggan = '$user_name' AND password = '$password'");
	$result = mysqli_fetch_array($sql);
}
if($result){
	echo "berhasil";
}else{
	echo "gagal";
}
mysqli_close($con);
?>