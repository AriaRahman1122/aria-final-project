<?php 
// $koneksi = mysqli_connect("us-cdbr-east-03.cleardb.com","b329ab17724329","53508fa7 ","heroku_c27bcd6d8319a2f");

$host = "localhost";
$user = "root";
$pass = "";
$name = "vynn";


$koneksi = mysqli_connect($host, $user, $pass, $name) or die("Koneksi ke database gagal");
mysqli_select_db($koneksi, $name) or die('Database is not found!');
// mysql://b329ab17724329:53508fa7@us-cdbr-east-03.cleardb.com/heroku_c27bcd6d8319a2f?reconnect=true
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>