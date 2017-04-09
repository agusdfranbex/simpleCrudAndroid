<?php
	
	$server		= "https://bozokteam-agusdfranbex.c9users.io/android_crud"; // sesuaikan alamat server anda
	$user		= "agusdfranbex"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "android_crud"; // sesuaikan database web server anda
	
	$connect = mysql_connect($server, $user, $password) or die ("Koneksi gagal!");
	mysql_select_db($database) or die ("Database belum siap!");
?>