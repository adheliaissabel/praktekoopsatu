<?php
// index.php
$judul = "Selamat Datang di Kumpulan Tugas ADHELIA ISSABEL";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e6f0ff;
            color: #003366;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 700px;
            margin: 80px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 100, 0.1);
            text-align: center;
        }

        h1 {
            color: #0059b3;
            font-size: 28px;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            margin: 10px 0;
        }

        a {
            display: inline-block;
            margin: 8px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #fb65ccff;
            color: white;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: hsla(330, 100%, 49%, 1.00);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $judul; ?></h1>

        <p>Silakan klik tautan di bawah ini untuk mengakses tugas-tugas:</p>

        <a href="latihan1.php">Latihan 1</a><br>
        <a href="latihan2.php">Latihan 2</a><br>
        <a href="latihan3.php">Latihan 3</a><br>
        <a href="tugasmandiri.php">Tugas Mandiri</a>
    </div>
</body>
</html>
