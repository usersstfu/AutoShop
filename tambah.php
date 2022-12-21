<?php

$koneksi = mysqli_connect('localhost', 'root','','basdat');
if(isset($_POST["submit"])) {
        $query = "CALL insertmobil('".$_POST["idmobil"]."', '".$_POST["merk"]."', '".$_POST["harga"]."', '".$_POST["warna"]."','".$_POST["tahunpembuatan"]."','".$_POST["pajakberakhir"]."', '".$_POST["gambar"]."', '".$_POST["terjual"]."')";
        mysqli_query($koneksi, $query);
    if (mysqli_affected_rows($koneksi)>0) {
        echo "
        <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'admin.php';
        </script> ";
    }  else {
        echo "
        <script>
        alert('Data Gagal Ditambahkan');
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
    <h1>Tambah Data Mobil</h1>

    <form id="register" action="" method="post">
                <label for="idmobil">ID Mobil : </label>
                <br>
                <input type="text" name="idmobil" id="idmobil"
                required="">

                <br><br>
                <label for="merk">Merk : </label>
                <br>
                <input type="text" name="merk" id="merk">

                <br><br>
                <label for="harga">Harga : </label>
                <br>
                <input type="text" name="harga" id="harga">

                <br><br>
                <label for="warna">Warna : </label>
                <br>
                <input type="text" name="warna" id="warna">
            
                <br><br>
                <label for="tahunpembuatan">Tahun Pembuatan : </label>
                <br>
                <input type="text" name="tahunpembuatan" id="tahunpembuatan">
            
                <br><br>
                <label for="pajakberakhir">Pajak Berakhir : </label>
                <br>
                <input type="text" name="pajakberakhir" id="pajakberakhir">
            
                <br><br>
                <label for="terjual">Status : </label>
                <br>
                <input type="text" name="terjual" id="terjual"
                value="tersedia.jpg">
            
                <br><br>
                <label for="gambar">Gambar : </label>
                <br>
                <input type="text" name="gambar" id="gambar">

                <br><br>
                <button type="submit" name="submit">Tambah Data</button>
          
    </form>
</body>
</html>