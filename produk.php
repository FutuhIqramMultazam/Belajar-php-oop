<?php

//jualan produk
// buku
// game

class produk
{

    public $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga";

    // public function hello()
    // {
    //     echo "Hello World";
    // }

    public function getLable()
    {
        echo "$this->judul, $this->penulis";
    }
}

// $produk1 = new produk();
// $produk1->judul = "Syarah Aqidah Ahlussunnah";
// var_dump($produk1);


// $produk2 = new produk();
// $produk2->judul = "Kitab Tauhid";
// $produk2->propertiBaru = "";
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul = "Sifat shalat nabi";
$produk3->penulis = "Ustadz Yazid Bin Abdul Qodir Jawas Rahimahullah";
$produk3->penerbit = "Pustaka Imam Syafi'i";
$produk3->harga = "80.000";
// var_dump($produk3);

// echo "buku : $produk3->judul, $produk3->penulis";
// echo "<br>";
// $produk3->getLable(); // bedanya sama function biasa itu ga perlu pake property, di bawah ini adalah contoh nya: 
// function cetak()
// {
//     echo "Hello World";
// }
// cetak();

$produk4 = new produk();
$produk4->judul = "GTA V";
$produk4->penulis = "Franklin";
$produk4->penerbit = "playstation";
$produk4->harga = "600.000";

echo "buku :" . $produk3->getLable();
echo "<br>";
echo "game :" . $produk4->getLable();
