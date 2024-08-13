<?php


// class 1
class produk
{

    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga",
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = strtolower($tipe);
    }

    public function getLable()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ";
        if ($this->tipe == "buku") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } elseif ($this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
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

$produk3 = new produk("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", "80.000", 100, 0, "buku");
$produk4 = new produk("GTA V", "Franklin", "Sony", "500.000", 0, "1jam", "game");

echo $produk3->getInfoLengkap();
echo "<br>";
echo $produk4->getInfoLengkap();
