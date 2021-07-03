<?php

class Lagu extends Produk implements InfoProduk
{
    public $lamaLagu;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $lamaLagu = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->lamaLagu = $lamaLagu;
    }

    public function infoProduk()
    {
        $prInfoLengkap = "Lagu : " . $this->info() . " - {$this->lamaLagu} Menit";

        return $prInfoLengkap;
    }

    public function info()
    {
        $prInfoLengkap = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $prInfoLengkap;
    }
}
