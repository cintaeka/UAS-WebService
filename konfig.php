<?php
	$host = "localhost";
	$user = "root";
	$pass = "@p121l14-191207";
	$db = "penjualan_php";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
?>