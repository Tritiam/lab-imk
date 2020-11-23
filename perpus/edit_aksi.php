<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$fakultas = $_POST['fakultas'];

//update data ke database
$data = mysqli_query($koneksi,"UPDATE mahasiswa SET nim = '$nim', nama='$nama', jurusan='$jurusan', fakultas='$fakultas' WHERE nim = '$nim' ");

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>