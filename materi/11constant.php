<?php

// cara ke 1
define('NAMA', 'icam');
echo NAMA;

echo "<br>";

// cara ke 2
const UMUR =  20;
echo UMUR;

class coba
{
    const NAMA = "icam";
}

echo coba::NAMA;

echo __FILE__;

function tes()
{
    echo __FUNCTION__;
}
tes();

class tesMagic
{
    public function cetakMagic()
    {
        echo __CLASS__;
    }
}

$tesmagic = new tesMagic();
$tesmagic->cetakMagic();
