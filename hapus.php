<?php
$koneksi = mysqli_connect('localhost', 'root','','basdat');
$id = $_GET["id"];


        $delquery = "DELETE FROM mobil WHERE idmobil = $id";
        mysqli_query($koneksi, $delquery);
    if (mysqli_affected_rows($koneksi)>0) {
        echo "
        <script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'admin.php';
        </script> ";
    }  else {
        echo "
        <script>
        alert('Data Gagal Dihapus');
        document.location.href = 'admin.php';
        </script> ";
    }
?>
