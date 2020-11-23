<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$fakultas = $_POST['fakultas'];

// menginput data ke database 
mysqli_query($koneksi,"INSERT INTO mahasiswa VALUE('$nim','$nama','$jurusan','$fakultas')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>