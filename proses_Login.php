<?php
    include('admin/Koneksi/Koneksi.php');
    
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = mysqli_query($koneksi,"SELECT * FROM pelanggan WHERE email_pelanggan = '$email' AND password_pelanggan = '$password'");
        $cek = mysqli_num_rows($login);

        if($cek == 1){
            $data = mysqli_fetch_assoc($login);
            $id = $data['id_pelanggan'];
            $_SESSION['pelanggan'] = $id;

            echo "<script> alert('Berhasil login');
            location.href='Home.php';</script>";
        }else{
            echo "<script> alert('Gagal login');
            location.href='Login.php';</script>";
        }
    }else{
        header("location:Login.php");
    }
?>