<?php
// index.php
$nama = "ADHELIA";
$pesan = "Silakan klik tautan di bawah ini untuk pergi ke halaman Home dan Berbelanja.";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website PHP di Hugging Face</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
        .box { background: #f0f8ff; padding: 10px; border-radius: 10px; margin-top: 15px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI SHOPEE</h1>
        <h4>Halo <strong><?= htmlspecialchars($nama) ?></strong></h4>
        <p><?php echo $pesan; ?></p>
        <div class="box">
            <a href="home.php">Halaman Home</a>
        </div>
    </div>
</body>
</html>