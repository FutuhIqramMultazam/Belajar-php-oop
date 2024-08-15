<?php

interface infoProduk
{
    public function getInfoProduk();
}

// class 1
abstract class produk
{
    protected $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    protected $diskon = 0;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // public function getHarga()
    // {
    //     return $this->harga;
    // }

    public function getLable()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
}

// class buku extends produk
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
// class buku extends produk


// class buku extends produk
class game extends produk implements infoProduk
{

    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game :" . $this->getInfo() . " ~ {$this->waktuMain} Jam. ";
        return $str;
    }
}
// class buku extends produk

class cetakInfoProduk
{
    public $daftarProduk = [];
    public function tambahProduk(produk $produk)
    {

        $this->daftarProduk[] = $produk;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}

$produk1 = new buku("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", 80000, 100);
$produk2 = new game("GTA V", "Franklin", "Sony", 500000, 1);

$cetakInfoProduk = new cetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);
echo $cetakInfoProduk->cetak();
