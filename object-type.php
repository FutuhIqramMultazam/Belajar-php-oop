<?php

//jualan produk
// buku
// game


// class 1
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
        return "$this->penulis, $this->penerbit";
    }
}

// class 2
class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp.{$produk->harga}) ";
        return $str;
    }
}

$produk3 = new produk("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", "80.000");
$produk4 = new produk("GTA V", "Franklin", "Sony", "500.000");


echo "buku :" . $produk3->getLable();
echo "<br>";
echo "game :" . $produk4->getLable();
echo "<br>";

$infoProduk3 = new cetakInfoProduk();
echo $infoProduk3->cetak($produk3);
