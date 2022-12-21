<?php
require 'functions.php';

$id = $_GET["id"];
$carr = query("SELECT * FROM mobil WHERE idmobil = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pajak</title>
    <link rel="stylesheet" href="style4.css" type="text/css">
</head>
<body>
<h1>Status Pajak Mobil</h1>
<div class="box">
    <table border="1">
    <tr>
            <th colspan="2"> <img src="img/<?= $carr["gambar"]; ?>" width="300"></th>
        </tr>
        <tr>
            <td>ID Mobil </td>
            <td><?= $carr["idmobil"]?></td>
        </tr>
        <tr>
            <td>Merk</td>
            <td><?= $carr["merk"]; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?= $carr["harga"]; ?></td>
        </tr>
        <tr>
            <td>Warna</td>
            <td><?= $carr["warna"]; ?></td>
        </tr>
        <tr>
            <td>Tahun Pembuatan</td>
            <td><?= $carr["tahunpembuatan"]; ?></td>
        </tr>
        <tr>
            <td>Pajak Berakhir</td>
            <td><?= $carr["pajakberakhir"]; ?></td>
        </tr>
        <tr>
            <td>Status Pajak</td>
            <td><?= $carr["statuspajak"]; ?></td>
        </tr>
    </table>

</body>
</html>