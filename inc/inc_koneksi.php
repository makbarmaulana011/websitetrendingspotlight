<?php

$host="localhost";
$user="root";
$pass="";
$port= 3307; //ini diubah karena beda port
$database="websitetrendingspotlight";

$koneksi=mysqli_connect($host, $user, $pass, $database, $port);
if ($koneksi) {
	$buka=mysqli_select_db($koneksi, $database);
	// echo "Database dapat terhubung";
	if (!$buka) {
		echo "Database tidak dapat terhubung";
	}
} else {
	echo "MySQL tidak terhubung";
}

?>