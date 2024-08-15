<?php

class karyawan
{
    private $nama, $idKaryawan;

    public function __construct($nama, $idKaryawan)
    {

        $this->nama = $nama;
        $this->idKaryawan = $idKaryawan;
    }

    public function setNama($nama)
    {

        $this->nama = $nama;
    }

    public function getNama()
    {

        return $this->nama;
    }

    public function setIdKaryawan($idKaryawan)
    {
        $this->idKaryawan = $idKaryawan;
    }

    public function getIdKaryawan()
    {
        return $this->idKaryawan;
    }


    public function tampilkanInfo()
    {
        $str = "nama karyawan : {$this->nama} <br> nomor Id : {$this->idKaryawan} ";
        return $str;
    }
}


class manager extends karyawan
{
    private $departemen;

    public function __construct($nama, $idKaryawan, $departemen)
    {

        parent::__construct($nama, $idKaryawan);
        $this->departemen = $departemen;
    }

    public function setDepartemen($departemen)
    {

        $this->departemen = $departemen;
    }

    public function getDepartemen()
    {
        return $this->departemen;
    }

    public function tampilkanInfo()
    {

        $str = parent::tampilkanInfo() . "<br> departemen : {$this->departemen}";
        return $str;
    }
}


$karyawan1 = new karyawan("Futuh", "2307014");
echo $karyawan1->tampilkanInfo();
echo "<hr>";

$manager1 = new manager("Icam", "050803", "PT Cibudug nusantara");
echo $manager1->tampilkanInfo();
