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

    public function infoLengkap()
    {
        $prInfoLengkap = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if ($this->jenis == "Lagu") {
            $prInfoLengkap .= " ~ {$this->lamaLagu} Menit";
        }

        if ($this->jenis == "Buku") {
            $prInfoLengkap .= " - {$this->halaman} Halaman";
        }

        return $prInfoLengkap;
    }
}

$produk1 = new Produk("Kaibutsu", "Ayase", "Yoasobi", 10000, 3, 0, "Lagu");

$produk2 = new Produk("Mantappu Jiwa", "Jerome Polin", "Gramedia Pustaka", 85000, 0, 228, "Buku");

// echo "Lagu : " . $produk1->getLabel();
// echo "<br>";
// echo "Buku : " . $produk2->getLabel();

// echo "<br>";

echo $produk1->infoLengkap();
echo "<br>";
echo $produk2->infoLengkap();
