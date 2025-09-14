<?php
class Mahasiswa
{
  var $nama;
  var $nim;
  var $prodi;
  var $angkatan;
  var $keterangan;

  public function getKeterangan(){
    return $this->keterangan;
  }
  public function __construct($nama, $nim, $prodi, $angkatan, $keterangan){
    $this->nama= $nama;
    $this->nim= $nim;
    $this->prodi= $prodi;
    $this->angkatan= $angkatan;
    $this->keterangan=$keterangan;
  }
}

$mhs1 = new Mahasiswa("Adhelia", "H1101241001", "Sistem Informasi", "2024", "Aktif");
$mhs2 = new Mahasiswa("Gyraldine", "H1101241017", "Sistem Informasi", "2024", "Cuti");
$mhs3 = new Mahasiswa("Sinta", "H1101241067", "Sistem Informasi", "2024", "Keluar");

echo "Nama: " . $mhs1->nama . "\n" .
     "NIM: " . $mhs1->nim . "\n" .
     "Prodi: " . $mhs1->prodi . "\n" .
     "Angkatan: " . $mhs1->angkatan . "\n" .
     "Keterangan: " . $mhs1->getKeterangan() . "\n";
echo "<br><br>";

echo "Nama: " . $mhs2->nama . "\n".
     "NIM: " . $mhs2->nim . "\n" .
     "Prodi: " . $mhs2->prodi . "\n" .
     "Angkatan: " . $mhs2->angkatan . "\n" .
     "Keterangan: " . $mhs2->getKeterangan() . "\n";

echo "Nama: " . $mhs3->nama . "\n" .
     "NIM: " . $mhs3->nim . "\n" .
     "Prodi: " . $mhs3->prodi . "\n" .
     "Angkatan: " . $mhs3->angkatan . "\n" .
     "Keterangan: " . $mhs3->getKeterangan() . "\n", "\n";

?>