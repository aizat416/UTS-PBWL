<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();

$kategori = mysqli_query($conn, "SELECT * FROM tb_katagori WHERE kategori_id = '".$_GET['id']."' ");
if(mysqli_num_rows($kategori) == 0){
    echo '<script>window.location="datakategori.php"</script>'; 
}
$k = mysqli_fetch_object($kategori);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Toko Perabot Sejati</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">Toko Perabot Sejati</a></h1>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="datakategori.php">Data Kategori</a></li>
            <li><a href="dataproduk.php">Data Produk</a></li>
            <li><a href="keranjang.php">Keranjang</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Edit Data Kategori</h3>
        <div class="box">
          <form action="" method="POST">
          <input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k->nama_kategori ?>" required>
          <input type="submit" name="submit" value="Submit" class="btn" >
        </form>
        <?php
            if(isset($_POST['submit'])){
                $nama = ucwords($_POST['nama']);
                $update = mysqli_query($conn, "UPDATE tb_katagori SET
                                    nama_kategori = '".$nama."'
                                    WHERE kategori_id = '".$k->kategori_id."' ");
            }
            if($update){
                echo '<script>alert("Edit Data Berhasil")</script>';
                echo '<script>window.location="datakategori.php"</script>';
            }else{
                echo mysqli_error($conn);
            }
        ?>
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