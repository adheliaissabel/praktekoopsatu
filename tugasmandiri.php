<?php
class Buku {
    public $judul;
    public $penulis;
    public $tahun;

    // Constructor
    public function __construct($judul, $penulis, $tahun) {
        $this->judul = $judul;<br>
        $this->penulis = $penulis;<br>
        $this->tahun = $tahun;<br>
    }
}
class Perpustakaan{
    private $daftarbuku = [];

    public function tambahBuku(Buku $buku) {
        $this->daftarBuku[] = $buku;
    }

    public function tampilkanBuku() {
        if (empty($this->daftarBuku)) {
            echo "Belum ada buku di perpustakaan.<br>";
        } else {
            echo "<h3>Daftar Buku di Perpustakaan:</h3>";
            echo "<ul>";
            foreach ($this->daftarBuku as $buku) {
                echo "<li><strong>{$buku->judul}</strong> - {$buku->penulis} ({$buku->tahun})</li>";
            }
            echo "</ul>";
        }
    }
}

$perpustakaan = new Perpustakaan();

$buku1 = new Buku("Sistem Informasi Manajemen", "Raymond McLeod, Jr", 2025);
$buku2 = new Buku("Pengantar Sistem Informasi", "James A", 2017);
$buku3 = new Buku("Manajemen Risiko", "Bambang Rianto Rustam", 2020);
$buku4 = new Buku("Manajemen Pemasaran", "Rusydi Abubakar", 2016);
$buku5 = new Buku("Analisis Perancangan Sistem Informasi", "Sita Muhromi", 2006);

$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);
$perpustakaan->tambahBuku($buku3);
$perpustakaan->tambahBuku($buku4);
$perpustakaan->tambahBuku($buku5);

$perpustakaan->tampilkanBuku();
?>