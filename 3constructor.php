<?php

//jualan produk
// buku
// game

class produk
{

    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLable()
    {
        return "$this->judul, $this->penulis";
    }
}

$produk3 = new produk("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", "80.000");

$produk4 = new produk("GTA V", "Franklin", "Sony", "500.000");


echo "buku :" . $produk3->getLable();
echo "<br>";
echo "game :" . $produk4->getLable();
