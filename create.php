<?php
// include koneksi database
include './config.php';

//menangkap data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];

//input ke database 
mysqli_query($koneksi, "insert into mahasiswa values('','$nama','$nim','$alamat')");
//kembali ke halaman awal
header("location:./index.php");
