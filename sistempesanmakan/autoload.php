<?php
spl_autoload_register(function ($class) {
    // ubah namespace jadi path
    $prefix = 'sistempesanmakan/Controller/MenuController.php';
    $base_dir = __DIR__ . '/';

    // cek kalau class pakai prefix App\
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // ambil sisa nama class
    $relative_class = substr($class, $len);

    // ganti \ dengan / supaya cocok folder
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    if (file_exists($file)) {
        require $file;
    }
});
