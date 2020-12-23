<?php
include('Koneksi/Koneksi.php');

    $idproduk = $_GET['id'];

    $query = "SELECT * FROM produk WHERE id_produk='$idproduk'";
    $sql = mysqli_query($koneksi,$query);
    $data = mysqli_fetch_array($sql);
    $fotoproduk = $data['foto_produk'];

    $querydelete = "DELETE FROM produk WHERE id_produk='$idproduk'";
    
    if (mysqli_query($koneksi,$querydelete)) {
        if(file_exists("../foto_produk/$fotoproduk")){
            unlink("../foto_produk/$fotoproduk");
        }
        echo "<script> alert('Data Berhasil Dihapus');
        location.href='Home.php?halaman=listproduk';</script>";
    } else {
        echo "<script> alert('Data Gagal Dihapus');
        location.href='Home.php?halaman=produk';</script>";
    }
?>