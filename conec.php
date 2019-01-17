<?php
include("koneksi.php"); //koneksi ke database

//variabel untuk menapung data yang diinputkan
$Kode		=$_POST["Kode"];
$Nama		=$_POST["Nama"];
$Deskripsi	=$_POST["Deskripsi"];
$Stok		=$_POST["Stok"];
$Harga		=$_POST["Harga"];
$Berat		=$_POST["Berat"];

//kondisi jika data masih ada yang kosong
if(trim($Kode)=="") {
		echo "Kode masih kosong,isi dengan benar";
	}
		elseif(trim($Nama)=="") {
		echo "Nama masih kosong,isi dengan benar";
	}
		elseif(trim($Deskripsi)=="") {
		echo "Deskripsi masih kosong,isi dengan benar";
	}
		elseif(trim($Stok)=="") {
		echo "Stok masih kosong,isi dengan benar";
	}
		elseif(trim($Harga)=="") {
		echo "Harga masih kosong,isi dengan benar";
	}
		elseif(trim($Berat)=="") {
		echo "Berat masih kosong,isi dengan benar";
	}
	else{
		$input="insert into tb_barang (kode,Nama,Deskripsi,Stok,Harga,Berat)
			value('$Kode','$Nama','$Deskripsi','$Stok','$harga','$Berat')";
		$hasil = mysql_query($input,$conn);
		header("location:coba.php");
	}
?>