<?php
// index.php
$nama = "Adhelia";
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
        .box { background: #f0f8ff; padding: 20px; border-radius: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI SHOPEE</h1>
        <p>Halo <strong><?= htmlspecialchars($nama) ?></strong></p>
        <p><?php echo $pesan; ?></p>
        <div class="box">
            <<a href="home.php">Halaman Home</a>
        </div>
    </div>
</body>
</html>
