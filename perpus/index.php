<!DOCTYPE html>
<html>
<head>
 
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


<center>
	<h2 align="center" style="color: black;">DATA ANGGOTA PERPUSTAKAAN USU</h2>
	<br/>
	<a href="tambah.php" class="btn btn-primary">tambah</a>
	<br/>
	<br/>
	<table border="4" align="center">
		<tr align="center">
			<th width="200">No Identitas</th>
			<th width="200">Nama</th>
			<th width="200">Jurusan</th>
			<th width="200">Fakultas</th>
			<th width="200">Aksi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no=1;
		$data = mysqli_query($koneksi,"SELECT * FROM mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td align="center"><?php echo $d['nim'];?></td>
				<td align="center"><?php echo $d['nama'];?></td>
				<td align="center"><?php echo $d['jurusan'];?></td>
				<td align="center"><?php echo $d['fakultas'];?></td>
				<td align="center">
					<a href="edit.php?nim=<?php echo $d['nim']; ?>" class="btn btn-default">Edit</a>
					<a href="hapus.php?nim=<?php echo $d['nim']; ?>" class="btn btn-default">Hapus</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</center>
</body>
</html>