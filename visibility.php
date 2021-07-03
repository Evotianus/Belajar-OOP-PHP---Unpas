<?php
class Produk
{
    public $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0;

    private $harga;

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

    public function infoProduk()
    {
        $prInfoLengkap = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $prInfoLengkap;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
}





class Lagu extends Produk
{
    public $lamaLagu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaLagu = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->lamaLagu = $lamaLagu;
    }

    public function infoProduk()
    {
        $prInfoLengkap = "Lagu : " . parent::infoProduk() . " - {$this->lamaLagu} Menit";

        return $prInfoLengkap;
    }
}





class Buku extends Produk
{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }

    public function infoProduk()
    {
        $prInfoLengkap = "Buku : " . parent::infoProduk() . " - {$this->halaman} Halaman";

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


$produk1 = new Lagu("Kaibutsu", "Ayase", "Yoasobi", 10000, 3);

$produk2 = new Buku("Mantappu Jiwa", "Jerome Polin", "Gramedia Pustaka", 85000, 228);

// echo "Lagu : " . $produk1->getLabel();
// echo "<br>";
// echo "Buku : " . $produk2->getLabel();

// echo "<br>";

echo $produk1->infoProduk();
echo "<br>";
echo $produk2->infoProduk();
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
