<?php 
 
include 'koneksi.php';
session_start();
error_reporting(0);
$order = mysqli_query($conn,"SELECT * FROM tb_order WHERE order_id ='".$_GET['id']."' ");
$k = mysqli_fetch_object($order);
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
            <li><a href="order.php">order</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Edit Data order</h3>
        <div class="box">
          <form action="" method="POST" >
            <select name="produk" class="input-control" required>
                <option value="">--Pilih--</option>
                <?php
                    $produk = mysqli_query($conn, "SELECT * FROM tb_produk ORDER BY produk_id DESC");
                    while($r = mysqli_fetch_array($produk)){    
                ?>
                <option value="<?php echo $r['produk_id'] ?>"<?php echo ($r['produk_id'] == $k->produk_id)? 'selected' :""; ?>><?php echo $r['namaproduk'] ?></option>
                <?php } ?>
            </select>
            <input type="number" name="jumlah" placeholder="Jumlah Barang" class="input-control" value="<?php echo $k->jumlahbarang ?>"required>
            <textarea name="keterangan" class="input-control" placeholder="keterangan"><?php echo $k->keterangan ?></textarea>
          <input type="submit" name="submit" value="Submit" class="btn" >
        </form>
        <?php
            if(isset($_POST['submit'])){
              //menampung inputan dari form
              $produk = $_POST['produk'];
              $jumlah = $_POST['jumlah'];
              $keterangan = $_POST['keterangan'];

              $update = mysqli_query($conn, "UPDATE tb_order SET
                                    produk_id = '".$produk."',
                                    jumlahbarang = '".$jumlah."',
                                    keterangan = '".$keterangan."'
                                    WHERE order_id = '".$k->order_id."'
                                    ");
            }
            if($update){
                echo '<script>alert("Edit Data Berhasil")</script>';
                echo '<script>window.location="order.php"</script>';
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