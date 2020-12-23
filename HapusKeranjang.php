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
        header("location:Home.php");
    }else{
        $id_produk=$_GET['id'];
        unset($_SESSION['keranjang'][$id_produk]);

        echo "<script>alert('Produk dihapus dari keranjang');location.href='Keranjang.php';</script>";
    }
}        
?>