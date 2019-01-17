<?php
include("koneksi.php");

	$Kode		= $_POST["kode"];
$nama		= $_POST["nama"];
$deskripsi	= $_POST["deskripsi"];
$stok		= $_POST["stok"];
$harga		= $_POST["harga"];
$berat		= $_POST["berat"];
	
	$data = mysql_query("update barang set kode='$kode', nama=$Nama', deskripsi='$Deskripsi', stok='$Stok', harga='$Harga', berat='$Berat' ");
	header("location:coba.php");
?>