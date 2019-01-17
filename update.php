<html>
	<title>KELOLA DATA BARANG</title>
	<link rel="stylesheet" href="style.css"/>
	<center>
			
	<head>
		<H2 class="judul">KELOLA DATA BARANG</H2>
	</head>
		
	<?php
	include("koneksi.php");
	$no = $_GET['no'];
	$query_mysql =  mysql_query("select * from tb_barang where id='$no'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	
	<body>
		<form action="edit.php" method="post" p align="center">
		<table width=40% height=10% border=0 cellpadding=0 cellspacing=0 p align="center">
			<tr>
				<td><b>Input Data Barang </b></td>
			</tr>
			</table>
		<table width=40% height=40% border=0 cellpadding=0 cellspacing=0 p align="center">
			<tr>
				<td width=20%> Kode :  </td>
				<td><input class="t" type="text" name="kode" value="<?php echo $data['kode'] ?>"></td>
			</tr>
			<tr>
				<td> Nama :  </td>
				<td><input class="t" type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
			</tr>
			<tr>
				<td> Deskripsi :  </td>
				<td><textarea class="t" name="deskripsi" ><?php echo $data['deskripsi'] ?></textarea></td>
			</tr>
			<tr>
				<td> Stok :  </td>
				<td><input class="t" type="text" name="stok" value="<?php echo $data['stok'] ?>"></td>
			</tr>
			<tr>
				<td> Harga :  </td>
				<td><input class="t" type="text" name="harga" value="<?php echo $data['harga'] ?>"></td>
			</tr>
			<tr>
				<td> Berat :  </td>
				<td><input class="t" type="text" name="berat" value="<?php echo $data['berat'] ?>"><i>gram</i></td>
			</tr>
			<tr>
				<td colspan=2 p align="center" height=10%><input href="ui.php" class="button" type="submit" value="Edit"</td>
			</tr>
			</table>
			<?php
			}
			?>
		</center>
	</body>
</html>