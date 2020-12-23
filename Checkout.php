<?php
include('admin/Koneksi/Koneksi.php');
session_start();

if(!isset($_SESSION['pelanggan'])){
  header("location:Login.php");
  exit();
}else{
  $id = $_SESSION['pelanggan'];
  $sql = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan = '$id'");
  $data = mysqli_fetch_array($sql);
  
  if(!isset($_SESSION['keranjang'])){
    echo "<script> alert('Belum ada pembelian');
    location.href='Home.php';</script>";
  }else{
   

$alamat = $data['alamat_pelanggan'];
$telepon = $data['telepon_pelanggan'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-S T O R A</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="assets/css/checkout.css" type="text/css" media="all" />
<script src="assets/js/ch.js"></script>
<script src="assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="assets/js/custom.js"></script>
<body>

<!-- PRE LOADER -->

<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

  <!-- Top -->
<div id="top">
  <div class="shell">
    <!-- Header -->
 <div id="demo-container">  
  <h1 id="logo"><a href="Home.php">e-S T O R A</a></h1>
  <ul id="simple-menu">
    <li><a href="logout.php"><span>Logout</span></a></li>
    <li><a href="Myaccount.php"><span>My Account</span></a></li>
    <li><a href="Home.php"><span>Home</span></a></li>
    </ul>
</div>
    <!-- End Header -->
<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <?php
            $nomor = 1;
            $totalbelanja = 0;
            foreach ($_SESSION['keranjang'] as $id_produk => $jumlah) {
                # code...
                $sql = mysqli_query($koneksi,"SELECT * FROM produk WHERE id_produk='$id_produk'");
                $data = mysqli_fetch_array($sql);
                $subharga = $data['harga_produk']*$jumlah;
        ?>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='foto_produk/<?= $data['foto_produk']; ?>' >
              </td>
              <td>
                <span class='thin' style="font-size:20px;"><?= $data['jenis_produk']; ?></span>
                <br>
                <br>
                <span class='thin'><?= $data['nama_produk']; ?></span>
                <br>
                <br>
                <br>
                Deskripsi :
                <br><?= $data['deskripsi_produk']; ?><br><br>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price' ><?= $jumlah ?> x Rp <?= number_format($data['harga_produk']); ?></div>
              </td>
            </tr>
          </tbody>
        </table>
        <?php
            $nomor++;
            $totalbelanja+=$subharga;
            }
        ?>                    
        <div class='line'></div>
        <div class="alamat">
          <a>Address : <?= $alamat ?></a>
        </div>
        <div class='line'></div>
        <div class="telepon">
          <a>Phone number : <?= $telepon ?></a>
        </div>
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;color:black;font-size:20px;'>
            <a style="">Total</a>
          </span>
          <span style='float:right; text-align:right;'>
            Rp <?= number_format($totalbelanja); ?>
          </span>
          <br>
          <br>
          <br>
        </div>
        <div class="checkout">
            <a href="Checkout.php" class="btn btn-success">Pay</a>
        </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
  }
}
?>