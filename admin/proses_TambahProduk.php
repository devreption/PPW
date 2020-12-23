<?php
include('Koneksi/Koneksi.php');

    if(isset($_POST['save'])){
        $jenisproduk = $_POST['jenis'];

        if ($jenisproduk == "Winter Clothes") {
            $jenisproduk = "Winter Clothes";
        }else if ($jenisproduk == "Summer Clothes") {
            $jenisproduk = "Summer Clothes";
        }else if ($jenisproduk == "Spring Clothes") {
            $jenisproduk = "Spring Clothes";
        }else if ($jenisproduk == "Fall Clothes") {
            $jenisproduk = "Fall Clothes";
        }      

        $nama = $_POST['nama'];
        $harga = $_POST['harga']; 
        $namafoto = $_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];
        $deskripsi = $_POST['deskripsi'];
        
        move_uploaded_file($lokasifoto,"../foto_produk/".$namafoto);

        $query = "INSERT INTO produk(jenis_produk,nama_produk,harga_produk,foto_produk,deskripsi_produk) 
                    VALUES ('$jenisproduk','$nama','$harga','$namafoto','$deskripsi')";
        $sql = mysqli_query($koneksi,$query);
        
        if($sql){
            echo "<script> alert('Data Berhasil Disimpan');
            location.href='Home.php?halaman=listproduk';</script>";
        }else{
            echo "<script> alert('Data Gagal Disimpan');
            location.href='Home.php?halaman=tambahproduk';</script>";
        }
    }
?>  