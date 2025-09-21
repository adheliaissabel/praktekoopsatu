<?php
class Bunga{
    public $nama;
    public $warna;

    public function __construct($nama, $warna) {
        $this->nama = $nama;
        $this->warna = $warna;
    }
    public function tampilkan_info(){
        echo "Bunga $this->nama berwarna $this->warna \n";
    }
    public function __destruct() {
        echo "Bunga $this->nama berwarna $this->warna telah hilang \n";
    }
}

$bungamawar = new Bunga("Mawar", "Merah");
$bungamawar->tampilkan_info();

$bungamelati = new Bunga("Melati", "Putih");
$bungamelati->tampilkan_info();
?>