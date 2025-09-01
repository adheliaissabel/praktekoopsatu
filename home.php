<?php
//index
$judul = "Eksplorasi Kode Bersama ADHELIA ISSABEL";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        h2 {
            color: #cc0066;
            font-size: 30px;
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
            background-color: #ff66b2;
            color: white;
            border-radius: 6px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #ff3385;
        }

        .pertemuan-box {
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
        <h2><?php echo $judul; ?></h2>

        <div class="pertemuan-box">
            <strong>Pertemuan 3</strong><br>
            <span>29 Agustus 2025</span>
        </div>
        <a href="latihan1.php">Latihan 1</a><br>
        <a href="latihan2.php">Latihan 2</a><br>
        <a href="latihan3.php">Latihan 3</a><br>
        <a href="tugasmandiri.php">Tugas Mandiri</a>
    </div>

</body>
</html>
