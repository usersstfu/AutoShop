<?php
require 'functions.php';

$id = $_GET["id"];
$carr = query("SELECT * FROM mobil WHERE idmobil = $id")[0];


if(isset($_POST["submit"])) {
        $upquery = "CALL updatemobil('".$_POST["idmobil"]."', '".$_POST["merk"]."', '".$_POST["harga"]."', '".$_POST["warna"]."','".$_POST["tahunpembuatan"]."','".$_POST["pajakberakhir"]."', '".$_POST["gambar"]."')";
        mysqli_query($koneksi, $upquery);
        if (mysqli_affected_rows($koneksi)>0) {
            echo "
            <script>
            alert('Data Berhasil Diupdate');
            document.location.href = 'admin.php';
            </script> ";
        }  else {
            echo "
            <script>
            alert('Data Gagal Diupdate');
            document.location.href = 'admin.php';
            </script> ";
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mobil</title>
    <link rel="stylesheet" href="style3.css" type="text/css">
</head>
<body>
<div class="main">
    <div class="register">
    <h1>Update Data Mobil</h1>
    <form id="register" action="" method="post">
        
                <label for="idmobil">ID Mobil : </label>
                <br>
                <input type="text" name="idmobil" id="idmobil"
                required value="<?= $carr["idmobil"]; ?>">

                <br><br>
                <label for="merk">Merk : </label>
                <br>
                <input type="text" name="merk" id="merk"
                value="<?= $carr["merk"]; ?>">
            
                <br><br>
                <label for="harga">Harga : </label>
                <br>
                <input type="text" name="harga" id="harga"
                value="<?= $carr["harga"]; ?>">
            
                <br>
                <label for="warna">Warna : </label>
                <br>
                <input type="text" name="warna" id="warna"
                value="<?= $carr["warna"]; ?>">
            
                <br><br>
                <label for="tahunpembuatan">Tahun Pembuatan : </label>
                <br>
                <input type="text" name="tahunpembuatan" id="tahunpembuatan"
                value="<?= $carr["tahunpembuatan"]; ?>">
            
                <br>
                <label for="pajakberakhir">Pajak Berakhir : </label>
                <br>
                <input type="text" name="pajakberakhir" id="pajakberakhir"
                value="<?= $carr["pajakberakhir"]; ?>">
            
                <br><br>
                <label for="gambar">Gambar : </label>
                <br>
                <input type="text" name="gambar" id="gambar"
                value="<?= $carr["gambar"]; ?>">
                <br><br>
                <button type="submit" name="submit">Update Data</button>
        </form>
</body>
</html>