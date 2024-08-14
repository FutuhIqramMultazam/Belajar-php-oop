 <?php

    // class 1
    class produk
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

        public function getInfoProduk()
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
            $str = "Buku : " . parent::getInfoProduk() . "- {$this->jmlHalaman} Halaman. ";
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
            $str = "Game :" . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam. ";
            return $str;
        }
    }
    // class buku extends produk


    $produk1 = new buku("Sifat Shalat Nabi", "Ustadz Yazid", "Pustaka Imam", 80000, 100);
    $produk2 = new game("GTA V", "Franklin", "Sony", 500000, 1);

    echo $produk1->getInfoProduk();
    echo "<br>";
    echo $produk2->getInfoProduk();
    echo "<hr>";

    $produk1->setDiskon(50);
    echo $produk1->getHarga();
    echo "<hr>";

    $produk1->setJudul("judul baru banget");
    echo $produk1->getJudul();
