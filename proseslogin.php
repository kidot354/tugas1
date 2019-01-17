<?php session_start();
require_once ("conek.php");
$username = $_POST['username'];
$pass = $_POST['password'];
$cekuser = mysql_query("select * from tb_login WHERE username='$username' ");
$jumlah = mysql_num_rows($cekuser);
$hasil = mysql_fetch_array($cekuser);
if($jumlah == 0){
	echo "Username belum terdaftar atau belum terisi!";
	echo '<a href="login.php"> Back</a> ';
	}else{
		if($pass !=$hasil['password']) {
		echo "Password belum terdaftar atau belum terisi!";
	echo '<a href="login.php"> Back</a> ';
	}else{
		$SESSION['username'] = $hasil['username'];
		header('location:coba.php');
}
}
?>