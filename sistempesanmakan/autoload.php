<?php
// autoload.php

spl_autoload_register(function ($class) {
    $prefix = "App\\";
    $base_dir = __DIR__ . "/";

    // cek apakah class pakai prefix App\
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    // buang prefix "App\" biar relatif
    $relative_class = substr($class, $len);

    // ganti \ dengan / jadi sesuai path folder
    $file = $base_dir . str_replace("\\", "/", $relative_class) . ".php";

    if (file_exists($file)) {
        require $file;
    } else {
        echo "⚠️ Autoload gagal cari file: $file<br>";
    }
});
