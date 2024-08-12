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
        $harga = "harga",
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLable()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ";
        return $str;
    }
}




// class buku extends produk
class buku extends produk
{
    public function getInfoProduk()
    {
        $str = "Buku : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}
// class buku extends produk



// class buku extends produk
class game extends produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ~ {$this->waktuMain} Jam. ";
        return $str;
    }
}
// class buku extends produk


// class 2
class cetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLable()} (Rp.{$produk->harga}) ";
        return $str;
    }
}

$produk3 = new buku("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", "80.000", 100, 0);
$produk4 = new game("GTA V", "Franklin", "Sony", "500.000", 0, "1jam");

echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
