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
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #ffe6f0;
            color: #660033;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 700px;
            margin: 80px auto;
            background-color: #fff0f5;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 20, 147, 0.2);
            text-align: center;
        }
        .box {
            background-color: #ffe0ec;
            border: 1px solid #ff99cc;
            border-radius: 8px;
            padding: 15px;
            margin: 20px auto;
            width: fit-content;
            font-size: 16px;
            color: #b30059;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI KUMPULAN TUGAS KULIAH</h1>
        <h4>Nama: <?php echo $nama; ?></h4>
        <p>NIM: <?php echo $nim; ?></p>
        <p><?php echo $pesan; ?></p>
        <div class="box">
            <a href="home.php">Home Tugas</a>
        </div>
    </div>
</body>
</html>
