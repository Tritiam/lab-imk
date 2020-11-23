<?php
// koneksi database 
include 'koneksi.php';

//data id dikirim dari url
$nim = $_GET['nim'];

//menghapus data dari database
$data = mysqli_query($koneksi,"DELETE FROM mahasiswa WHERE nim=$nim ");

//mengalikan halaman ke index.php
header("location:index.php")
?>