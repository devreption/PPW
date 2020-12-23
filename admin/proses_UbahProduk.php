<?php
    include('Koneksi/Koneksi.php');
    
    if(isset($_POST['edit'])){
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

        $idproduk = $_POST['id'];
        $namaproduk = $_POST['nama'];
        $hargaproduk = $_POST['harga'];
        $namafoto = $_FILES['foto']['name'];
        $lokasifoto = $_FILES['foto']['tmp_name'];
        $deskripsi = $_POST['deskripsi'];

        if(!empty($lokasifoto)){
            move_uploaded_file($lokasifoto,"../foto_produk/$namafoto");

            $query = "UPDATE produk SET jenis_produk='$jenisproduk',nama_produk='$namaproduk',harga_produk='$hargaproduk',foto_produk='$namafoto',deskripsi_produk='$deskripsi' WHERE id_produk='$idproduk'";
            $sql = mysqli_query($koneksi,$query);

            if($sql){
                echo "<script> alert('Data Berhasil Diubah');
                location.href='Home.php?halaman=listproduk';</script>";
            }else{
                echo "<script> alert('Data Berhasil Diubah');
                location.href='Home.php?halaman=listproduk';</script>";
            }
        }else{
            $query = "UPDATE produk SET jenis_produk='$jenisproduk',nama_produk='$namaproduk',harga_produk='$hargaproduk',deskripsi_produk='$deskripsi' WHERE id_produk='$idproduk'";
            $sql = mysqli_query($koneksi,$query);

            if($sql){
                echo "<script> alert('Data Berhasil Diubah');
                location.href='Home.php?halaman=listproduk';</script>";
            }else{
                echo "<script> alert('Data Berhasil Diubah');
                location.href='Home.php?halaman=listproduk';</script>";
            }
        }
    }
    
?>