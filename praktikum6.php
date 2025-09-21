<?php
class Mobil{
    public $pemilik;
    public $merk;
    public $warna;

    public function hidupkan_mobil(){
        return "Hidupkan sebuah mobil $this->pemilik";
    }

    public function matikan_mobil() {
        return "Matikan mobil";
    }
}

$mobil1= new Mobil();
echo $mobil1->hidupkan_mobil();
//inisiasi ada 2 dalam properti dan diluar 
echo "\n";
$mobil1->pemilik ="syahrul";
echo $mobil1->pemilik;

