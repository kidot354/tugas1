<html>
	<title>KELOLA DATA BARANG</title>
	<link rel="stylesheet" href="style.css"/>
	<center>
			
	<head>
		<H2 class="judul">KELOLA DATA BARANG</H2>
	</head>
	
	<body>
	<table width=60% height=10%>
		<tr>
			<td><b>Data Barang</b></td>
			<td width=10% align="center"><a href="sub.php"><button class="button">Tambah</button></a></td>
		</tr>
	</table>
	
	<table border=1 width=60% height=5% align="center" border=1 cellpadding= 0 cellspacing=0>
		<tr align="center">
			<td><b>Kode</b></td>
			<td><b>Nama</b></td>
			<td><b>Harga</b></td>
			<td><b>Aksi</b></td>
		</tr>

	<?php
	include("koneksi.php");
	$query = mysql_query("select * from tb_barang");
	while($data = mysql_fetch_array($query)){
	?>
		<tr p align="center">
			<td><?php echo $data['kode']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['harga']; ?></td>
			<td>
			<a href="update.php?no=<?php echo $data['id'];?>" class="link">Edit</a>
			<a href="hapus.php?id=<?php echo $data['id'];?>" class="link">Hapus</a>
	<?php
	}
	?>
	</table>
		<table>
		<tr>
			<td><a href="logout.php"><button class="button" >LOGOUT</button></a></td>
		</tr>
		</table>
	</center>
</html>