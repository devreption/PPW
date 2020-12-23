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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-S T O R A</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="assets/css/styleShop1.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->
<script src="assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.jcarousel.pack.js" type="text/javascript"></script>
<script src="assets/js/jquery.slide.js" type="text/javascript"></script>
<script src="assets/js/jquery-func.js" type="text/javascript"></script>
<script src="assets/js/custom.js"></script>
</head>
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
    <li><a href="Logout.php" onclick="return confirm('Are you sure you want to logout ?')"><span>Logout</span></a></li>
    <li><a href="Myaccount.php"><span>My Account</span></a></li>
    <li><a href="Home.php"><span>Home</span></a></li>
    </ul>
</div>
    <!-- End Header -->
    <!-- Slider -->
    <div id="slider">
      <div id="slider-holder">
        <ul>
          <li><a href="#"><img src="assets/images/fall.jpg" alt="" /></a></li>
          <li><a href="#"><img src="assets/images/winter.jpg" alt="" /></a></li>
          <li><a href="#"><img src="assets/images/summer1.jpg" alt="" /></a></li>
          <li><a href="#"><img src="assets/images/spring.jpg" alt="" /></a></li>
        </ul>
      </div>
      <div id="slider-nav"> <a href="#" class="prev">Previous</a> <a href="#" class="next">Next</a> </div>
    </div>
    <!-- End Slider -->
  </div>
</div>
<!-- Top -->
<!-- Main -->
<div id="main">
  <div class="shell">
    <!-- Search, etc -->
    <div class="options">
      <!-- <div class="search">
        <form action="#" method="post">
          <span class="field">
          <input type="text" class="blink" value="SEARCH" title="SEARCH" />
          </span>
          <input type="text" class="search-submit" value="GO" />
        </form>
      </div> -->
      <!-- <span class="left"> -->
        <!-- <a href="#">Advanced Search</a></span> -->
      <div class="right"> 
        <span class="cart"> 
          <a href="Keranjang.php" class="cart-ico">&nbsp;</a>
        </span> 
      </div>
    </div>
    <!-- End Search, etc -->
    <!-- Content -->
    <div id="content">
      <!-- Tabs -->
      <div class="tabs">
        <ul>
          <li><a href="#" class="red"><span>Winter Clothes</span></a></li>
          <li><a href="#"><span>Summer Clothes</span></a></li>
          <li><a href="#" class="red"><span>Spring Clothes</span></a></li>
          <li><a href="#"><span>Fall Clothes</span></a></li>
        </ul>
      </div>
      <!-- Tabs -->
      <!-- Container -->
      <div id="container">
        <div class="tabbed">
          <!-- First Tab Content -->
          <div class="tab-content" style="display:block;">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <?php
					      $sql = mysqli_query($koneksi,"SELECT * FROM produk WHERE jenis_produk='Winter Clothes'");
					      while($data = mysqli_fetch_array($sql)){							
			        ?>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="foto_produk/<?= $data['foto_produk']; ?>" alt="" /></a> </div>
                  <p> Item Name: <span><?= $data['nama_produk']; ?></span><br />
                    Size List : <span>XS/S/M/L/XL</span><br />
                    Brand Name: <a href="#">H & M</a> </p>
                  <p class="price">Price:  <strong>Rp <?= number_format($data['harga_produk']); ?></strong></p>
                  <a href="beli.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary btn-cons">Beli</a>
                </li>
              </ul>
              <?php
                    }
              ?>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End First Tab Content -->
          <!-- Second Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <?php
				        $sql = mysqli_query($koneksi,"SELECT * FROM produk WHERE jenis_produk='Summer Clothes'");
				        while($data = mysqli_fetch_array($sql)){							
			        ?>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="foto_produk/<?= $data['foto_produk']; ?>" alt="" /></a> </div>
                  <p> Item Name: <span><?= $data['nama_produk']; ?></span><br />
                    Size List : <span>XS/S/M/L/XL</span><br />
                    Brand Name: <a href="#">H & M</a> </p>
                  <p class="price">Price:  <strong>Rp <?= number_format($data['harga_produk']); ?></strong></p>
                  <a href="beli.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary btn-cons">Beli</a>
                </li>
              </ul>
              <?php
                }
              ?>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Second Tab Content -->
          <!-- Third Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <?php
                $sql = mysqli_query($koneksi,"SELECT * FROM produk WHERE jenis_produk='Spring Clothes'");
                while($data = mysqli_fetch_array($sql)){							
              ?>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="foto_produk/<?= $data['foto_produk']; ?>" alt="" /></a> </div>
                  <p> Item Name: <span><?= $data['nama_produk']; ?></span><br />
                    Size List : <span>XS/S/M/L/XL</span><br />
                    Brand Name: <a href="#">H & M</a> </p>
                  <p class="price">Price:  <strong>Rp <?= number_format($data['harga_produk']); ?></strong></p>
                  <a href="beli.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary btn-cons">Beli</a>
                </li>
              </ul>
              <?php
                }
              ?>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Third Tab Content -->
          <!-- Fourth Tab Content -->
          <div class="tab-content">
            <div class="items">
              <div class="cl">&nbsp;</div>
              <?php
                $sql = mysqli_query($koneksi,"SELECT * FROM produk WHERE jenis_produk='Fall Clothes'");
                while($data = mysqli_fetch_array($sql)){							
              ?>
              <ul>
                <li>
                  <div class="image"> <a href="#"><img src="foto_produk/<?= $data['foto_produk']; ?>" alt="" /></a> </div>
                  <p> item name:  <span><?= $data['nama_produk']; ?></span><br />
                    Size List : <span>8/8.5/9.5/10/11</span><br />
                    Brand Name: <a href="#">H & M</a> </p>
                  <p class="price">Price:  <strong>Rp <?= number_format($data['harga_produk']); ?></strong></p>
                  <a href="beli.php?id=<?= $data['id_produk']; ?>" class="btn btn-primary btn-cons">Beli</a>
                </li>
              </ul>
              <?php
                }
              ?>
              <div class="cl">&nbsp;</div>
            </div>
          </div>
          <!-- End Fuorth Tab Content -->
        </div>
        <!-- Brands -->
        <div class="brands">
          <h3>Brands</h3>
          <div class="logos"> 
            <a href="#"><img src="assets/images/hm.png" alt="" /></a> 
            <a href="#"><img src="assets/images/zara.png" alt="" /></a> 
            <a href="#"><img src="assets/images/th.png" alt="" /></a> 
            <a href="#"><img src="assets/images/ch.png" alt="" /></a>
            <a href="#"><img src="assets/images/gap.png" alt="" /></a>
            <a href="#"><img src="assets/images/pnb2.png" alt="" /></a>
            <a href="#"><img src="assets/images/uniqlo.png" alt="" /></a> 
            <a href="#"><img src="assets/images/supreme.png" alt="" /></a> </div>
        </div>
        <!-- End Brands -->
        <!-- Footer -->
        <div id="footer">
          <div class="left"> 
            <a href="Home.php">Home</a> <span>|</span>
            <a href="Home.php">About</a> <span>|</span> 
            <a href="Home.php">My Account</a> <span>|</span> 
            <a href="Home.php">The Store</a> <span>|</span> 
          <div class="right"> &copy; estora.com.  <a href="Home.php">e-Stora.com</a> </div>
        </div>
        <!-- End Footer -->
      </div>
      <!-- End Container -->
    </div>
    <!-- End Content -->
  </div>
</div>
<!-- End Main -->
</body>
</html>
<?php
    }
?>