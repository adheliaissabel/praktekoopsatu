<?php
namespace App\Model;

use Exception;

class HargaInvalidException extends Exception {}

class MenuValidator {
    public static function validateHarga(int $harga): void {
        if ($harga < 0) {
            throw new HargaInvalidException("Harga tidak boleh negatif!");
        }
    }
}
