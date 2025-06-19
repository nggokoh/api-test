<?php
$platform = "RenderOn";
$year = date("Y");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $platform ?> - Hosting PHP Gratis & Cepat</title>
    <meta name="description" content="<?= $platform ?> adalah platform hosting modern yang mendukung PHP, Node.js, dan lainnya secara gratis, cepat, dan stabil.">
    <meta name="keywords" content="renderon, hosting gratis, php hosting, render.com, deploy php gratis, cloud hosting">

    <style>
        body {
            background-color: #ffffff;
            color: #333333;
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            padding: 40px 20px;
            text-align: center;
        }
        h1 {
            color: #2b6cb0;
        }
        p {
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto 20px;
        }
        a.button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #2b6cb0;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        footer {
            margin-top: 50px;
            font-size: 14px;
            color: #888;
        }
    </style>
</head>
<body>

    <h1>Selamat Datang di <?= $platform ?></h1>
    <p><?= $platform ?> adalah solusi hosting modern untuk developer dan pemilik situs yang ingin kecepatan, kestabilan, dan kemudahan dalam deployment. Platform ini mendukung PHP, Node.js, Python, dan framework populer lainnya dengan setup yang ringan dan cepat.</p>

    <p>Deploy aplikasi PHP kamu secara gratis dan instan tanpa ribet server. Cocok untuk landing page, API, dan project web modern.</p>

    <a class="button" href="https://render.com/" target="_blank">Coba Render.com Sekarang</a>

    <footer>
        &copy; <?= $year ?> <?= $platform ?> - All rights reserved.
    </footer>

</body>
</html>
