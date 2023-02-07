<?php
include'koneksi.php';

		//Generate ID Produk
		//perlu diganti (1)
		$data = mysqli_query($con, "SELECT id_pembayaran from pembayaran order by id_pembayaran DESC Limit 1");
		if(mysqli_num_rows($data) >0){
				$result=mysqli_fetch_array($data);
				$data_explode2 = explode("-", $result[0]);
				$new_number2 = $data_explode2[1] + 1;
				
				//tambah angka 0 didepan
				$panjang = strlen($new_number2);
				//perlu diganti (2) -- hitung jumlah angka
				$length = 4 - $panjang;
				$angka ="";
				for($i =1; $i <= $length; $i++){
					$angka .= 0;
				}
				$kode = $data_explode2[0] ."-".$angka.$new_number2;
		}else{
				//perlu diganti (3)
				$kode = "PB-0001";
		}




$id_pembayaran 	    = $kode;
$id_booking 	    = $_POST['id_booking'];
$tgl_pembayaran 	= $_POST['tgl_pembayaran'];
$total_pembayaran 	= $_POST['total_pembayaran'];
$file_gambar 		= "$kode.jpg";
$gambar				= $_POST['gambar'];


//pembuatan syntax SQL
if($id_pembayaran != '' && $id_booking != ''){
	$sql = mysqli_query($con,"INSERT INTO pembayaran(id_pembayaran, id_booking, tgl_pembayaran, total_pembayaran, gambar)
	VALUES('$kode','$id_booking', '$tgl_pembayaran', '$total_pembayaran', '$file_gambar')");
	
	file_put_contents("../web_futsal/foto_pembayaran/$file_gambar", base64_decode($gambar));
}
if($sql){
	echo "berhasil";
}else{
	echo "gagal";
}
mysqli_close($con);
?>
