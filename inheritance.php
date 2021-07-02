<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $lamaLagu,
        $halaman,
        $jenis;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaLagu = 0, $halaman = 0, $jenis = "")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->lamaLagu = $lamaLagu;
        $this->halaman = $halaman;
        $this->jenis = $jenis;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function infoProduk()
    {
        $prInfoLengkap = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $prInfoLengkap;
    }
}

class Lagu extends Produk
{
    public function infoProduk()
    {
        $prInfoLengkap = "Lagu : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->lamaLagu} Menit";

        return $prInfoLengkap;
    }
}

class Buku extends Produk
{
    public function infoProduk()
    {
        $prInfoLengkap = "Buku : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->halaman} Halaman";

        return $prInfoLengkap;
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


$produk1 = new Lagu("Kaibutsu", "Ayase", "Yoasobi", 10000, 3, 0);

$produk2 = new Buku("Mantappu Jiwa", "Jerome Polin", "Gramedia Pustaka", 85000, 0, 228);

// echo "Lagu : " . $produk1->getLabel();
// echo "<br>";
// echo "Buku : " . $produk2->getLabel();

// echo "<br>";

echo $produk1->infoProduk();
echo "<br>";
echo $produk2->infoProduk();
