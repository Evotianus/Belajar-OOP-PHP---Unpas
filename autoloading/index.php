<?php

require_once "App/init.php";

$produk1 = new Lagu("Kaibutsu", "Ayase", "Yoasobi", 10000, 3);

$produk2 = new Buku("Mantappu Jiwa", "Jerome Polin", "Gramedia Pustaka", 85000, 228);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
