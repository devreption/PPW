<?php
include('admin/Koneksi/Koneksi.php');

if (isset($_POST['daftar'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
		$nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];   
        $datecreate = date("Y/m/d");

        $query = "INSERT INTO pelanggan(email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan,datecreate_pelanggan) VALUES ('$email','$password','$nama','$telepon','$alamat','$datecreate')";
        
        $cek_email = mysqli_num_rows(mysqli_query($koneksi,"SELECT email_pelanggan FROM pelanggan WHERE email_pelanggan = '$email'"));

        if($cek_email > 0){
            echo "<script> alert('Email sudah terdaftar'); location.href='register.php'; </script>";
        }else{
            if(mysqli_query($koneksi,$query)){
                echo "<script> alert('Berhasil mendaftar'); location.href='login.php'; </script>";
            }else{
                echo "<script> alert('Gagal mendaftar'); location.href='register.php'; </script>";
            }
        }		
    }else{
        header("location:Login.php");
    }
?>    