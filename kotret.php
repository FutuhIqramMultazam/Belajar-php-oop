<?php

// bikin class 
class listName
{
    // bikin property 
    public $nama,
        $usia,
        $jk,
        $hobi;
    // method constracter 
    public function __construct($nama, $usia, $jk, $hobi)
    {

        $this->nama = $nama;
        $this->usia = $usia;
        $this->jk = $jk;
        $this->hobi = $hobi;
    }

    public function displayInfo()
    {
        echo "Nama : {$this->nama} <br>";
        echo "Usia : {$this->usia} <br>";
        echo "Jenis kelamin : {$this->jk} <br>";
        echo "Hobi : {$this->hobi} <br>";
    }
}


// bikin class extedns
class ekstrim extends listName
{

    public $exstrim;
    public function __construct($nama, $usia, $jk, $hobi, $exstrim)
    {
        parent::__construct($nama, $usia, $jk, $hobi,);
        $this->exstrim = $exstrim;
    }

    public function displayInfo()
    {
        // studi kasus hobi seseoarang
        parent::displayInfo();
        echo "ternyata hobinya ekstrim ah harus {$this->exstrim} <br>";
    }
}


// instansi
$list1 = new listName("futuh", 20, "pria", "basket");
$list2 = new ekstrim("icam", 19, "pria", "ngoding", "mikir");


// cetak menggunakan method
$list1->displayInfo();
echo "<br>";
$list2->displayInfo();

// selesai
