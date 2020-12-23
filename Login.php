<?php
include('admin/Koneksi/Koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Welcome To e-STORA</title>

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<!-- Main css -->
<link rel="stylesheet" href="assets/css/styleLogin.css">
<link href="https://fonts.googleapis.com/css?family=Lora|Merriweather:300,400" rel="stylesheet">

</head>
<body>

<!-- PRE LOADER -->
<div class="preloader">
     <div class="sk-spinner sk-spinner-wordpress">
          <span class="sk-inner-circle"></span>
     </div>
</div>

<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
<!-- yang gerak gerak -->
     <div id="particles-js"></div> 
     <div class="container">
          <div class="row">

               <div class="login-page">
                    <div class="form">
                    <form class="login-form" action="proses_Login.php" method="POST">
                        <input name="email" type="text" placeholder="email address"/>
                        <input name="password" type="password" placeholder="password"/>
                        <button name="login" type="submit">login</button>
                        <p class="message">Not registered? <a href="register.php">Create an account</a></p>
                    </form>
                    </div>
                </div>
          </div>
     </div>
</section>
<!-- SCRIPTS -->

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/jquery.parallax.js"></script>
<script src="assets/js/smoothscroll.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>