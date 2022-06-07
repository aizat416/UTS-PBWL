<?php
    include 'koneksi.php';
    session_start();
    if($_SESSION['status_login'] !== true){
        echo '<script>window.location="login.php"</script>';
        error_reporting(0);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Toko Perabot sejati</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">Toko Perabot Sejati</a></h1>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="datakategori.php">Data Kategori</a></li>
            <li><a href="dataproduk.php">Data Produk</a></li>
            <li><a href="order.php">order</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Dashboard</h3>
        <div class="box">
            <h4 style="text-align : center">TOKO USAHA PERABOT SEJATI</h4>
            <p style="text-align : center">Jl. Hidayahtullah No.27, Pekan Kuala, Kec. Kuala, Kabupaten Langkat, Sumatera Utara 20762</p>
            <img src="toko sejati.jpg" align-items="center" width="1050px" height="500px">
        </div>
        </div>
    </div>
    
     <!-- footer -->
     <footer>
         <div class="container">
         <p style="text-align : center"><small>Copyright &copy; 2022 -Aizat Wisaksono_0702192038</small>
         </div>
     </footer>
</body>
</html>