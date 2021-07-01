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


class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Produk("Kaibutsu", "Ayase", "Yoasobi", 10000);

$produk2 = new Produk("Harudorobou", "N-buna", "Yorushika", 30000);

echo "Lagu 1 : " . $produk1->getLabel();
echo "<br>";
echo "Lagu 2 : " . $produk2->getLabel();

echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
