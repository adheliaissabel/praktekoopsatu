<?php
//buat class Mahasiswa
class Mahasiswa{
  var $nama;
  var $nim;
  var $prodi;
//buat protected property
  protected $ipk;
  private $password;


  // Constructor
  public function __construct($nama, $nim, $prodi, $ipk, $password) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->prodi = $prodi;
    $this->ipk = $ipk;
    $this->password = $password;
  }
  protected function getNilaiIPK(){
    return "Nilai IPK = $this->ipk";
  }
  private function getPassword(){
    return "Password akun = $this->password";
  }
  public function tampilkanNilaiIPK(){
    return $this->getNilaiIPK();
  }
  public function tampilkanPassword(){
    return $this->getPassword();
  }
}

//buat objek langsung dengan constructor
$mahasiswa1 = new Mahasiswa("Aurel", "H11012410", "Sistem Informasi", 3.89, "57483293");
$mahasiswa2 = new Mahasiswa("Adhelia", "H1101241001", "Sistem Informasi", 4.00, "50644303");

echo "Nama: " . $mahasiswa1->nama . "\n" .
     "NIM: " . $mahasiswa1->nim . "\n" .
     "Prodi: " . $mahasiswa1->prodi . "\n" .
     $mahasiswa1->tampilkanNilaiIPK(). "\n".
     $mahasiswa1->tampilkanPassword()."\n\n";

echo "Nama: " . $mahasiswa2->nama . "\n" .
     "NIM: " . $mahasiswa2->nim . "\n" .
     "Prodi: " . $mahasiswa2->prodi . "\n" .
     $mahasiswa2->tampilkanNilaiIPK(). "\n".
     $mahasiswa2->tampilkanPassword()."\n\n";

?>