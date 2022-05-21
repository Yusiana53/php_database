<?php

//importing
//require dan rquire_once
//include dan include_once

//memanggil file koneksi_ke_database.php
//semua variabel yang ada di file koneksi_ke_database dapat dipakai di file ini
require_once'./koneksi_ke_database.php'; 

$query = mysqli_query($koneksi, "SELECT * FROM barang"); //select from tabel barang


//fetching = mengubah data dari sql menjadi data yang mudah dimengerti

$hasil = []; //membuat array kosong $hasil
//$data = mysqli_fetch_assoc (query) untuk merubah bentuk data ke bentuk array kemudiannya
while ($data = mysqli_fetch_assoc($query))
	{
		$hasil[]=$data; //untuk menambahkan $data ke variabel array $hasil
	}
print_r($hasil);