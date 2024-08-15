<?php

// class 1
abstract class produk
{
    private $judul = "judul",
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

    abstract public function getInfoProduk();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLable()} (Rp. {$this->harga}) ";
        return $str;
    }
}

// class buku extends produk
class buku extends produk
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

    public function getInfoProduk()
    {
        $str = "Buku : " . $this->getInfo() . "- {$this->jmlHalaman} Halaman. ";
        return $str;
    }
}
// class buku extends produk


// class buku extends produk
class game extends produk
{

    public $waktuMain;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktuMain)
    {

        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
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





/* Studi kasus ke 2 */
abstract class Mobil
{
    abstract public function nyalakanMesin();
    abstract public function matikanMesin();

    public function injakGas()
    {
        echo "Mobil mulai berjalan.";
    }
}

class Sedan extends Mobil
{
    public function nyalakanMesin()
    {
        echo "Mesin sedan dinyalakan.";
    }

    public function matikanMesin()
    {
        echo "Mesin sedan dimatikan.";
    }
}

// Pengguna hanya perlu tahu cara menggunakan mobil
$mobilSaya = new Sedan();
$mobilSaya->nyalakanMesin();
$mobilSaya->injakGas();
$mobilSaya->matikanMesin();

/* Penjelasan
Kelas Abstrak Mobil:

Ini seperti "template" atau cetak biru untuk semua jenis mobil.
Kelas ini memiliki metode abstrak nyalakanMesin() dan matikanMesin() yang tidak memiliki implementasi di sini—hanya dideklarasikan.
Kelas Sedan:

Kelas ini mewarisi dari kelas Mobil dan memberikan implementasi spesifik untuk nyalakanMesin() dan matikanMesin().
Di sinilah detail-detail mesin dan cara kerja mobil disembunyikan dari pengguna.
Pengguna ($mobilSaya):

Sebagai pengguna, kamu hanya perlu tahu bagaimana cara menghidupkan, mengendarai, dan mematikan mobil.
Detail bagaimana mesin bekerja tidak perlu diketahui.
Dengan abstraksi, kamu bisa membuat kode yang lebih bersih, terstruktur, dan mudah dikelola, karena hanya berfokus pada apa yang penting bagi pengguna, sementara detail implementasi disembunyikan di dalam kelas yang relevan.

Intinya:
Kelas abstrak berfungsi sebagai cetak biru atau panduan umum.
Kelas turunan memberikan detail spesifik yang mengikuti panduan dari kelas abstrak.

*/