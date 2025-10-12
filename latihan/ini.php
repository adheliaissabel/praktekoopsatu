<?php
// Class Induk
class Karyawan {
    // Property
    public $nama;
    public $skill;
    public $alamat;
    public $tanggalLahir;

    // Constructor
    public function __construct($nama, $skill, $alamat, $tanggalLahir) {
        $this->nama = $nama;
        $this->skill = $skill;
        $this->alamat = $alamat;
        $this->tanggalLahir = $tanggalLahir;
    }

    // Method untuk menampilkan nama karyawan
    public function tampilkanNama() {
        echo "Nama Karyawan: " . $this->nama . "<br>";
    }
}

// Class Turunan
class Divisi extends Karyawan {
    // Method untuk menampilkan bagian kerja
    public function bagianKerja() {
        echo "Bagian: " . $this->skill . "<br>";
    }
}

// Membuat objek karyawan
// $karyawan1 = new Divisi("Andi Wijaya", "Programmer", "Jakarta", "1998-05-12");

// // Menampilkan data karyawan
// $karyawan1->tampilkanNama();     // dari class Karyawan
// $karyawan1->bagianKerja();       // dari class Divisi
// ?>


// <!-- a) Jelaskan kenapa terjadi error pada coding dibawah ini: 
// <?php 
// //Membuat class induk bunga 
// class bunga{ 
//  protected function sirambunga(){ 
//  return “BUNGA DISIRAM SETIAP PAGI”; 
//  }}// turunkan class bunga ke bungamajemuk 
// class bungamajemuk extends bunga { 
//  protected function biodata() { 
//  return "Bunga melati disebut bunga majemuk"; 
//  } 
// }// turunkan class bungamajemuk ke akartungang 
// class akartunggang extends bungamajemuk { 
//  protected function ciri() { 
//  return "bungamajemuk berakar tunggang"; 
//  } 
//  public function tampilkancirinya(){ 
//  $a = $this->sirambunga(); 
//  $b = $this->biodata(); 
//  $c = $this->ciri(); 
//  return "$a <br /> $b <br /> $c"; 
//  } 
//  } 
//  //buat objek dari class bungamajemuk (instasiasi) 
// $bunga_majemuk = new akartunggang(); 
//  //panggil semua method objek 
//  echo $bunga_majemuk->tampilsemuacirinya(); 
// //$bunga_majemuk->tampilsemuacirinya(); 
// // FATAL ERROR CALL PROTECTED METHOD BUNGA :: tampilsemuacirinya() 
//  ?>. 
//  -->

Jawaban
<!-- Namun sebenarnya, error itu bukan karena method sirambunga(), biodata(), atau ciri(), melainkan karena kamu memanggil method yang tidak ada, yaitu:

echo $bunga_majemuk->tampilsemuacirinya();
 -->
<!-- Tidak ada method dengan nama tampilsemuacirinya() di class mana pun.

Yang ada di class akartunggang adalah:

public function tampilkancirinya()


Karena kamu mencoba memanggil method yang tidak ada, PHP akan tidak menemukannya dan mengira kamu memanggil method dari parent class (bunga) – yang tidak memiliki method itu, sehingga muncul pesan error seperti:

Call to protected method bunga::tampilsemuacirinya( -->