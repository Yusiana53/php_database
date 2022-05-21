<?php

$host = "localhost";
$database = "toko";
$user = "root";
$password = "";

//pdo dan sesuai driver
//jika pkaai sql - maka pakai mysqli

$koneksi = mysqli_connect($host, $user, $password, $database);
//var_dump($koneksi); //menampilkan apakah terkoneksi atau tidak
// if ($koneksi){
// 	echo "berhasil terkoneksi ke database";
// }
// else
// {
// 	echo "gagal terkoneksi ke database";
// }
// !=negasi atau ingkaran
if (!$koneksi){
	echo "gagal terkoneksi ke database";
	die; //sampai disini program akan dimatikan dan tidak lagi membaca sintak dibawahnya
	echo "ini tidak akan di eksekusi";
}