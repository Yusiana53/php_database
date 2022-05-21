<?php

//INSERT INTO `barang` (`id`, `nama`, `harga`, `jumlah`) VALUES (NULL, 'Laptop', '11000000', '5');
//bentuk umum
//INSERT INTO nama_tabel (list_kolom) VALUES (list_data);

// 1. membuat koneksi
require_once'./koneksi_ke_database.php'; 

// 2. membuat query dan menjalankannya
$simpan = mysqli_query($koneksi, "INSERT INTO `barang` (`id`, `nama`, `harga`, `jumlah`) VALUES (NULL, 'Tablet', '6000000', '5')" );

if (!$simpan)
{
	echo "data berhasil disimpan";
} 
else
{
	echo "data gagal disimpan";
}