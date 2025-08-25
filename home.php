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
        <p>Ini adalah Halaman Home<p><br>
        <h1><?php echo $judul; ?></h1>
        <p><?php echo $pesan_home; ?></p>
        <p>Silakan klik tautan di bawah ini untuk kembali ke halaman Index<p><br>
    </div>
        <a href="index.php">Halaman Index</a>

</body>
</html>