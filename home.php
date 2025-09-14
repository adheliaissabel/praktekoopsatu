<?php
// index.php

// Judul halaman
$judul = "Eksplorasi Kode Bersama ADHELIA ISSABEL";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $judul; ?></title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background-color: #ffe6f0;
            color: #660033;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 80px auto;
            background-color: #fff0f5;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 20, 147, 0.2);
        }

        h2 {
            color: #cc0066;
            font-size: 30px;
            text-align: center;
            margin-bottom: 30px;
        }

        .pertemuan {
            margin-bottom: 40px;
            border: 1px solid #ffb3d9;
            border-radius: 10px;
            padding: 20px;
            background-color: #ffe6f5;
        }

        .pertemuan-box {
            background-color: #ffe0ec;
            border: 1px solid #ff99cc;
            border-radius: 8px;
            padding: 12px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 16px;
            color: #b30059;
        }

        .link-group {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .link-group a {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #ff66b2;
            color: white;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        .link-group a:hover {
            background-color: #ff3385;
        }

        @media (max-width: 600px) {
            .link-group {
                flex-direction: column;
                align-items: center;
            }

            .link-group a {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2><?php echo $judul; ?></h2>

        <!-- Pertemuan 3 -->
        <div class="pertemuan">
            <div class="pertemuan-box">
                <strong>Pertemuan 3</strong><br>
                <span>29 Agustus 2025</span>
            </div>
            <div class="link-group">
                <a href="latihan1.php">Latihan 1</a>
                <a href="latihan2.php">Latihan 2</a>
                <a href="latihan3.php">Latihan 3</a>
                <a href="tugasmandiri.php">Tugas Mandiri</a>
            </div>
        </div>

        <!-- Pertemuan 5 -->
        <div class="pertemuan">
            <div class="pertemuan-box">
                <strong>Pertemuan 5</strong><br>
                <span>12 September 2025</span>
            </div>
            <div class="link-group">
                <a href="praktek3.php">Latihan 1</a>
                <a href="praktikum5.1.php">Praktikum 5.1</a>
            </div>
        </div>
    </div>
</body>
</html>
