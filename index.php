<?php
// index.php
$nama = "ADHELIA ISSABEL";
$nim = "H1101241001";
$pesan = "Silakan klik tautan di bawah ini untuk pergi ke halaman Home Tugas";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PEMBUKA TUGAS</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
        .box { background: #f0f8ff; padding: 10px; border-radius: 10px; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI KUMPULAN TUGAS KULIAH</h1>
        <h4>Nama: $nama</h4>
        <p>NIM: $nim</p>
        <p><?php echo $pesan; ?></p>
        <div class="box">
            <a href="home.php">Home Tugas</a>
        </div>
    </div>
</body>
</html>