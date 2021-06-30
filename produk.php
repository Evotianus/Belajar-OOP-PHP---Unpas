<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1->judul = "Naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Yoru ni Kakeru";
// var_dump($produk2->judul);

$produk3 = new Produk();
$produk3->judul = "Kaibutsu";
$produk3->penulis = "Ayase";
$produk3->penerbit = "Yoasobi";
$produk3->harga = "10000";

$produk4 = new Produk();
$produk4->judul = "Harudorobou";
$produk4->penulis = "N-buna";
$produk4->penerbit = "Yorushika";
$produk4->harga = "30000";

echo "Lagu 1 : " . $produk3->getLabel();
echo "<br>";
echo "Lagu 2 : " . $produk4->getLabel();
