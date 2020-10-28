<?php
global $koneksi;
//$koneksi = mysql_connect("localhost", "", "JysuLqMF6Qrd1Jbe");//
$koneksi = mysqli_connect("localhost", "root", "");
	if (!$koneksi) {
		die("Database connection problem");
	}
	//$db_use = mysql_select_db("") or die("Select db problem!!");//
	$db_use = mysqli_select_db($koneksi, "picasso") or die("Select db problem !!");
?>