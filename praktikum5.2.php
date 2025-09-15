<?php
//buat class Mahasiswa
class Mahasiswa{
  var $nama;
  var $nim;
  var $prodi;
//buat protected property
  protected $ipk;
  private $password;


  protected function getNilaiIPK(){
    return "Nilai IPK = $this->ipk";
  }
  private function getPassword(){
    return "Password akun = $this->password";
  }
  function setNilaiIPK($ipk){
    $this->ipk = $ipk;
  }
  function setPassword($password){
    $this->password = $password;
  }
  public function tampilkanNilaiIPK(){
    return $this->getNilaiIPK();
  }
  public function tampilkanPassword(){
    return $this->getPassword();
  }
}

//buat objek
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Aurel";
$mahasiswa1->nim = "H11012410";
$mahasiswa1->prodi = "Sistem Informasi";
$mahasiswa1->setNilaiIPK(3.89);
$mahasiswa1->setPassword("57483293");

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->nama = "Adhelia";
$mahasiswa2->nim = "H1101241001";
$mahasiswa2->prodi = "Sistem Informasi";
$mahasiswa2->setNilaiIPK(4.00);
$mahasiswa2->setPassword("50644303");

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