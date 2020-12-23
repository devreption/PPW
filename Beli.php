<?php
session_start();

if(!isset($_SESSION['pelanggan'])){
    header("location:Login.php");
    exit();
  }else{
    $id = $_SESSION['pelanggan'];
    $id_produk = $_GET['id'];

    if(isset($_SESSION['keranjang'][$id_produk])){
        $_SESSION['keranjang'][$id_produk] += 1;
    }else{
        $_SESSION['keranjang'][$id_produk] = 1;
    }

// echo "<pre>";
// print_r($_SESSION);
// echo "<pre>";


echo "<script>alert('Produk telah masuk ke kerenjang belanja');location.href='Keranjang.php';</script>";
}
?>