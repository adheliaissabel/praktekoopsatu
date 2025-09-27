<?php
// autoload.php → PSR-4 sederhana

spl_autoload_register(function ($class) {
    // hanya handle namespace "App\..."
    $prefix = "App\\";
    $base_dir = __DIR__ . "/";

    // cek apakah class menggunakan prefix App\
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // ambil sisa namespace setelah "App\"
    $relative_class = substr($class, $len);

    // ganti "\" dengan "/" → mapping ke file system
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";

    if (file_exists($file)) {
        require $file;
    }
});
