<!DOCTYPE html>
<html>
<head>
	<title>DATA ANGGOTA PERPUSTAKAAN USU</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
	<style type="text/css">
		h1{
			padding-bottom: 20px;
			padding-top: 50px;
		}
		form{
			padding-top: 20px;
		}
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
	</style>
</head>
<center>
<body>
			<div class="container">
			<h2 align="center" style="color: black;">EDIT DATA</h2>
			<button class="btn btn-default"><a href="index.php">Kembali</a></button>
		
		<?php
		include 'koneksi.php';
		$nim = $_GET['nim'];
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE nim = '$nim'");
		while($d = mysqli_fetch_array($data)){
			?>
			<form class="form-horizontal" method="post" action="edit_aksi.php">
				<div class="form-group">
					<label class="col-sm-4 control-label">No Identitas</label>
					<input class="form-control col-sm-4" type="number" name="nim" value="<?php echo $d['nim']; ?>" readonly>
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Nama</label>
					<input class="form-control col-sm-4" type="text" name="nama" value="<?php echo $d['nama']; ?>">
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Jurusan</label>
					<input class="form-control col-sm-4" type="text" name="jurusan" value="<?php echo $d['jurusan']; ?>">
				</div>
				<div class="form-group">
					<label class="col-sm-4 control-label">Fakultas</label>
					<input class="form-control col-sm-4" type="text" name="fakultas" value="<?php echo $d['fakultas']; ?>">
				</div>
				<button type="submit" class="btn btn-danger">EDIT</button>
			</form>
		</div>		
		<?php
		}
		?>
</body>
</center>
</html>