<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MYSQLi</title><link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
	
	<style> 
 		* { 
 			margin:0;
 	 		padding:0; }
 	nav { 
 	  	margin:auto; 
 	  	text-align: center;
 	  	 width: 100%;
 	  	  font-family: tw cen mt;
 	  	} 
 	nav ul {
 	  	background:white; 
 	  	padding: 0 20px; 
 	  	list-style: none;
 	  	 position: relative; 
 	   	display: inline-table;
 	    width: 100%;
 	    } 
 	nav ul li{ 
 		float:left; 
 		} 

 	nav ul li:hover{
  		background:white; 
  		} 

	nav ul li:hover a{
 		color:red; 
 		} 

	nav ul li a{ 
		display: block; 
		padding: 25px;
		color:black;
	 	text-decoration: none;
	 	} 
</style> 
</head>
<body>
	<nav>
		<ul>
			<li><a href="../akademik/home.php"><img src="https://library.usu.ac.id/wp-content/uploads/LogoPerpus/logo-web-perpustakaan-usu-hp.png" alt="USU Library" data-src="https://library.usu.ac.id/wp-content/uploads/LogoPerpus/logo-web-perpustakaan-usu-hp.png" loading="lazy" class=" ls-is-cached lazyloaded"></a></li>
			<li><a href="../akademik/home.php">Beranda</a></li>
			<li><a href="#">Gallery</a></li>
			<li><a href="../akademik/index.php">Anggota</a></li>
		</ul>
	</nav>
</head>
<center>
<body style="background-image: url(perpustakaan.jpg);">
	<h3>TAMBAH DATA </h3>
	<br/>
	<a href="index.php">Kembali</a>
	<br/><br/>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>
				<td>No Identitas</td>
				<td><input type="number" name="nim" required size="25"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" size="30"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td><input type="text" name="jurusan" size="35"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td><input type="text" name="fakultas" size="40"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</body>
</center>
</html>