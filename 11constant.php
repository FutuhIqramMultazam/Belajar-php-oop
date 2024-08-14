<?php

// define('NAMA', 'icam');
// echo NAMA;

// echo "<br>";

// const UMUR =  20;
// echo UMUR;

// class coba
// {
//     const NAMA = "icam";
// }

// echo coba::NAMA;

// echo __FILE__;

// function tes()
// {
//     echo __FUNCTION__;
// }
// tes();

class tesMagic
{
    public function cetakMagic()
    {
        echo __CLASS__;
    }
}

$tesmagic = new tesMagic();
$tesmagic->cetakMagic();
