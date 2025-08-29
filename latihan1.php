<?php
class PersegiPanjang {
    //properti
    public $panjang;
    public $lebar;

    //method
    public function luas() {
        $hasil = $this->panjang * $this->lebar;
        return "Panjang: $this->panjang, Lebar: $this->lebar, Hasil: $hasil; "}
}

$hsl = new PersegiPanjang();
$hsl->panjang = 10;
$hsl->lebar = 5;

echo $hsl->luas();