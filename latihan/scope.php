<?php
class Mahasiswa {
    // Property static (milik class, bukan objek)
    public static $namaUniversitas = "Universitas Contoh Indonesia";

    // Method static
    public static function aturanUmum() {
        echo "Mahasiswa wajib hadir minimal 75% dari total perkuliahan.";
    }
}

// Mengakses property dan method menggunakan scope resolution operator ::

// Akses property static
echo Mahasiswa::$namaUniversitas;
echo "<br>";

// Akses method static
Mahasiswa::aturanUmum();

?>

<!-- Scope Resolution Operator (::) a
 dalah simbol dalam PHP yang digunakan 
 untuk mengakses property, method, atau 
 konstanta yang bersifat static, atau untuk 
 merujuk ke class parent, serta untuk 
 mengakses konstanta dari class tanpa membuat
  objek. -->

<!-- Kapan Digunakan?

Mengakses property/method static dari class

Mengakses konstanta dari class

Mengakses method/property dari parent class (parent::)

Mengakses method/property dari class itu sendiri (self::) -->