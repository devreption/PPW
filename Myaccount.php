<?php
  session_start();
  include('admin/Koneksi/Koneksi.php');

  if(!isset($_SESSION['pelanggan'])){
    header("location:Login.php");
    exit();
  }else{
    $id = $_SESSION['pelanggan'];
    $sql = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE id_pelanggan = '$id'");
    $data = mysqli_fetch_array($sql);
  } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>e-S T O R A</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="assets/common-css/styleAcc.css" type="text/css" media="all" />
<!--[if lte IE 6]><style type="text/css" media="screen">.tabbed { height:420px; }</style><![endif]-->

  <!-- Font -->
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700%7CAllura" rel="stylesheet">

  <!-- Stylesheets -->
  
  <link href="assets/common-css/bootstrap.css" rel="stylesheet">
  <script src="assets/js/jquery-1.4.1.min.js" type="text/javascript"></script>
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
    <li><a href="logout.php"><span>Logout</span></a></li>
    <li><a href="Myaccount.php"><span>My Account</span></a></li>
    <li><a href="Home.php"><span>Home</span></a></li>
    </ul>
</div>
</div>
    <!-- End Header -->
   <section class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-md-1 col-lg-2"></div>
        <div class="col-md-10 col-lg-8">
          <div class="intro">
            <div class="profile-img"><img src="assets/images/pp.png" alt=""></div>
            <h2><b><?= $data['nama_pelanggan']; ?></b></h2>
            <!-- <h4 class="font-yellow">Platinum Member</h4> -->
            <ul class="information margin-tb-30">
              <br>
              <li><b>Email : </b><?php echo $data['email_pelanggan']; ?></li>
              <li><b>No Telepon : </b><?php echo $data['telepon_pelanggan']; ?></li>              <li><b>Address : </b><?php echo $data['alamat_pelanggan']; ?></li>
              <br>
              <li><b>Date Created : </b><?php echo $data['datecreate_pelanggan']; ?></li>
            </ul>
          </div><!-- intro -->
        </div><!-- col-sm-8 -->
      </div><!-- row -->
    </div><!-- container -->
  </section><!-- intro-section -->
    <!-- End Slider -->
  </div>
</div>
</body>
</html>
