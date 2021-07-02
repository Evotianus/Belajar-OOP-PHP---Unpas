<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Kaibutsu", "Ayase", "Yoasobi", 10000);

$produk2 = new Produk("Mantappu Jiwa", "Jerome Polin", "Gramedia Pustaka", 85000);

$produk3 = new Produk("Yakusoku");

echo "Lagu : " . $produk1->getLabel();
echo "<br>";
echo "Buku : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
