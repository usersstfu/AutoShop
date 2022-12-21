<?php

$koneksi = mysqli_connect('localhost', 'root','','basdat');
if(isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
        
    $check = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
    if(mysqli_num_rows($check)=== 1) {
        echo "
        <script>
        alert('Login Berhasil');
        document.location.href = 'admin.php';
        </script> ";
    }  else {
        echo "
        <script>
        alert('Username/Password Salah');
        document.location.href = 'login.php';
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
    <title>Halaman Login!</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
     <form class="box" action="" method="post">
        <h1>LOGIN</h1>
             <input type="text" name="username" placeholder="username">
             
             <input type="password" name="password" placeholder="password">

             <input type="submit" name="login" value="Login">
            
        

</form>
</body>
</html>