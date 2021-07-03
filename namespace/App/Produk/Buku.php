<?php

class Buku extends Produk implements InfoProduk
{
    public $halaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $halaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->halaman = $halaman;
    }

    public function infoProduk()
    {
        $prInfoLengkap = "Buku : " . $this->info() . " - {$this->halaman} Halaman";

        return $prInfoLengkap;
    }

    public function info()
    {
        $prInfoLengkap = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $prInfoLengkap;
    }
}
