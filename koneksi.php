<?php
$con = new mysqli("localhost","root","","web_futsal");

if ($con -> connect_error){
	echo "Failed to connect to MySQL: ". $con -> connect_error;
	exit();
}
?>