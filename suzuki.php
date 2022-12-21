<?php
require 'functions.php';
$car = query("SELECT * FROM mobil where merk = 'Suzuki'");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>AUTO SHOP</title>

</head>
<header>
    <div class="text-white" style="background-color: #ff8533;">
        <div class="container">
            <img src="img/nama.png" class="py-3" style="max-height: 150px;" alt="">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #f43704;">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item mx-2">
                                <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                            </li>
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    MERK
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="honda.php">HONDA</a></li>
                                    <li><a class="dropdown-item" href="suzuki.php">SUZUKI</a></li>
                                    <li><a class="dropdown-item" href="toyota.php">TOYOTA</a></li>
                                    <li><a class="dropdown-item" href="daihatsu.php">DAIHATSU</a></li>
                                    <li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown mx-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ADMIN
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="login.php">Log In</a></li>

                                </ul>
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<div class="container">


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
 
<div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="card col-lg-12 p-3">
                    <h3>SUZUKI</h3>
                        <hr>
                       <table class="table my-2">
                            <thead>
                                <tr>
                                <th>No</th>
                               <th>ID Mobil</th>
                                <th>Merk</th>
                                <th>Warna</th>
                                <th>Tahun Pembuatan</th>
                                <th>Pajak</th>
                                <th>Gambar</th>
                                <th>Beli</th>
                                <th>Stok</th>
                                </tr>
                            </thead>
                            <tbody>
<?php $i =1; ?>
<?php foreach ($car as $row) : ?>
        <tr>
        <td><?=$i; ?></td>
            <td><?= $row["idmobil"]; ?></td>
            <td><?= $row["merk"]; ?></td>
            <td><?= $row["warna"]; ?></td>
            <td><?= $row["tahunpembuatan"]; ?></td>
            <td>
            <a href="cekpajak.php?id=<?=$row["idmobil"]; ?>">CEK PAJAK</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="100"></td>
            <td>
            <a href="pembeli.php?id=<?=$row["idmobil"]; ?>">Beli</a>
            </td>
            <td><img src="img/<?= $row["terjual"]; ?>" width="100"></td>
            
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>