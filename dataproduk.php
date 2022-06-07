<?php
    include 'koneksi.php';
    session_start();
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
        <h1><a href="index.php">Toko Perabot Sejati </a></h1>
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
        <h3>Data Produk</h3>
        <div class="box">
            <p><a href="tambahproduk.php">Tambah Produk</a></p>
           <table border="1" cellspacing="0" class="table">
               <thead>
                   <tr>
                       <th width="60px">No</th>
                       <th>Kategori</th>
                       <th>Nama Produk</th>
                       <th>Harga</th>
                       <th>Dekripsi</th>
                       <th width="150px">Aksi</th>
                   </tr>
               </thead>
               <tbody>
                   <?php
                   $no = 1;
                   $produk = mysqli_query($conn, "SELECT * FROM tb_produk ORDER BY produk_id DESC");
                   if(mysqli_num_rows($produk) > 0){
                   while($row = mysqli_fetch_array($produk)){
                   ?>
                   <tr>
                       <td><?php echo $no++ ?></td>
                       <td>KTG-<?php echo $row['kategori_id'] ?></td>
                       <td><?php echo $row['namaproduk'] ?></td>
                       <td>Rp. <?php echo $row['harga_produk'] ?></td>
                       <td><?php echo $row['deskripsi_produk'] ?></td>

                       <td>
                           <a href="editproduk.php?id=<?php echo $row['produk_id'] ?>"> Edit</a> || 
                           <a href="hapusproduk.php?id=<?php echo $row['produk_id'] ?>" onclick= "return confirm('hapus data ini?')" >Hapus</a>                      
                        </td>
                   </tr>
                   <?php }}else{ ?>
                       <tr>
                       <td colspan="8"> Tidak Ada Data </td>
                       </tr>
                  <?php } ?>
               </tbody>
           </table> 
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