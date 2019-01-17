<html>
	<title>Kelola tabel</title>
	<link rel="stylesheet" href="style.css"/>
	<center>
	
	<head>
	<h2 class = "judul">Kelola tabel</h2>
	</head>
	
	<body>
		<form action="conec.php" method="post" p align="center">
		<table width=40% height=10% align="center" cellpadding=0 cellspacing=0>
			<tr>
				<td><b>Input Data Barang</b></td>
				</tr>
				</table>
			<table width=40% height=40% align="center" cellpadding=0 cellspacing=0>
			<tr>
			<td width=20%> Kode : </td>
				<td><input class="t" type="text" name="Kode"></td>
			</tr>
			<tr>
			<td width=20%> Nama : </td>
				<td><input  class="t" type="text" name="Nama"></td>
			</tr>
			<tr>
			<td width=20%> Deskripsi : </td>
				<td><textarea  class="t" name="Deskripsi"></textarea/></td>
			</tr>
			<tr>
			<td width=20%> Stok : </td>
				<td><input  class="t" type="text" name="Stok"></td>
			</tr>
			<tr>
			<td width=20%> Harga : </td>
				<td><input  class="t" type="text" name="Harga"></td>
			</tr>
			<tr>
			<td width=20%> Berat : </td>
				<td><input  class="t" type="text" name="Berat">gram</td>
			<tr>
			<td colspan=2 p align="center" height=10%><input href="coba.php" class="button" type="submit" value="Tambah"</td>
			</tr>
			</tr>
			</tr>
		</body>
	</html>