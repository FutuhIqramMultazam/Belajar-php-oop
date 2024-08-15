<?php

class buku extends produk implements infoProduk
{
    public $jmlhalaman;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman,)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga,);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Buku : " . $this->getInfo() . "- {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}
