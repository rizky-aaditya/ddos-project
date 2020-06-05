<?php

global $koneksi;

$nameserver 	= "localhost";
$username	= "root";
$password	= "";
$namadb		= "db_login";

$koneksi = mysqli_connect($nameserver,$username,$password,$namadb);

if(!$koneksi){
	die("Koneksi Gagal".mysql_connect_error());
}
?>
