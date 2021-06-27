<?php 
//koneksi dtabase
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");


//cek koneksi database
//if error 

if(mysqli_connect_error()){
    echo "koneksi database gagal :" . mysqli_connect_error();
}
