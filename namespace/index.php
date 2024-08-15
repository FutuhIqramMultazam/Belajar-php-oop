<?php

require_once "App/init.php";

/* $produk1 = new buku("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", 80000, 100);
$produk2 = new game("GTA V", "Franklin", "Sony", 500000, 1);

$cetakInfoProduk = new cetakInfoProduk();
$cetakInfoProduk->tambahProduk($produk1);
$cetakInfoProduk->tambahProduk($produk2);
echo $cetakInfoProduk->cetak();

echo "<br>"; */

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<br>";
new ProdukUser();
