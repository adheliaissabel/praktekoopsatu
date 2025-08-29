<?php
class Produk {
    // properti
    public $nama;
    public $harga;
    public $stok;

    // Constructor
    public function __construct($nama, $harga, $stok) {
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;

    // method tampilkaninfo
    public function tampilkanInfo() {
        return "Nama Produk: $this->nama, Harga Produk: $this->harga, Stok Produk: $this->stok";
    }

    // method beliproduk
    public function beliProduk($jumlah) {
        if ($jumlah > $this->stok) {
            return "Stok tidak mencukupi. Stok tersedia: $this->stok.";
        }
        $this->stok -= $jumlah;
        $totalHarga = $jumlah * $this->harga;
        return "Pembelian berhasil. Jumlah: $jumlah." Sisa stok: $this->stok.";
    }

}

$produk = new produk("Buku", 30000, 10);

// Menampilkan hasil
echo $produk->tampilkanInfo();
echo "<br>";
echo $produk->beliProduk(5);
echo "<br>";
echo $produk->tampilkanInfo();