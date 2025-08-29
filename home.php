<?php
// index.php
$judul = "Selamat Berbelanja";
$pesan_home = "Anda berhasil navigasi dari halaman Index.";

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
    </style>
</head>
<body>
    <div class="container">
        <p>Ini adalah Halaman Home<p>
        <h1><?php echo $judul; ?></h1>
        <p><?php echo $pesan_home; ?></p>
        <p>Silakan klik tautan di bawah ini untuk kembali ke halaman Index<p>
    </div>
        <a href="latihan1.php">Halaman latihan 1</a><br>
        <a href="latihan2.php">Halaman latihan 2</a>
        <a href="latihan3.php">Halaman latihan 3</a>

</body>
</html>
